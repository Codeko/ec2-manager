<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\MachineListLayout;
use App\Models\Machine;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;


class MachineListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Blog machine';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All blog machines';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'machines' => Machine::paginate()
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
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.machine.edit')
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
            MachineListLayout::class
        ];
    }
}
