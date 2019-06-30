<?php

namespace Codrasil\Breadcrumbs;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/breadcrumbs.php',
            'breadcrumbs'
        );

        $this->app->singleton('breadcrumbs', function ($app) {
            return new Breadcrumbs($app['request']);
        });

        $this->registerBreadcrumbsMiddleware();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadBreadcrumbsViews();
        $this->loadBladeAliases();
    }

    /**
     * Load the breadcrumbs default views.
     *
     * @return void
     */
    protected function loadBreadcrumbsViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'breadcrumbs');
    }

    /**
     * Register the middleware.
     *
     * @return void
     */
    protected function registerBreadcrumbsMiddleware(): void
    {
        $this->app['router']->aliasMiddleware(
            'breadcrumbs', Http\Middleware\Breadcrumbs::class
        );
    }

    /**
     * Load Blade file includes.
     *
     * @return void
     */
    protected function loadBladeAliases(): void
    {
        Blade::include('breadcrumbs::partials.breadcrumbs', 'breadcrumbs');
    }
}
