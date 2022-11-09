<?php

namespace Niuzilong\DouyinStorePackage;

use Illuminate\Support\ServiceProvider;

class DouyinStoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('DouyinStore', function () {
            return new DouyinStore();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/store.php' => config_path('store.php'),
        ]);
    }
}
