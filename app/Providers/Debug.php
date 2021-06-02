<?php declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Database\Logger as LoggerDatabase;

class Debug extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->logging();
    }

    /**
     * @return void
     */
    protected function logging(): void
    {
        $this->loggingDatabase();
    }

    /**
     * @return void
     */
    protected function loggingDatabase(): void
    {
        if (config('logging.channels.database.enabled')) {
            LoggerDatabase::listen();
        }
    }
}