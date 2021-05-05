<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\ProjectListLayout;
use App\Models\Project;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;


class ProjectListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Blog project';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'All blog projects';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'projects' => Project::paginate()
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
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.project.edit')
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
            ProjectListLayout::class
        ];
    }
}
