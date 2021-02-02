<?php 
namespace Mcpuishor\Settings;

use Illuminate\Support\ServiceProvider;
use Mcpuishor\Settings\Settings;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('app-settings', function(){
        	return new Settings();
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