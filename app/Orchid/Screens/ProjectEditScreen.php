<?php

namespace App\Orchid\Screens;

use App\Models\Project;
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

class ProjectEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Creating a new project';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Blog projects';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Project $project): array
    {
        $this->exists = $project->exists;

        if($this->exists){
            $this->name = 'Edit project';
        }

        return [
            'project' => $project
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
            Button::make('Create project')
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
                Input::make('project.name')
                    ->title('Name')
                    ->placeholder('Attractive but mysterious name')
                    ->help('Specify a short descriptive name for this project.'),
                            
                Relation::make('project.idMachine')
                    ->title('Id machine')
                    ->fromModel(Machine::class, 'id'),
                    
                Relation::make('user.idUser')
                    ->title('Id User')
                    ->fromModel(User::class, 'id'), 
            ])
        ];
    }
    
    /**
     * @param Project    $project
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Project $project, Request $request)
    {
        $project->fill($request->get('project'))->save();

        Alert::info('You have successfully created an project.');

        return redirect()->route('platform.project.list');
    }
    
    /**
     * @param Project $project
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Project $project)
    {
        $project->delete();

        Alert::info('You have successfully deleted the project.');

        return redirect()->route('platform.project.list');
    }
}
