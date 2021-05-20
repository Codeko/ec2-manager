<?php

namespace App\Orchid\Layouts;

use App\Models\Schedule;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class ScheduleListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'schedules';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('name', 'Name')
            ->render(function (Schedule $schedule) {
                return Link::make($schedule->name)
                    ->route('platform.schedule.edit', $schedule);
            }),
            TD::make('cron', 'Cron')
            ->render(function (Schedule $schedule) {
                return Link::make($schedule->cron)
                    ->route('platform.schedule.edit', $schedule);
            }),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Updated'),
        ];
    }
}
