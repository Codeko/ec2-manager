<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\IdentityListLayout;
use App\Models\Identity;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;


class IdentityListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'All identities';

    /**
     * Display header description.
     *
     * @var string|null
     */
    // public $description = 'All blog identities';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'identities' => Identity::paginate()    
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
                ->route('platform.identity.edit'),
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
            IdentityListLayout::class
        ];
    }
}
