<?php

namespace Modules\Search\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class SearchServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Search';

    public function boot(): void
    {
        $this->mergeConfigFrom(
            module_path('Search', 'config/settings.php'),
            'settings'
        );
        $this->loadMigrations();
    }

    public function register(): void
    {
    }

    private function loadMigrations(): void
    {
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Migrations'));
    }
}
