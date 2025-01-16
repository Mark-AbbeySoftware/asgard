<?php

namespace absdev\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use absdev\Modules\Contracts\RepositoryInterface;
use absdev\Modules\Laravel\LaravelFileRepository;

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
