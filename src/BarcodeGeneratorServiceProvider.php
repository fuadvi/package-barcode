<?php

namespace BarcodeLeu\BarcodeGeneratorPackage;

use Illuminate\Support\ServiceProvider;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BarcodeGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('barcode', function () {
            return new BarcodeGenerator();
        });

        $this->app->alias('QrCode', QrCode::class);
    }

    public function boot()
    {
        // Publish configuration files or assets if needed
    }
}
