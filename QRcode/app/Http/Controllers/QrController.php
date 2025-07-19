<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\Label\Font\OpenSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class QrController extends Controller
{
public function generateQR(Request $request){
    $text = $request->input('text', 'absensi-' . now()); // timestamp biar unik
    $builder = new Builder(

    writer: new PngWriter(),
    writerOptions: [],
    validateResult: false,
    data: 'Custom QR code contents',
    encoding: new Encoding('UTF-8'),
    size: 300,
    margin: 10,
    roundBlockSizeMode: RoundBlockSizeMode::Margin,
    logoResizeToWidth: 50,
    logoPunchoutBackground: true,
    labelText: 'QR Login',
    labelFont: new OpenSans(20)

    );
    // Simpan QR ke file
    $result =$builder->build();
    $filename = public_path('qrcode.png');
    $result->saveToFile($filename);
    return redirect()->back()->with('success', 'QR Code generated.');
}

} 

