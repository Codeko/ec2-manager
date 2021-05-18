<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\MachineSharedUrlListLayout;
use App\Models\MachineSharedUrl;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class MachineSharedUrlListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'All Machine Shared Url';

    /**
     * Display header description.
     *
     * @var string
     */
    // public $description = 'All blog Machine Shared Urls';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'machinesharedurls' =>MachineSharedUrl::paginate()
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
            ->route('platform.machinesharedurl.edit')
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
            MachineSharedUrlListLayout::class
        ];
    }
}
