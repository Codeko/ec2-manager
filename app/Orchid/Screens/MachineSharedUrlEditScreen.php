<?php

namespace App\Orchid\Screens;

use App\Models\MachineSharedUrl;
use App\Models\Machine;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class MachineSharedUrlEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Creating a new Machine Shared Url';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'blog Machine Shared Urls';

    /**
     * @var bool
     */
    public $exists = false;

    /**
     * Query data.
     * 
     * @param MachineSharedUrl $machinesharedurl
     *
     * @return array
     */
    public function query(MachineSharedUrl $machinesharedurl): array
    {
        $this->exists = $machinesharedurl->exists;

        if($this->exists){
            $this->name = 'Edit machine shared url';
        }

        return [
            'machinesharedurl' => $machinesharedurl
        ];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create machine shared url')
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
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('machinesharedurl.title')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title'),

                DateTimer::make('machinesharedurl.startDate')
                    ->title('Start date')
                    ->format('Y-m-d'),
                
                DateTimer::make('machinesharedurl.endDate')
                    ->title('End date')
                    ->format('Y-m-d'),

                Picture::make('machinesharedurl.image')
                    ->title('Image'),

                TextArea::make('machinesharedurl.text')
                    ->title('Text'),

                Input::make('machinesharedurl.url')
                    ->title('URL'),

                Relation::make('machinesharedurl.id_machine')
                    ->title('Id machine')
                    ->fromModel(Machine::class, 'id'),

            ])
        ];
    }

    /**
     * @param MachineSharedUrl    $machinesharedurl
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(MachineSharedUrl $machinesharedurl, Request $request)
    {
        $machinesharedurl->fill($request->get('machinesharedurl'))->save();

        Alert::info('You have successfully created an machine shared url.');

        return redirect()->route('platform.machinesharedurl.list');
    }

    /**
     * @param MachineSharedUrl $machinesharedurl
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(MachineSharedUrl $machinesharedurl)
    {
        $machinesharedurl->delete();

        Alert::info('You have successfully deleted the machine shared url.');

        return redirect()->route('platform.machinesharedurl.list');
    }
}
