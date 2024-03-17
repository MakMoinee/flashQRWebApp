<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generateQRCode($flashCardID)
    {
        $encrypt = Hash::make($flashCardID);
        $data =  $encrypt . '-' . strtotime(now());
        // $qrCode = QrCode::generate($data);
        // return response($qrCode)->header('Content-type', 'image/png');

        $qrCode = QrCode::size(200)->generate($data);

        // Return a view with the QR code image
        return view('qrcode', ['qrCode' => $qrCode]);
    }
}
