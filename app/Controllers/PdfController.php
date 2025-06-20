<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfController extends BaseController
{
    public function generate()
    {
        // Aktifkan remote image
        $options = new Options();
        $options->set('isRemoteEnabled', true);

        // Buat objek Dompdf
        $dompdf = new Dompdf($options);

        // Render HTML dari view
        $html = view('pdf_view');
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Output ke browser
        $dompdf->stream('contoh_gambar.pdf', ['Attachment' => false]);
    }
}
