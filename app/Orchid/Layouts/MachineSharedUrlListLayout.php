<?php

namespace App\Orchid\Layouts;

use App\Models\MachineSharedUrl;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;

class MachineSharedUrlListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'machinesharedurls';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (MachineSharedUrl $machinesharedurl) {
                    return Link::make($machinesharedurl->title)
                        ->route('platform.machinesharedurl.edit', $machinesharedurl);
                }),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
