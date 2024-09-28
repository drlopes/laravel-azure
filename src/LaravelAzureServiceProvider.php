<?php

namespace DRLopes\LaravelAzure;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DRLopes\LaravelAzure\Commands\LaravelAzureCommand;

class LaravelAzureServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-azure')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_azure_table')
            ->hasCommand(LaravelAzureCommand::class);
    }
}
