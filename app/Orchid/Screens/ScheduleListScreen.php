<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\ScheduleListLayout;
use App\Models\Schedule;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ScheduleListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'All schedules';

    /**
     * Display header description.
     *
     * @var string|null
     */
    // public $description = 'All blog schedules';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'schedules' => Schedule::paginate()    
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
                ->route('platform.schedule.edit')
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
            ScheduleListLayout::class    
        ];
    }
}
