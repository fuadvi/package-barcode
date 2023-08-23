<?php

namespace BarcodeLeu\BarcodeGeneratorPackage;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;

class BarcodeGenerator
{
    public function generate($data)
    {
        // Additional validation here
        if (!is_string($data) || empty($data)) {
            throw new \InvalidArgumentException("Invalid data provided for barcode generation.");
        }

        // Generate the barcode
        return QrCode::size(200)->generate($data);
    }
}
