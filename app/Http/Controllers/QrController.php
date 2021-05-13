<?php

namespace App\Http\Controllers;

class QrController extends Controller
{
    public function make()
    {
        $file = public_path('qr.png');
        return \QRCode::text('QR Code Generator for Laravel!')->setOutfile($file)->png();
    }

    public function vcard()
    {
        // Personal Information
        $firstName = 'John';
        $lastName = 'Doe';
        $title = 'Mr.';
        $email = 'john.doe@example.com';

       

        return \QRCode::vCard($firstName, $lastName, $title, $email)
            ->setErrorCorrectionLevel('H')
            ->setSize(4)
            ->setMargin(2)
            ->svg();
    }

}
