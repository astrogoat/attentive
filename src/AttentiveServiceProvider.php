<?php

namespace Astrogoat\Attentive;

use Astrogoat\Attentive\Settings\AttentiveSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AttentiveServiceProvider extends PackageServiceProvider
{
    public function registerApp(LegoManager $stratum)
    {
        $stratum->registerApp(function (App $app) {
            return $app
                ->name('attentive')
                ->settings(AttentiveSettings::class)
                ->migrations([
                    __DIR__ . '/../database/migrations',
                    __DIR__ . '/../database/migrations/settings',
                ]);
        });
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $this->registerApp($lego);
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('attentive')->hasViews();
    }
}
