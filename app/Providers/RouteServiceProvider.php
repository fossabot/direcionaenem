<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->mapWebRoutes($router);
        $this->mapApiRoutes($router);
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            require app_path('Http/routes/site.php');
            require app_path('Http/routes/admin.php');
            require app_path('Http/routes/instrutor.php');
            require app_path('Http/routes/estudante.php');
        });
    }

    public function mapApiRoutes(Router $router)
    {
        $router->group(['namespace'  => 'App\Http\Controllers\Api',
                        'middleware' => 'api',
                        'prefix'     => 'api',
                        'as'         => 'api.'], function () {
            require app_path('Http/routes/api.php');
        });
    }
}
