<?php

namespace App\Orchid\Screens;

use App\Models\Machine;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class MachineEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Creating a new machine';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Blog machines';

    /**
     * @var bool
     */
    public $exists = false;

    /**
     * Query data.
     *
     * @param Machine $machine
     * 
     * @return array
     */
    public function query(Machine $machine): array
    {
        $this->exists = $machine->exists;

        if($this->exists){
            $this->name = 'Edit machine';
        }
        return [
            'machine' => $machine
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
            Button::make('Create Machine')
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
                Input::make('machine.name')
                    ->title('Name')
                    ->placeholder('Attractive but mysterious name')
                    ->help('Specify a short descriptive title for this machine.'),

                Input::make('machine.ip')
                    ->title('Ip')
                    ->placeholder('Machine ip'),

                Quill::make('machine.urls')
                    ->title('Urls'),

            ])
        ];
    }

    /**
     * @param Machine    $machine
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Machine $machine, Request $request)
    {
        $machine->fill($request->get('machine'))->save();

        Alert::info('You have successfully created an machine.');

        return redirect()->route('platform.machine.list');
    }

    /**
     * @param Machine $machine
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Machine $machine)
    {
        $machine->delete();

        Alert::info('You have successfully deleted the machine.');

        return redirect()->route('platform.machine.list');
    }
}
