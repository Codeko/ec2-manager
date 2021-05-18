<?php

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make('Machines')
                ->icon('screen-desktop')
                ->list([
                    Menu::make('View all machines')
                    ->icon('eye')
                    ->route('platform.machine.list'),
                    Menu::make('Create a new machine')
                    ->icon('plus-alt')
                    ->route('platform.machine.edit'),
                ]),
                
            Menu::make('Projects')
                ->icon('folder')
                ->list([
                    Menu::make('View all projects')
                    ->icon('eye')
                    ->route('platform.project.list'),
                    Menu::make('Create a new project')
                    ->icon('plus-alt')
                    ->route('platform.project.edit'),
                ]),
                
            Menu::make('Schedules')
                ->icon('android')
                ->list([
                    Menu::make('View all schedules')
                    ->icon('eye')
                    ->route('platform.schedule.list'),
                    Menu::make('Create a new schedule')
                    ->icon('plus-alt')
                    ->route('platform.schedule.edit'),
                ]),
                
            Menu::make('Identities')
                ->icon('bulb')
                ->list([
                    Menu::make('View all identities')
                    ->icon('eye')
                    ->route('platform.identity.list'),
                    Menu::make('Create a new identity')
                    ->icon('plus-alt')
                    ->route('platform.identity.edit'),
                ]),
                
            Menu::make('Machine Shared Urls')
                ->icon('modules')
                ->list([
                    Menu::make('View all machine shared urls')
                    ->icon('eye')
                    ->route('platform.machinesharedurl.list'),
                    Menu::make('Create a new machine shared urls')
                    ->icon('plus-alt')
                    ->route('platform.machinesharedurl.edit'),
                ]),
                
            Menu::make('Users')
                ->icon('user')
                ->list([
                    Menu::make('View all users')
                    ->icon('eye')
                    ->route('platform.systems.users'),
                    Menu::make('Create a new user')
                    ->icon('plus-alt')
                    ->route('platform.systems.users.create'),
                ]),
                
            Menu::make('Roles')
                ->icon('lock')
                ->list([
                    Menu::make('View all roles')
                    ->icon('eye')
                    ->route('platform.systems.roles'),
                    Menu::make('Create a new rol')
                    ->icon('plus-alt')
                    ->route('platform.systems.roles.create'),
                ]),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make('Profile')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }

    /**
     * @return string[]
     */
    public function registerSearchModels(): array
    {
        return [
            // ...Models
            // \App\Models\User::class
        ];
    }
}
