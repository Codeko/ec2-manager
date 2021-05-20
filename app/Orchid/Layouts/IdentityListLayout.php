<?php

namespace App\Orchid\Layouts;

use App\Models\Identity;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class IdentityListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'identities';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Identity $identity) {
                    return Link::make($identity->name)
                        ->route('platform.identity.edit', $identity);
                }),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}