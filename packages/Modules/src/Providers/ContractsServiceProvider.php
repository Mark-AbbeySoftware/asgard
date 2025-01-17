<?php

namespace AbbeySoftwareDevelopment\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use AbbeySoftwareDevelopment\Modules\Contracts\RepositoryInterface;
use AbbeySoftwareDevelopment\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
