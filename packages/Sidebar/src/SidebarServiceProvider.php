<?php

namespace AbbeySoftwareDevelopment\Sidebar;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use AbbeySoftwareDevelopment\Sidebar\Infrastructure\SidebarFlusherFactory;
use AbbeySoftwareDevelopment\Sidebar\Infrastructure\SidebarResolverFactory;

class SidebarServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     * @var bool
     */
    protected $defer = false;

    /**
     * @var string
     */
    protected $shortName = 'sidebar';

    /**
     * Boot the service provider.
     * @return void
     */
    public function boot()
    {
        $this->registerViews();
    }

    /**
     * Register the service provider.
     * @return void
     */
    public function register()
    {
        // Register config
        $this->registerConfig();

        // Bind SidebarResolver
        $this->app->bind('AbbeySoftwareDevelopment\Sidebar\Infrastructure\SidebarResolver',
            function (Application $app) {

                $resolver = SidebarResolverFactory::getClassName(
                    $app['config']->get('sidebar.cache.method')
                );

                return $app->make($resolver);
            });

        // Bind SidebarFlusher
        $this->app->bind('AbbeySoftwareDevelopment\Sidebar\Infrastructure\SidebarFlusher', function (Application $app) {

            $resolver = SidebarFlusherFactory::getClassName(
                $app['config']->get('sidebar.cache.method')
            );

            return $app->make($resolver);
        });

        // Bind manager
        $this->app->singleton('AbbeySoftwareDevelopment\Sidebar\SidebarManager');

        // Bind Menu
        $this->app->bind(
            'AbbeySoftwareDevelopment\Sidebar\Menu',
            'AbbeySoftwareDevelopment\Sidebar\Domain\DefaultMenu'
        );

        // Bind Group
        $this->app->bind(
            'AbbeySoftwareDevelopment\Sidebar\Group',
            'AbbeySoftwareDevelopment\Sidebar\Domain\DefaultGroup'
        );

        // Bind Item
        $this->app->bind(
            'AbbeySoftwareDevelopment\Sidebar\Item',
            'AbbeySoftwareDevelopment\Sidebar\Domain\DefaultItem'
        );

        // Bind Badge
        $this->app->bind(
            'AbbeySoftwareDevelopment\Sidebar\Badge',
            'AbbeySoftwareDevelopment\Sidebar\Domain\DefaultBadge'
        );

        // Bind Append
        $this->app->bind(
            'AbbeySoftwareDevelopment\Sidebar\Append',
            'AbbeySoftwareDevelopment\Sidebar\Domain\DefaultAppend'
        );

        // Bind Renderer
        $this->app->bind(
            'AbbeySoftwareDevelopment\Sidebar\Presentation\SidebarRenderer',
            'AbbeySoftwareDevelopment\Sidebar\Presentation\Illuminate\IlluminateSidebarRenderer'
        );
    }

    /**
     * Register views.
     * @return void
     */
    protected function registerViews()
    {
        $view = match (config('sidebar.view')) {
            'AdminLTE3' => 'adminlte-3',
            default => 'adminlte-2',
        };

        $location = __DIR__ . "/../resources/views/{$view}";

        $this->loadViewsFrom($location, $this->shortName);

        $this->publishes([
            $location => base_path('resources/views/vendor/' . $this->shortName),
        ], 'sidebar-views');
    }

    /**
     * Register config
     * @return void
     */
    protected function registerConfig()
    {
        $location = __DIR__ . '/../config/' . $this->shortName . '.php';

        $this->mergeConfigFrom(
            $location, $this->shortName
        );

        $this->publishes([
            $location => config_path($this->shortName . '.php'),
        ], 'sidebar-config');
    }

    /**
     * Get the services provided by the provider.
     * @return array
     */
    public function provides()
    {
        return [
            'AbbeySoftwareDevelopment\Sidebar\Menu',
            'AbbeySoftwareDevelopment\Sidebar\Item',
            'AbbeySoftwareDevelopment\Sidebar\Group',
            'AbbeySoftwareDevelopment\Sidebar\Badge',
            'AbbeySoftwareDevelopment\Sidebar\Append',
            'AbbeySoftwareDevelopment\Sidebar\SidebarManager',
            'AbbeySoftwareDevelopment\Sidebar\Presentation\SidebarRenderer',
            'AbbeySoftwareDevelopment\Sidebar\Infrastructure\SidebarResolver'
        ];
    }
}
