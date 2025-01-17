<?php

namespace AbbeySoftwareDevelopment\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use AbbeySoftwareDevelopment\Modules\Commands\CommandMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\ControllerMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\DisableCommand;
use AbbeySoftwareDevelopment\Modules\Commands\DumpCommand;
use AbbeySoftwareDevelopment\Modules\Commands\EnableCommand;
use AbbeySoftwareDevelopment\Modules\Commands\EventMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\FactoryMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\InstallCommand;
use AbbeySoftwareDevelopment\Modules\Commands\JobMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\LaravelModulesV6Migrator;
use AbbeySoftwareDevelopment\Modules\Commands\ListCommand;
use AbbeySoftwareDevelopment\Modules\Commands\ListenerMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\MailMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\MiddlewareMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\MigrateCommand;
use AbbeySoftwareDevelopment\Modules\Commands\MigrateRefreshCommand;
use AbbeySoftwareDevelopment\Modules\Commands\MigrateResetCommand;
use AbbeySoftwareDevelopment\Modules\Commands\MigrateRollbackCommand;
use AbbeySoftwareDevelopment\Modules\Commands\MigrateStatusCommand;
use AbbeySoftwareDevelopment\Modules\Commands\MigrationMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\ModelMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\ModuleDeleteCommand;
use AbbeySoftwareDevelopment\Modules\Commands\ModuleMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\NotificationMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\PolicyMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\ProviderMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\PublishCommand;
use AbbeySoftwareDevelopment\Modules\Commands\PublishConfigurationCommand;
use AbbeySoftwareDevelopment\Modules\Commands\PublishMigrationCommand;
use AbbeySoftwareDevelopment\Modules\Commands\PublishTranslationCommand;
use AbbeySoftwareDevelopment\Modules\Commands\RequestMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\ResourceMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\RouteProviderMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\RuleMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\SeedCommand;
use AbbeySoftwareDevelopment\Modules\Commands\SeedMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\SetupCommand;
use AbbeySoftwareDevelopment\Modules\Commands\TestMakeCommand;
use AbbeySoftwareDevelopment\Modules\Commands\UnUseCommand;
use AbbeySoftwareDevelopment\Modules\Commands\UpdateCommand;
use AbbeySoftwareDevelopment\Modules\Commands\UseCommand;

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
