<?php

namespace Notifium\Utilities;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Notifium\Utilities\Commands\UtilitiesCommand;

class UtilitiesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('utilities')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_utilities_table')
            ->hasCommand(UtilitiesCommand::class);
    }
}
