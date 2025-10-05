<?php

namespace App\Controllers;

use App\Models\KlaimModul1;
use App\Models\KlaimModul2;
use App\Models\KlaimModul3;
use App\Models\KlaimModul4;
use App\Models\KlaimModul5;
use App\Models\DescanKlaimModul1;
use App\Models\DescanKlaimModul2;
use App\Models\DescanKlaimModul3;
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

        $data['tanggal_pretest'] = $db->table('quiz_results_1')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('created_at');

        $data['tanggal_posttest'] = $db->table('quiz_results_1')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('created_at');

        $data['nomor'] = $id;

        // uncomment this //
        // // render HTML dari view
        // $html = view('digistat/klaim_surat_1', ['data' => $data]);

        // // generate PDF
        // $options = new Options();
        // $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        // $dompdf = new Dompdf($options);
        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);
        // ... //

        // ambil tanggal saja dari created_at
        $tanggal_pretest = date('d F Y', strtotime($data['tanggal_pretest']));
        $tanggal_posttest = date('d F Y', strtotime($data['tanggal_posttest']));

        // konversi nama bulan ke bahasa Indonesia
        $bulan_indonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $tanggal_pretest_id = strtr($tanggal_pretest, $bulan_indonesia);
        $tanggal_posttest_id = strtr($tanggal_posttest, $bulan_indonesia);

        // tentukan modul berdasarkan tabel
        $modul = 'Modul 1 - Prinsip SDI'; // default
        if (strpos($data['token_pretest'], 'quiz_results_2') !== false) {
            $modul = 'Modul 2 - Kualitas Data';
        } elseif (strpos($data['token_pretest'], 'quiz_results_3') !== false) {
            $modul = 'Modul 3 - Proses Bisnis Statistik';
        } elseif (strpos($data['token_pretest'], 'quiz_results_4') !== false) {
            $modul = 'Modul 4 - Kelembagaan';
        } elseif (strpos($data['token_pretest'], 'quiz_results_5') !== false) {
            $modul = 'Modul 5 - Sistem Statistik Nasional';
        }

        // siapkan pesan WhatsApp
        $pesan = "```\n"
            . "--- Klaim Surat Keterangan Digistat ---\n\n"
            . "Nomor             : {$data['nomor']}\n"
            . "Nama              : {$data['nama_lengkap']}\n"
            . "Instansi          : {$data['instansi']}\n"
            . "Token Pretest     : {$data['token_pretest']}\n"
            . "Nilai Pretest     : {$data['nilai_pretest']}\n"
            . "Token Posttest    : {$data['token_posttest']}\n"
            . "Nilai Posttest    : {$data['nilai_posttest']}\n"
            . "Modul             : {$modul}\n"
            . "Tanggal Pretest   : {$tanggal_pretest_id}\n"
            . "Tanggal Posttest  : {$tanggal_posttest_id}\n"
            . "```";

        // URL WhatsApp
        $nomor_wa = '6281216111802';
        $wa_url = "https://wa.me/{$nomor_wa}?text=" . urlencode($pesan);

        // redirect ke WA
        return redirect()->to($wa_url);
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

        $data['tanggal_pretest'] = $db->table('quiz_results_2')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('created_at');

        $data['tanggal_posttest'] = $db->table('quiz_results_2')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('created_at');

        $data['nomor'] = $id;

        // // render HTML dari view
        // $html = view('digistat/klaim_surat_2', ['data' => $data]);

        // // generate PDF
        // $options = new Options();
        // $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        // $dompdf = new Dompdf($options);
        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);

        // ambil tanggal saja dari created_at
        $tanggal_pretest = date('d F Y', strtotime($data['tanggal_pretest']));
        $tanggal_posttest = date('d F Y', strtotime($data['tanggal_posttest']));

        // konversi nama bulan ke bahasa Indonesia
        $bulan_indonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $tanggal_pretest_id = strtr($tanggal_pretest, $bulan_indonesia);
        $tanggal_posttest_id = strtr($tanggal_posttest, $bulan_indonesia);

        // tentukan modul berdasarkan tabel
        $modul = 'Modul 1 - Prinsip SDI'; // default
        if (strpos($data['token_pretest'], 'quiz_results_2') !== false) {
            $modul = 'Modul 2 - Kualitas Data';
        } elseif (strpos($data['token_pretest'], 'quiz_results_3') !== false) {
            $modul = 'Modul 3 - Proses Bisnis Statistik';
        } elseif (strpos($data['token_pretest'], 'quiz_results_4') !== false) {
            $modul = 'Modul 4 - Kelembagaan';
        } elseif (strpos($data['token_pretest'], 'quiz_results_5') !== false) {
            $modul = 'Modul 5 - Sistem Statistik Nasional';
        }

        // siapkan pesan WhatsApp
        $pesan = "```\n"
            . "--- Klaim Surat Keterangan Digistat ---\n\n"
            . "Nomor             : {$data['nomor']}\n"
            . "Nama              : {$data['nama_lengkap']}\n"
            . "Instansi          : {$data['instansi']}\n"
            . "Token Pretest     : {$data['token_pretest']}\n"
            . "Nilai Pretest     : {$data['nilai_pretest']}\n"
            . "Token Posttest    : {$data['token_posttest']}\n"
            . "Nilai Posttest    : {$data['nilai_posttest']}\n"
            . "Modul             : {$modul}\n"
            . "Tanggal Pretest   : {$tanggal_pretest_id}\n"
            . "Tanggal Posttest  : {$tanggal_posttest_id}\n"
            . "```";

        // URL WhatsApp
        $nomor_wa = '6281216111802';
        $wa_url = "https://wa.me/{$nomor_wa}?text=" . urlencode($pesan);

        // redirect ke WA
        return redirect()->to($wa_url);
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

        $data['tanggal_pretest'] = $db->table('quiz_results_3')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('created_at');

        $data['tanggal_posttest'] = $db->table('quiz_results_3')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('created_at');

        $data['nomor'] = $id;

        // // render HTML dari view
        // $html = view('digistat/klaim_surat_3', ['data' => $data]);

        // // generate PDF
        // $options = new Options();
        // $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        // $dompdf = new Dompdf($options);
        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);

        // ambil tanggal saja dari created_at
        $tanggal_pretest = date('d F Y', strtotime($data['tanggal_pretest']));
        $tanggal_posttest = date('d F Y', strtotime($data['tanggal_posttest']));

        // konversi nama bulan ke bahasa Indonesia
        $bulan_indonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $tanggal_pretest_id = strtr($tanggal_pretest, $bulan_indonesia);
        $tanggal_posttest_id = strtr($tanggal_posttest, $bulan_indonesia);

        // tentukan modul berdasarkan tabel
        $modul = 'Modul 1 - Prinsip SDI'; // default
        if (strpos($data['token_pretest'], 'quiz_results_2') !== false) {
            $modul = 'Modul 2 - Kualitas Data';
        } elseif (strpos($data['token_pretest'], 'quiz_results_3') !== false) {
            $modul = 'Modul 3 - Proses Bisnis Statistik';
        } elseif (strpos($data['token_pretest'], 'quiz_results_4') !== false) {
            $modul = 'Modul 4 - Kelembagaan';
        } elseif (strpos($data['token_pretest'], 'quiz_results_5') !== false) {
            $modul = 'Modul 5 - Sistem Statistik Nasional';
        }

        // siapkan pesan WhatsApp
        $pesan = "```\n"
            . "--- Klaim Surat Keterangan Digistat ---\n\n"
            . "Nomor             : {$data['nomor']}\n"
            . "Nama              : {$data['nama_lengkap']}\n"
            . "Instansi          : {$data['instansi']}\n"
            . "Token Pretest     : {$data['token_pretest']}\n"
            . "Nilai Pretest     : {$data['nilai_pretest']}\n"
            . "Token Posttest    : {$data['token_posttest']}\n"
            . "Nilai Posttest    : {$data['nilai_posttest']}\n"
            . "Modul             : {$modul}\n"
            . "Tanggal Pretest   : {$tanggal_pretest_id}\n"
            . "Tanggal Posttest  : {$tanggal_posttest_id}\n"
            . "```";

        // URL WhatsApp
        $nomor_wa = '6281216111802';
        $wa_url = "https://wa.me/{$nomor_wa}?text=" . urlencode($pesan);

        // redirect ke WA
        return redirect()->to($wa_url);
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

        $data['tanggal_pretest'] = $db->table('quiz_results_4')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('created_at');

        $data['tanggal_posttest'] = $db->table('quiz_results_4')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('created_at');

        $data['nomor'] = $id;

        // // render HTML dari view
        // $html = view('digistat/klaim_surat_4', ['data' => $data]);

        // // generate PDF
        // $options = new Options();
        // $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        // $dompdf = new Dompdf($options);
        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);

        // ambil tanggal saja dari created_at
        $tanggal_pretest = date('d F Y', strtotime($data['tanggal_pretest']));
        $tanggal_posttest = date('d F Y', strtotime($data['tanggal_posttest']));

        // konversi nama bulan ke bahasa Indonesia
        $bulan_indonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $tanggal_pretest_id = strtr($tanggal_pretest, $bulan_indonesia);
        $tanggal_posttest_id = strtr($tanggal_posttest, $bulan_indonesia);

        // tentukan modul berdasarkan tabel
        $modul = 'Modul 1 - Prinsip SDI'; // default
        if (strpos($data['token_pretest'], 'quiz_results_2') !== false) {
            $modul = 'Modul 2 - Kualitas Data';
        } elseif (strpos($data['token_pretest'], 'quiz_results_3') !== false) {
            $modul = 'Modul 3 - Proses Bisnis Statistik';
        } elseif (strpos($data['token_pretest'], 'quiz_results_4') !== false) {
            $modul = 'Modul 4 - Kelembagaan';
        } elseif (strpos($data['token_pretest'], 'quiz_results_5') !== false) {
            $modul = 'Modul 5 - Sistem Statistik Nasional';
        }

        // siapkan pesan WhatsApp
        $pesan = "```\n"
            . "--- Klaim Surat Keterangan Digistat ---\n\n"
            . "Nomor             : {$data['nomor']}\n"
            . "Nama              : {$data['nama_lengkap']}\n"
            . "Instansi          : {$data['instansi']}\n"
            . "Token Pretest     : {$data['token_pretest']}\n"
            . "Nilai Pretest     : {$data['nilai_pretest']}\n"
            . "Token Posttest    : {$data['token_posttest']}\n"
            . "Nilai Posttest    : {$data['nilai_posttest']}\n"
            . "Modul             : {$modul}\n"
            . "Tanggal Pretest   : {$tanggal_pretest_id}\n"
            . "Tanggal Posttest  : {$tanggal_posttest_id}\n"
            . "```";

        // URL WhatsApp
        $nomor_wa = '6281216111802';
        $wa_url = "https://wa.me/{$nomor_wa}?text=" . urlencode($pesan);

        // redirect ke WA
        return redirect()->to($wa_url);
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

        $data['tanggal_pretest'] = $db->table('quiz_results_5')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('created_at');

        $data['tanggal_posttest'] = $db->table('quiz_results_5')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('created_at');

        $data['nomor'] = $id;

        // // render HTML dari view
        // $html = view('digistat/klaim_surat_5', ['data' => $data]);

        // // generate PDF
        // $options = new Options();
        // $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        // $dompdf = new Dompdf($options);
        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);

        // ambil tanggal saja dari created_at
        $tanggal_pretest = date('d F Y', strtotime($data['tanggal_pretest']));
        $tanggal_posttest = date('d F Y', strtotime($data['tanggal_posttest']));

        // konversi nama bulan ke bahasa Indonesia
        $bulan_indonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $tanggal_pretest_id = strtr($tanggal_pretest, $bulan_indonesia);
        $tanggal_posttest_id = strtr($tanggal_posttest, $bulan_indonesia);

        // tentukan modul berdasarkan tabel
        $modul = 'Modul 1 - Prinsip SDI'; // default
        if (strpos($data['token_pretest'], 'quiz_results_2') !== false) {
            $modul = 'Modul 2 - Kualitas Data';
        } elseif (strpos($data['token_pretest'], 'quiz_results_3') !== false) {
            $modul = 'Modul 3 - Proses Bisnis Statistik';
        } elseif (strpos($data['token_pretest'], 'quiz_results_4') !== false) {
            $modul = 'Modul 4 - Kelembagaan';
        } elseif (strpos($data['token_pretest'], 'quiz_results_5') !== false) {
            $modul = 'Modul 5 - Sistem Statistik Nasional';
        }

        // siapkan pesan WhatsApp
        $pesan = "```\n"
            . "--- Klaim Surat Keterangan Digistat ---\n\n"
            . "Nomor             : {$data['nomor']}\n"
            . "Nama              : {$data['nama_lengkap']}\n"
            . "Instansi          : {$data['instansi']}\n"
            . "Token Pretest     : {$data['token_pretest']}\n"
            . "Nilai Pretest     : {$data['nilai_pretest']}\n"
            . "Token Posttest    : {$data['token_posttest']}\n"
            . "Nilai Posttest    : {$data['nilai_posttest']}\n"
            . "Modul             : {$modul}\n"
            . "Tanggal Pretest   : {$tanggal_pretest_id}\n"
            . "Tanggal Posttest  : {$tanggal_posttest_id}\n"
            . "```";

        // URL WhatsApp
        $nomor_wa = '6281216111802';
        $wa_url = "https://wa.me/{$nomor_wa}?text=" . urlencode($pesan);

        // redirect ke WA
        return redirect()->to($wa_url);
    }

    // Descan
    public function descansimpan1()
    {
        $model = new DescanKlaimModul1();

        $data = [
            'nama_lengkap'     => $this->request->getPost('nama_lengkap'),
            'instansi'         => $this->request->getPost('instansi'),
            'token_pretest'    => $this->request->getPost('token_pretest'),
            'token_posttest'   => $this->request->getPost('token_posttest'),
            'rating'           => $this->request->getPost('rating'),
            'waktu_klaim'      => date('Y-m-d H:i:s'),
        ];

        $id = $model->insert($data);

        return redirect()->to(base_url('descanklaim/pdf1/' . $id));
    }

    public function descanpdf1($id)
    {
        $model = new DescanKlaimModul1();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Token tidak ditemukan.");
        }

        // ambil nilai pretest dan posttest dari token
        $db = \Config\Database::connect();
        $data['nilai_pretest'] = $db->table('descan_quiz_results_1')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('score');

        $data['nilai_posttest'] = $db->table('descan_quiz_results_1')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('score');

        $data['tanggal_pretest'] = $db->table('descan_quiz_results_1')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('created_at');

        $data['tanggal_posttest'] = $db->table('descan_quiz_results_1')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('created_at');

        $data['nomor'] = $id;

        // // render HTML dari view
        // $html = view('digistatdescan/klaim_surat_1', ['data' => $data]);

        // // generate PDF
        // $options = new Options();
        // $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        // $dompdf = new Dompdf($options);
        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);

        // ambil tanggal saja dari created_at
        $tanggal_pretest = date('d F Y', strtotime($data['tanggal_pretest']));
        $tanggal_posttest = date('d F Y', strtotime($data['tanggal_posttest']));

        // konversi nama bulan ke bahasa Indonesia
        $bulan_indonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $tanggal_pretest_id = strtr($tanggal_pretest, $bulan_indonesia);
        $tanggal_posttest_id = strtr($tanggal_posttest, $bulan_indonesia);

        // tentukan modul berdasarkan tabel
        $modul = 'Modul 1 - Program Desa Cantik'; // default
        if (strpos($data['token_pretest'], 'descan_quiz_results_2') !== false) {
            $modul = 'Modul 2 - Penyelenggarann Kegiatan Statistik';
        } elseif (strpos($data['token_pretest'], 'descan_quiz_results_3') !== false) {
            $modul = 'Modul 3 - Proses Menghasilkan Data';
        }

        // siapkan pesan WhatsApp
        $pesan = "```\n"
            . "--- Klaim Surat Keterangan Digistat ---\n\n"
            . "Nomor             : {$data['nomor']}\n"
            . "Nama              : {$data['nama_lengkap']}\n"
            . "Instansi          : {$data['instansi']}\n"
            . "Token Pretest     : {$data['token_pretest']}\n"
            . "Nilai Pretest     : {$data['nilai_pretest']}\n"
            . "Token Posttest    : {$data['token_posttest']}\n"
            . "Nilai Posttest    : {$data['nilai_posttest']}\n"
            . "Modul             : {$modul}\n"
            . "Tanggal Pretest   : {$tanggal_pretest_id}\n"
            . "Tanggal Posttest  : {$tanggal_posttest_id}\n"
            . "```";

        // URL WhatsApp
        $nomor_wa = '6281216111802';
        $wa_url = "https://wa.me/{$nomor_wa}?text=" . urlencode($pesan);

        // redirect ke WA
        return redirect()->to($wa_url);
    }
    // 2
    public function descansimpan2()
    {
        $model = new DescanKlaimModul2();

        $data = [
            'nama_lengkap'     => $this->request->getPost('nama_lengkap'),
            'instansi'         => $this->request->getPost('instansi'),
            'token_pretest'    => $this->request->getPost('token_pretest'),
            'token_posttest'   => $this->request->getPost('token_posttest'),
            'rating'           => $this->request->getPost('rating'),
            'waktu_klaim'      => date('Y-m-d H:i:s'),
        ];

        $id = $model->insert($data);

        return redirect()->to(base_url('descanklaim/pdf2/' . $id));
    }

    public function descanpdf2($id)
    {
        $model = new DescanKlaimModul2();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Token tidak ditemukan.");
        }

        // ambil nilai pretest dan posttest dari token
        $db = \Config\Database::connect();
        $data['nilai_pretest'] = $db->table('descan_quiz_results_2')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('score');

        $data['nilai_posttest'] = $db->table('deacan_quiz_results_2')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('score');

        $data['tanggal_pretest'] = $db->table('descan_quiz_results_2')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('created_at');

        $data['tanggal_posttest'] = $db->table('descan_quiz_results_2')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('created_at');

        $data['nomor'] = $id;

        // // render HTML dari view
        // $html = view('descandigistat/klaim_surat_2', ['data' => $data]);

        // // generate PDF
        // $options = new Options();
        // $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        // $dompdf = new Dompdf($options);
        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);

        // ambil tanggal saja dari created_at
        $tanggal_pretest = date('d F Y', strtotime($data['tanggal_pretest']));
        $tanggal_posttest = date('d F Y', strtotime($data['tanggal_posttest']));

        // konversi nama bulan ke bahasa Indonesia
        $bulan_indonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $tanggal_pretest_id = strtr($tanggal_pretest, $bulan_indonesia);
        $tanggal_posttest_id = strtr($tanggal_posttest, $bulan_indonesia);

        // tentukan modul berdasarkan tabel
        $modul = 'Modul 1 - Program Desa Cantik'; // default
        if (strpos($data['token_pretest'], 'descan_quiz_results_2') !== false) {
            $modul = 'Modul 2 - Penyelenggarann Kegiatan Statistik';
        } elseif (strpos($data['token_pretest'], 'descan_quiz_results_3') !== false) {
            $modul = 'Modul 3 - Proses Menghasilkan Data';
        }

        // siapkan pesan WhatsApp
        $pesan = "```\n"
            . "--- Klaim Surat Keterangan Digistat ---\n\n"
            . "Nomor             : {$data['nomor']}\n"
            . "Nama              : {$data['nama_lengkap']}\n"
            . "Instansi          : {$data['instansi']}\n"
            . "Token Pretest     : {$data['token_pretest']}\n"
            . "Nilai Pretest     : {$data['nilai_pretest']}\n"
            . "Token Posttest    : {$data['token_posttest']}\n"
            . "Nilai Posttest    : {$data['nilai_posttest']}\n"
            . "Modul             : {$modul}\n"
            . "Tanggal Pretest   : {$tanggal_pretest_id}\n"
            . "Tanggal Posttest  : {$tanggal_posttest_id}\n"
            . "```";

        // URL WhatsApp
        $nomor_wa = '6281216111802';
        $wa_url = "https://wa.me/{$nomor_wa}?text=" . urlencode($pesan);

        // redirect ke WA
        return redirect()->to($wa_url);
    }
    //3
    public function descansimpan3()
    {
        $model = new DescanKlaimModul3();

        $data = [
            'nama_lengkap'     => $this->request->getPost('nama_lengkap'),
            'instansi'         => $this->request->getPost('instansi'),
            'token_pretest'    => $this->request->getPost('token_pretest'),
            'token_posttest'   => $this->request->getPost('token_posttest'),
            'rating'           => $this->request->getPost('rating'),
            'waktu_klaim'      => date('Y-m-d H:i:s'),
        ];

        $id = $model->insert($data);

        return redirect()->to(base_url('descanklaim/pdf3/' . $id));
    }

    public function descanpdf3($id)
    {
        $model = new KlaimModul3();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Token tidak ditemukan.");
        }

        // ambil nilai pretest dan posttest dari token
        $db = \Config\Database::connect();
        $data['nilai_pretest'] = $db->table('descan_quiz_results_3')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('score');

        $data['nilai_posttest'] = $db->table('descan_quiz_results_3')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('score');

        $data['tanggal_pretest'] = $db->table('descan_quiz_results_3')
            ->where('session_id', $data['token_pretest'])
            ->where('type', 'pre')
            ->get()
            ->getRow('created_at');

        $data['tanggal_posttest'] = $db->table('descan_quiz_results_3')
            ->where('session_id', $data['token_posttest'])
            ->where('type', 'post')
            ->get()
            ->getRow('created_at');

        $data['nomor'] = $id;

        // // render HTML dari view
        // $html = view('digistatdescan/klaim_surat_3', ['data' => $data]);

        // // generate PDF
        // $options = new Options();
        // $options->set('isRemoteEnabled', true); // Jika kamu tetap ingin akses URL HTTP

        // $dompdf = new Dompdf($options);
        // // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('surat_keterangan_' . $id . '.pdf', ['Attachment' => false]);

        // ambil tanggal saja dari created_at
        $tanggal_pretest = date('d F Y', strtotime($data['tanggal_pretest']));
        $tanggal_posttest = date('d F Y', strtotime($data['tanggal_posttest']));

        // konversi nama bulan ke bahasa Indonesia
        $bulan_indonesia = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];
        $tanggal_pretest_id = strtr($tanggal_pretest, $bulan_indonesia);
        $tanggal_posttest_id = strtr($tanggal_posttest, $bulan_indonesia);

        // tentukan modul berdasarkan tabel
        $modul = 'Modul 1 - Program Desa Cantik'; // default
        if (strpos($data['token_pretest'], 'descan_quiz_results_2') !== false) {
            $modul = 'Modul 2 - Penyelenggarann Kegiatan Statistik';
        } elseif (strpos($data['token_pretest'], 'descan_quiz_results_3') !== false) {
            $modul = 'Modul 3 - Proses Menghasilkan Data';
        }

        // siapkan pesan WhatsApp
        $pesan = "```\n"
            . "--- Klaim Surat Keterangan Digistat ---\n\n"
            . "Nomor             : {$data['nomor']}\n"
            . "Nama              : {$data['nama_lengkap']}\n"
            . "Instansi          : {$data['instansi']}\n"
            . "Token Pretest     : {$data['token_pretest']}\n"
            . "Nilai Pretest     : {$data['nilai_pretest']}\n"
            . "Token Posttest    : {$data['token_posttest']}\n"
            . "Nilai Posttest    : {$data['nilai_posttest']}\n"
            . "Modul             : {$modul}\n"
            . "Tanggal Pretest   : {$tanggal_pretest_id}\n"
            . "Tanggal Posttest  : {$tanggal_posttest_id}\n"
            . "```";

        // URL WhatsApp
        $nomor_wa = '6281216111802';
        $wa_url = "https://wa.me/{$nomor_wa}?text=" . urlencode($pesan);

        // redirect ke WA
        return redirect()->to($wa_url);
    }
}
