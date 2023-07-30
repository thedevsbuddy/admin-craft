<?php

namespace Devsbuddy\AdminCraft;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Devsbuddy\AdminCraft\Commands\AdminCraftCommand;

class AdminCraftServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-craft')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin-craft_table')
            ->hasCommand(AdminCraftCommand::class);
    }
}
