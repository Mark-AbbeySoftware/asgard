<?php

namespace absdev\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use absdev\Modules\Commands\CommandMakeCommand;
use absdev\Modules\Commands\ControllerMakeCommand;
use absdev\Modules\Commands\DisableCommand;
use absdev\Modules\Commands\DumpCommand;
use absdev\Modules\Commands\EnableCommand;
use absdev\Modules\Commands\EventMakeCommand;
use absdev\Modules\Commands\FactoryMakeCommand;
use absdev\Modules\Commands\InstallCommand;
use absdev\Modules\Commands\JobMakeCommand;
use absdev\Modules\Commands\LaravelModulesV6Migrator;
use absdev\Modules\Commands\ListCommand;
use absdev\Modules\Commands\ListenerMakeCommand;
use absdev\Modules\Commands\MailMakeCommand;
use absdev\Modules\Commands\MiddlewareMakeCommand;
use absdev\Modules\Commands\MigrateCommand;
use absdev\Modules\Commands\MigrateRefreshCommand;
use absdev\Modules\Commands\MigrateResetCommand;
use absdev\Modules\Commands\MigrateRollbackCommand;
use absdev\Modules\Commands\MigrateStatusCommand;
use absdev\Modules\Commands\MigrationMakeCommand;
use absdev\Modules\Commands\ModelMakeCommand;
use absdev\Modules\Commands\ModuleDeleteCommand;
use absdev\Modules\Commands\ModuleMakeCommand;
use absdev\Modules\Commands\NotificationMakeCommand;
use absdev\Modules\Commands\PolicyMakeCommand;
use absdev\Modules\Commands\ProviderMakeCommand;
use absdev\Modules\Commands\PublishCommand;
use absdev\Modules\Commands\PublishConfigurationCommand;
use absdev\Modules\Commands\PublishMigrationCommand;
use absdev\Modules\Commands\PublishTranslationCommand;
use absdev\Modules\Commands\RequestMakeCommand;
use absdev\Modules\Commands\ResourceMakeCommand;
use absdev\Modules\Commands\RouteProviderMakeCommand;
use absdev\Modules\Commands\RuleMakeCommand;
use absdev\Modules\Commands\SeedCommand;
use absdev\Modules\Commands\SeedMakeCommand;
use absdev\Modules\Commands\SetupCommand;
use absdev\Modules\Commands\TestMakeCommand;
use absdev\Modules\Commands\UnUseCommand;
use absdev\Modules\Commands\UpdateCommand;
use absdev\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleDeleteCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
        LaravelModulesV6Migrator::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        return $this->commands;

    }
}
