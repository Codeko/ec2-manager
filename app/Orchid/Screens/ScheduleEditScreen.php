<?php

namespace App\Orchid\Screens;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\Select;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ScheduleEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Creating a new schedule';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Blog schedules';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Schedule $schedule): array
    {
        $this->exists = $schedule->exists;
        
        if($this->exists){
            $this->name = 'Edit schedule';
        }
        
        return [
            'schedule' => $schedule
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create schedule')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exists),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('schedule.name')
                    ->title('Name')
                    ->placeholder('Attractive but mysterious name')
                    ->help('Specify a short descriptive name for this schedule.'),
                Input::make('schedule.cron')
                    ->title('Cron')
                    ->placeholder('Attractive but mysterious cron')
                    ->help('Specify a short descriptive cron for this schedule.'),
                Select::make('schedule.state')
                    ->options([
                        'on'   => 'On',
                        'off' => 'Off',
                        'restart' => 'Restart'
                    ])
                    ->title('Select the state of the schedule')
                    ->help('Allow search bots to index')
            ])
        ];
    }
    
    /**
     * @param Schedule    $schedule
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Schedule $schedule, Request $request)
    {
        $schedule->fill($request->get('schedule'))->save();

        Alert::info('You have successfully created a schedule.');

        return redirect()->route('platform.schedule.list');
    }
    
    /**
     * @param Schedule $schedule
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Schedule $schedule)
    {
        $schedule->delete();

        Alert::info('You have successfully deleted the schedule.');

        return redirect()->route('platform.schedule.list');
    }
    
    
}
