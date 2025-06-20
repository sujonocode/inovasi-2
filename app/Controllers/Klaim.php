<?php

namespace App\Controllers;

use App\Models\KlaimModul1;
use App\Models\KlaimModul2;
use App\Models\KlaimModul3;
use App\Models\KlaimModul4;
use App\Models\KlaimModul5;
use Dompdf\Dompdf;
use Dompdf\Options;

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

        return redirect()->to(base_url('klaim/pdf1/' . $id));
    }

    public function pdf1($id)
    {
        $model = new KlaimModul1();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Token tidak ditemukan.");
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
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        $dompdf = new Dompdf($options);
        // $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);
    }
    // 2
    public function simpan2()
    {
        $model = new KlaimModul2();

        $data = [
            'nama_lengkap'     => $this->request->getPost('nama_lengkap'),
            'instansi'         => $this->request->getPost('instansi'),
            'token_pretest'    => $this->request->getPost('token_pretest'),
            'token_posttest'   => $this->request->getPost('token_posttest'),
            'rating'           => $this->request->getPost('rating'),
            'waktu_klaim'      => date('Y-m-d H:i:s'),
        ];

        $id = $model->insert($data);

        return redirect()->to(base_url('klaim/pdf2/' . $id));
    }

    public function pdf2($id)
    {
        $model = new KlaimModul2();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Token tidak ditemukan.");
        }

        // ambil nilai pretest dan posttest dari token
        $db = \Config\Database::connect();
        $data['nilai_pretest'] = $db->table('quiz_results_2')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('score');

        $data['nilai_posttest'] = $db->table('quiz_results_2')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('score');

        $data['nomor'] = $id;

        // render HTML dari view
        $html = view('digistat/klaim_surat_2', ['data' => $data]);

        // generate PDF
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        $dompdf = new Dompdf($options);
        // $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);
    }
    //3
    public function simpan3()
    {
        $model = new KlaimModul3();

        $data = [
            'nama_lengkap'     => $this->request->getPost('nama_lengkap'),
            'instansi'         => $this->request->getPost('instansi'),
            'token_pretest'    => $this->request->getPost('token_pretest'),
            'token_posttest'   => $this->request->getPost('token_posttest'),
            'rating'           => $this->request->getPost('rating'),
            'waktu_klaim'      => date('Y-m-d H:i:s'),
        ];

        $id = $model->insert($data);

        return redirect()->to(base_url('klaim/pdf3/' . $id));
    }

    public function pdf3($id)
    {
        $model = new KlaimModul3();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Token tidak ditemukan.");
        }

        // ambil nilai pretest dan posttest dari token
        $db = \Config\Database::connect();
        $data['nilai_pretest'] = $db->table('quiz_results_3')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('score');

        $data['nilai_posttest'] = $db->table('quiz_results_3')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('score');

        $data['nomor'] = $id;

        // render HTML dari view
        $html = view('digistat/klaim_surat_3', ['data' => $data]);

        // generate PDF
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        $dompdf = new Dompdf($options);
        // $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);
    }
    //4
    public function simpan4()
    {
        $model = new KlaimModul4();

        $data = [
            'nama_lengkap'     => $this->request->getPost('nama_lengkap'),
            'instansi'         => $this->request->getPost('instansi'),
            'token_pretest'    => $this->request->getPost('token_pretest'),
            'token_posttest'   => $this->request->getPost('token_posttest'),
            'rating'           => $this->request->getPost('rating'),
            'waktu_klaim'      => date('Y-m-d H:i:s'),
        ];

        $id = $model->insert($data);

        return redirect()->to(base_url('klaim/pdf4/' . $id));
    }

    public function pdf4($id)
    {
        $model = new KlaimModul4();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Token tidak ditemukan.");
        }

        // ambil nilai pretest dan posttest dari token
        $db = \Config\Database::connect();
        $data['nilai_pretest'] = $db->table('quiz_results_4')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('score');

        $data['nilai_posttest'] = $db->table('quiz_results_4')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('score');

        $data['nomor'] = $id;

        // render HTML dari view
        $html = view('digistat/klaim_surat_4', ['data' => $data]);

        // generate PDF
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        $dompdf = new Dompdf($options);
        // $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);
    }
    //5
    public function simpan5()
    {
        $model = new KlaimModul5();

        $data = [
            'nama_lengkap'     => $this->request->getPost('nama_lengkap'),
            'instansi'         => $this->request->getPost('instansi'),
            'token_pretest'    => $this->request->getPost('token_pretest'),
            'token_posttest'   => $this->request->getPost('token_posttest'),
            'rating'           => $this->request->getPost('rating'),
            'waktu_klaim'      => date('Y-m-d H:i:s'),
        ];

        $id = $model->insert($data);

        return redirect()->to(base_url('klaim/pdf5/' . $id));
    }

    public function pdf5($id)
    {
        $model = new KlaimModul5();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Token tidak ditemukan.");
        }

        // ambil nilai pretest dan posttest dari token
        $db = \Config\Database::connect();
        $data['nilai_pretest'] = $db->table('quiz_results_5')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('score');

        $data['nilai_posttest'] = $db->table('quiz_results_5')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('score');

        $data['nomor'] = $id;

        // render HTML dari view
        $html = view('digistat/klaim_surat_5', ['data' => $data]);

        // generate PDF
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        $dompdf = new Dompdf($options);
        // $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);
    }
}
