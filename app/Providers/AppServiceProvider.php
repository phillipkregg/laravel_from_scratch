<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Example;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        // app()->bind('App\Example', function () {
        //     $collaborator = new \App\Collaborator();
        //     $foo = 'foobar';

        //     return new Example($collaborator, $foo);
        // });

        $this->app->bind('example', function () {
            $collaborator = new \App\Collaborator();
            $foo = 'foobar';

            return new Example($collaborator, $foo);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
