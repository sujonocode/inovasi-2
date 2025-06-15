<?php

namespace App\Controllers;

use App\Models\KlaimModul1;
use App\Models\KlaimModul2;
use App\Models\KlaimModul3;
use App\Models\KlaimModul4;
use App\Models\KlaimModul5;
use Dompdf\Dompdf;

class Klaim extends BaseController
{
    public function simpan1()
    {
        $model = new KlaimModul1();

        $data = [
            'nama_lengkap'     => $this->request->getPost('nama_lengkap'),
            'instansi'         => $this->request->getPost('instansi'),
            'token_pretest'    => $this->request->getPost('token_pretest'),
            'token_posttest'   => $this->request->getPost('token_posttest'),
            'rating'           => $this->request->getPost('rating'),
            'waktu_klaim'      => date('Y-m-d H:i:s'),
        ];

        $id = $model->insert($data);

        return redirect()->to('klaim/pdf1/' . $id);
    }

    public function pdf1($id)
    {
        $model = new KlaimModul1();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Klaim tidak ditemukan.");
        }

        // ambil nilai pretest dan posttest dari token
        $db = \Config\Database::connect();
        $data['nilai_pretest'] = $db->table('quiz_results_1')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('score');

        $data['nilai_posttest'] = $db->table('quiz_results_1')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('score');

        $data['nomor'] = $id;

        // render HTML dari view
        $html = view('digistat/klaim_surat_1', ['data' => $data]);

        // generate PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);
    }
}
