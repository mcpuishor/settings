<?php 
namespace Mcpuishor\Settings;

use Illuminate\Support\ServiceProvider;
use Mcpuishor\Settings\Setting;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('app-settings', function() {
        	return new SettingsRepository(new Setting());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
    }

}