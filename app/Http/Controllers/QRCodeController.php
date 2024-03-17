<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generateQRCode($category, $flashcard)
    {
        $data = $category . ' - ' . $flashcard;
        $qrCode = QrCode::generate($data);
        return response($qrCode)->header('Content-type', 'image/png');
    }
}
