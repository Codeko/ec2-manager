<?php

namespace App\Orchid\Screens;

use App\Models\Identity;
use App\Models\Machine;
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

class IdentityEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Creating a new identity';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Blog identities';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Identity $identity): array
    {
        $this->exists = $identity->exists;

        if($this->exists){
            $this->name = 'Edit identity';
        }

        return [
            'identity' => $identity
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
            Button::make('Create identity')
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
                Input::make('identity.username')
                    ->title('Username')
                    ->placeholder('Attractive but mysterious username')
                    ->help('Specify a short descriptive username for this identity.'),
                Input::make('identity.password')
                    ->title('Password')
                    ->placeholder('Attractive but mysterious password')
                    ->help('Specify a secure password for this identity.'),

                Relation::make('identity.idMachine')
                    ->title('Id Machine')
                    ->fromModel(Machine::class, 'id'), 
            ])
        ];
    }
    
    /**
     * @param Identity    $identity
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Identity $identity, Request $request)
    {
        $identity->fill($request->get('identity'))->save();

        Alert::info('You have successfully created an identity.');

        return redirect()->route('platform.identity.list');
    }
    
    /**
     * @param Identity $identity
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Identity $identity)
    {
        $identity->delete();

        Alert::info('You have successfully deleted the identity.');

        return redirect()->route('platform.identity.list');
    }
}
