<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\JadwalDesaCantik;
use App\Models\Kontak;
use App\Models\TimDescan;
use DateTime;
use DateTimeZone;
use IntlDateFormatter;
use App\Models\DescanKlaimModul1;
use App\Models\DescanKlaimModul2;
use App\Models\DescanKlaimModul3;
use App\Models\DescanQuizModel1;
use App\Models\DescanQuizModel2;
use App\Models\DescanQuizModel3;

class DesaCantik extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index(string $page = 'Pembinaan Desa Cantik')
    {
        $model = new JadwalDesaCantik();

        $data['title'] = ucfirst($page);
        $data['jadwalDesaCantiks'] = $model->findAll();

        $contactModel = new Kontak();
        $contactList = $contactModel->findAll();

        $contacts = [];
        foreach ($contactList as $contact) {
            $contacts[(string) $contact['nomor']] = $contact['nama'];
        }

        $data['contacts'] = $contacts;

        return view('templates/header', $data)
            . view('desacantik/index', $data)
            . view('templates/footer');
    }

    public function manage(string $page = 'Pembinaan Desa Cantik | Manage')
    {
        $model = new JadwalDesaCantik();

        $data['title'] = ucfirst($page);
        $data['jadwalDesaCantiks'] = $model->findAll();

        $contactModel = new Kontak();
        $contactList = $contactModel->findAll();

        $contacts = [];
        foreach ($contactList as $contact) {
            $contacts[(string) $contact['nomor']] = $contact['nama'];
        }

        $data['contacts'] = $contacts;
        return view('templates/header', $data)
            . view('desacantik/manage_jadwal', $data)
            . view('templates/footer');
    }

    public function pembinaan(string $page = 'Pembinaan Desa Cantik | Digistat')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('desacantik/pembinaan', $data)
            . view('templates/footer');
    }

    public function dokumen(string $page = 'Pembinaan Desa Cantik | Dokumen')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('desacantik/dokumen', $data)
            . view('templates/footer');
    }

    public function create(string $page = 'Pembinaan Desa Cantik | Create')
    {
        $data['title'] = ucfirst($page);
        $id_tim_des = session()->get('id_tim_des');

        $model = new TimDescan();
        $row = $model->where('id_tim_des', $id_tim_des)->first();
        if ($row) {
            $ketua_tim = $row['ketua_tim'];
            $desa = $row['desa'];
        } else {
            $ketua_tim = $row['message: not team member, no ketua_tim'];
            $desa = 'message: not team member, no desa';
        }

        $kontak = new Kontak();

        $data['contacts'] = $kontak->getContacts();
        $data['ketua_tim'] = $ketua_tim;
        $data['desa'] = $desa;

        return view('templates/header', $data)
            . view('desacantik/create_jadwal', $data)
            . view('templates/footer');
    }

    public function store()
    {
        $model = new JadwalDesaCantik();
        $timModel = new TimDescan();

        $username = session()->get('username');

        $pengingat = ["H-1"];
        $pengingatJson = json_encode($pengingat);

        $kontak = $this->request->getPost('kontak[]');
        $kontakString = implode(',', $kontak);

        $desa = 'Srikaton';
        // $desa = $this->request->getPost('desa');
        $timData = $timModel->where('desa', $desa)->first();

        $data = [
            'ketua_tim' => $this->request->getPost('ketua_tim'),
            'desa' => $desa,
            'tempat' => $this->request->getPost('tempat'),
            'topik' => $this->request->getPost('topik'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_start' => $this->request->getPost('waktu_start'),
            'waktu_end' => $this->request->getPost('waktu_end'),
            'kontak_ketua_tim' => $timData['kontak_ketua_tim'],
            'kontak_narahubung' => $timData['kontak_narahubung'],
            'pengingat' => $pengingatJson,
            'kontak' => $kontakString,
            'catatan' => $this->request->getPost('catatan'),
            'status' => 'Belum Terlaksana',
            'created_by' => $username,
        ];

        if ($model->save($data)) {
            // Send to Fonnte
            $this->sendNotification();
            return redirect()->to(base_url('/desa_cantik/manage'))->with('success', 'Jadwal pembinaan berhasil dibuat');
        }

        // Handle failure case
        return redirect()->back()->withInput()->with('error', 'Gagal membuat jadwal pembinaan');
    }

    function unixToHuman($unixTimestamp)
    {
        $timezone = new DateTimeZone('Asia/Jakarta');
        $date = new DateTime('@' . $unixTimestamp);
        $date->setTimezone($timezone);
        return $date->format('Y-m-d H:i:s');
    }

    function humanToUnix($humanDate)
    {
        $timezone = new DateTimeZone('Asia/Jakarta');
        $date = new DateTime($humanDate, $timezone);
        return $date->getTimestamp();
    }

    private function sendNotification()
    {
        $pengingat = ["H-1"];
        $pengingatJson = json_encode($pengingat);

        $data = [
            'tempat' => $this->request->getPost('tempat'),
            'topik' => $this->request->getPost('topik'),
            'desa' => $this->request->getPost('desa'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_start' => $this->request->getPost('waktu_start'),
            'waktu_end' => $this->request->getPost('waktu_end'),
            'kontak' => $this->request->getPost('kontak'),
            'pengingat' => $pengingatJson,
            'catatan' => $this->request->getPost('catatan'),
        ];

        $kontakString = implode(',', $data['kontak']);

        $dateHuman = $data['tanggal'] . ' ' . $data['waktu_start'];
        $hariH0 = $this->humanToUnix($dateHuman);
        $hariHm1 = strtotime('-1 days', $hariH0);

        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'Asia/Jakarta',
            IntlDateFormatter::GREGORIAN,
            'EEEE, dd MMMM yyyy'
        );

        $dayIndo = $formatter->format(new DateTime($data['tanggal']));

        $time = date('H:i', strtotime($data['waktu_start'])) . " s.d. " . date('H:i', strtotime($data['waktu_end']));
        $hour = (int) date('H', strtotime($data['waktu_start']));

        if ($hour < 10) {
            $period = 'pagi';
        } elseif ($hour < 15) {
            $period = 'siang';
        } elseif ($hour < 18) {
            $period = 'sore';
        } else {
            $period = 'malam';
        }

        if ($pengingatJson == '["H-1"]') {
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://api.fonnte.com/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => [
                    'target' => $kontakString,
                    'message' =>
                    "📢 Pembinaan Desa Cantik {$data['desa']}\n" .
                        "```" .
                        "--------------------------\n" .
                        "📌 Topik   : {$data['topik']}\n" .
                        "🏢 Tempat  : {$data['tempat']}\n" .
                        "📅 Tanggal : {$dayIndo}\n" .
                        "🕒 Waktu   : {$time} ({$period})\n" .
                        "📝 Catatan : {$data['catatan']}\n" .
                        "--------------------------" .
                        "```",
                    'schedule' => $hariHm1,
                    'countryCode' => '62',
                ],
                CURLOPT_HTTPHEADER => [
                    'Authorization: VT2WkzUQRkBAREK385TA',
                ],
            ]);

            $response = curl_exec($curl);
            $error = curl_error($curl);

            curl_close($curl);
        };
    }

    private function sendEditNotification($oldData)
    {
        $pengingat = ["H-1"];
        $pengingatJson = json_encode($pengingat);

        $newData = [
            'tempat' => $this->request->getPost('tempat'),
            'topik' => $this->request->getPost('topik'),
            'desa' => $this->request->getPost('desa'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_start' => $this->request->getPost('waktu_start'),
            'waktu_end' => $this->request->getPost('waktu_end'),
            'kontak' => $this->request->getPost('kontak'),
            'pengingat' => $pengingatJson,
            'catatan' => $this->request->getPost('catatan'),
        ];

        $oldData['catatan'] = ltrim($oldData['catatan']);
        $kontakString = is_array($newData['kontak']) ? implode(',', $newData['kontak']) : $newData['kontak'];
        $kontakNumbers = explode(',', $kontakString);
        $newData['kontak'] = $kontakString;

        $dateHuman = date('Y-m-d H:i:s', strtotime('+1 minute'));
        $dateUnix = strtotime($dateHuman);

        $changedFields = [];
        foreach ($newData as $key => $value) {
            if ($oldData[$key] !== $value) {
                $changedFields[] = ucfirst($key);
            }
        }
        $ket = !empty($changedFields) ? implode(', ', $changedFields) : 'Tidak ada perubahan';

        $kontakNames = [];
        foreach ($kontakNumbers as $nomor) {
            $kontakNames[] = $this->getNamaByNomor($nomor);
        }

        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'Asia/Jakarta',
            IntlDateFormatter::GREGORIAN,
            'EEEE, dd MMMM yyyy'
        );

        $dayIndo = $formatter->format(new DateTime($newData['tanggal']));

        $time = date('H:i', strtotime($newData['waktu_start'])) . " s.d. " . date('H:i', strtotime($newData['waktu_end']));
        $hour = (int) date('H', strtotime($newData['waktu_start']));

        if ($hour < 10) {
            $period = 'pagi';
        } elseif ($hour < 15) {
            $period = 'siang';
        } elseif ($hour < 18) {
            $period = 'sore';
        } else {
            $period = 'malam';
        }

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'target' => '085334813264',
                'message' =>
                "⚠️ Notifikasi EDIT reminder\n" .
                    "```" .
                    "--------------------------\n" .
                    "📌 Topik   : {$newData['topik']}\n" .
                    "🏢 Tempat  : {$newData['tempat']}\n" .
                    "📅 Tanggal : {$dayIndo}\n" .
                    "🕒 Waktu   : {$time} ({$period})\n" .
                    "📝 Catatan : {$newData['catatan']}\n" .
                    "🗒️ Ket.     : {$ket}\n" .
                    "--------------------------" .
                    "```",
                'schedule' => $dateUnix,
                'countryCode' => '62',
            ],
            CURLOPT_HTTPHEADER => [
                'Authorization: VT2WkzUQRkBAREK385TA',
            ],
        ]);

        curl_exec($curl);
        curl_close($curl);
    }

    private function sendDeleteNotification($oldData)
    {
        $pengingat = ["H-1"];
        $pengingatJson = json_encode($pengingat);

        $newData = [
            'tempat' => $this->request->getPost('tempat'),
            'topik' => $this->request->getPost('topik'),
            'desa' => $this->request->getPost('desa'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_start' => $this->request->getPost('waktu_start'),
            'waktu_end' => $this->request->getPost('waktu_end'),
            'kontak' => $this->request->getPost('kontak'),
            'pengingat' => $pengingatJson,
            'catatan' => $this->request->getPost('catatan'),
        ];

        $dateHuman = date('Y-m-d H:i:s', strtotime('+1 minute'));
        $dateUnix = strtotime($dateHuman);

        $kontakString = is_array($newData['kontak']) ? implode(',', $newData['kontak']) : $newData['kontak'];
        $kontakNumbers = explode(',', $kontakString);
        $kontakNames = [];
        foreach ($kontakNumbers as $nomor) {
            $kontakNames[] = $this->getNamaByNomor($nomor);
        }

        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'Asia/Jakarta',
            IntlDateFormatter::GREGORIAN,
            'EEEE, dd MMMM yyyy'
        );

        $dayIndo = $formatter->format(new DateTime($newData['tanggal']));

        $time = date('H:i', strtotime($newData['waktu_start'])) . " s.d. " . date('H:i', strtotime($newData['waktu_end']));
        $hour = (int) date('H', strtotime($newData['waktu_start']));

        if ($hour < 10) {
            $period = 'pagi';
        } elseif ($hour < 15) {
            $period = 'siang';
        } elseif ($hour < 18) {
            $period = 'sore';
        } else {
            $period = 'malam';
        }

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'target' => '085334813264',
                'message' =>
                "⚠️ Notifikasi HAPUS reminder\n" .
                    "```" .
                    "--------------------------\n" .
                    "📌 Topik   : {$newData['topik']}\n" .
                    "🏢 Tempat  : {$newData['tempat']}\n" .
                    "📅 Tanggal : {$dayIndo}\n" .
                    "🕒 Waktu   : {$time} ({$period})\n" .
                    "📝 Catatan : {$newData['catatan']}\n" .
                    "--------------------------" .
                    "```",
                'schedule' => $dateUnix,
                'countryCode' => '62',
            ],
            CURLOPT_HTTPHEADER => ['Authorization: VT2WkzUQRkBAREK385TA'],
        ]);

        curl_exec($curl);
        curl_close($curl);
    }

    public function update($id)
    {
        $model = new JadwalDesaCantik();
        $timModel = new TimDescan();

        $oldData = $model->find($id);

        $pengingat = $this->request->getPost('pengingat[]') ?? [];
        $pengingatJson = json_encode($pengingat);

        $kontak = $this->request->getPost('kontak[]');
        $kontakString = implode(',', $kontak);

        $desa = $this->request->getPost('desa');
        $timData = $timModel->where('desa', $desa)->first();

        $updateSuccessful = $model->update($id, [
            'ketua_tim' => $this->request->getPost('ketua_tim'),
            'desa' => $desa,
            'kontak' => $kontakString,
            'pengingat' => $pengingatJson,
            'tempat' => $this->request->getPost('tempat'),
            'topik' => $this->request->getPost('topik'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_start' => $this->request->getPost('waktu_start'),
            'waktu_end' => $this->request->getPost('waktu_end'),
            'kontak_ketua_tim' => $timData['kontak_ketua_tim'],
            'kontak_narahubung' => $timData['kontak_narahubung'],
            'catatan' => $this->request->getPost('catatan'),
            'status' => $this->request->getPost('status'),
        ]);

        if ($updateSuccessful) {
            // Send to Fonnte
            $this->sendEditNotification($oldData);
            return redirect()->to(base_url('desa_cantik/manage'))->with('success', 'Jadwal pembinaan berhasil diupdate');
        } else {
            return redirect()->to(base_url('desa_cantik/manage'))->with('error', 'Gagal mengupdate jadwal pembinaan');
        }
    }

    private function getNamaByNomor($nomor)
    {
        $db = \Config\Database::connect();
        $query = $db->table('kontak')->select('nama')->where('nomor', $nomor)->get();
        $result = $query->getRow();
        return $result ? $result->nama : $nomor;
    }

    public function edit($id, string $page = 'Desa Cantik | Edit')
    {
        $jadwalDesaCantikModel = new JadwalDesaCantik();
        $jadwalDesaCantik = $jadwalDesaCantikModel->find($id);

        if (!$jadwalDesaCantik) {
            session()->setFlashdata('error', 'Jadwal pembinaan tidak ditemukan.');
            return redirect()->to(base_url('desa_cantik/manage'));
        }

        if (!empty($jadwalDesaCantik['kontak'])) {
            $jadwalDesaCantik['kontak'] = explode(',', $jadwalDesaCantik['kontak']);
        } else {
            $jadwalDesaCantik['kontak'] = [];
        }

        $data = [
            'jadwalDesaCantik' => $jadwalDesaCantik,
            'title' => ucfirst($page),
        ];

        $currentUsername = session()->get('username');

        if (session()->get('role') === 'admin') {
            $kontak = new Kontak();
            $data['contacts'] = $kontak->getContacts();

            $timModel = new TimDescan();
            $ketua_tims = $timModel->distinct()->select('ketua_tim')->findAll();
            $desas = $timModel->distinct()->select('desa')->findAll();
            $data['ketua_tims'] = $ketua_tims;
            $data['desas'] = $desas;

            return view('templates/header', $data)
                . view('desacantik/edit_jadwal', $data)
                . view('templates/footer');
        } else {
            if ($jadwalDesaCantik['created_by'] !== $currentUsername) {
                return redirect()->back()->with('limited', 'Jadwal pembinaan hanya bisa diubah oleh orang yang membuatnya atau admin.');
            }
        }

        $kontak = new Kontak();
        $data['contacts'] = $kontak->getContacts();

        $timModel = new TimDescan();
        $ketua_tims = $timModel->distinct()->select('ketua_tim')->findAll();
        $desas = $timModel->distinct()->select('desa')->findAll();
        $data['ketua_tims'] = $ketua_tims;
        $data['desas'] = $desas;

        return view('templates/header', $data)
            . view('desacantik/edit_jadwal', $data)
            . view('templates/footer');
    }

    public function delete($id)
    {
        $model = new JadwalDesaCantik();

        $jadwalDesaCantik = $model->find($id);

        if (!$jadwalDesaCantik) {
            return redirect()->to(base_url('desa_cantik/manage'))->with('error', 'Jadwal pembinaan tidak ditemukan');
        }

        if (session()->get('role') === 'admin') {
            $model->delete($id);
            // Send to Fonnte
            $this->sendDeleteNotification($jadwalDesaCantik);
            return redirect()->to(base_url('desa_cantik/manage'))->with('success', 'Jadwal pembinaan berhasil dihapus');
        } else {
            if (session()->get('username') !== $jadwalDesaCantik['created_by']) {
                return redirect()->back()->with('limited', 'Jadwal pembinaan hanya bisa dihapus oleh orang yang membuatnya atau admin');
            }
        }

        $deleteSuccessful = $model->delete($id);

        if ($deleteSuccessful) {
            // Send to Fonnte
            $this->sendDeleteNotification($jadwalDesaCantik);
            return redirect()->to(base_url('desa_cantik/manage'))->with('success', 'Data reminder berhasil dihapus');
        } else {
            return redirect()->to(base_url('desa_cantik/manage'))->with('error', 'Gagal menghapus data reminder');
        }
    }

    public function exportExcel()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM jadwal_desa_cantik");
        $data = $query->getResultArray();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Add column headers
        $columns = array_keys($data[0]); // Get column names from the first row
        $colIndex = 'A';
        foreach ($columns as $column) {
            $sheet->setCellValue($colIndex . '1', $column);
            $colIndex++;
        }

        // Add rows
        $rowNumber = 2;
        foreach ($data as $row) {
            $colIndex = 'A';
            foreach ($row as $cell) {
                $sheet->setCellValue($colIndex . $rowNumber, $cell);
                $colIndex++;
            }
            $rowNumber++;
        }

        // Create Excel file
        $writer = new Xlsx($spreadsheet);

        // Set headers for download
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="jadwal_konten.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit;
    }

    public function getEvents()
    {
        $model = new JadwalDesaCantik();

        $jadwalKontens = $model->findAll();

        return view('templates/header')
            . view('desacantik/index', ['jadwalDesaCantiks' => $jadwalKontens])
            . view('templates/footer');
    }

    public function maintenance(string $page = 'Desa Cantik | Maintenance')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('pages/maintenance', $data)
            . view('templates/footer');
    }

    public function dashboard(string $page = 'Statistik Sektoral | Dashboard')
    {
        // data
        $klaimModel1 = new DescanKlaimModul1();
        $klaimModel2 = new DescanKlaimModul2();
        $klaimModel3 = new DescanKlaimModul3();

        $klaim1 = $klaimModel1->getJumlahKlaimPerInstansi();
        $klaim2 = $klaimModel2->getJumlahKlaimPerInstansi();
        $klaim3 = $klaimModel3->getJumlahKlaimPerInstansi();

        $gabungan = array_merge($klaim1, $klaim2, $klaim3);

        // Jika ingin mengelompokkan per instansi (totalnya dijumlahkan)
        $hasil = [];
        foreach ($gabungan as $row) {
            $instansi = $row['instansi'] ?: 'Tidak Diketahui'; // handle kosong
            if (!isset($hasil[$instansi])) {
                $hasil[$instansi] = 0;
            }
            $hasil[$instansi] += $row['total'];
        }

        // Bentuk array final sesuai urutan instansi
        $instansiList = array_keys($hasil);
        $jumlahList   = array_values($hasil);

        $quiz1 = (new DescanQuizModel1())->getAverageScoreByType();
        $quiz2 = (new DescanQuizModel2())->getAverageScoreByType();
        $quiz3 = (new DescanQuizModel3())->getAverageScoreByType();

        // Helper function untuk konversi
        function convertAndFormat($rows)
        {
            $result = ['pre' => 0, 'post' => 0, 'count_pre' => 0, 'count_post' => 0];
            foreach ($rows as $row) {
                $type = $row['type']; // 'pre' atau 'post'
                $result[$type] = $row['avg_score'] * $row['count']; // total skor
                $result['count_' . $type] = $row['count']; // jumlah peserta
            }
            return $result;
        }

        // Konversi per modul
        $modul1 = convertAndFormat($quiz1);
        $modul2 = convertAndFormat($quiz2);
        $modul3 = convertAndFormat($quiz3);

        // Hitung total skor dan total peserta
        $totalPre  = $modul1['pre'] + $modul2['pre'] + $modul3['pre'];
        $totalPost = $modul1['post'] + $modul2['post'] + $modul3['post'];

        $totalCountPre  = $modul1['count_pre'] + $modul2['count_pre'] + $modul3['count_pre'];
        $totalCountPost = $modul1['count_post'] + $modul2['count_post'] + $modul3['count_post'];

        // Hitung rata-rata keseluruhan
        $allPre  = $totalCountPre  ? round(($totalPre / $totalCountPre), 2) : 0;
        $allPost = $totalCountPost ? round(($totalPost / $totalCountPost), 2) : 0;

        $data = [
            'title' => ucfirst($page),
            'instansi' => $instansiList,
            'jumlah'   => $jumlahList,
            'raw'      => $gabungan, // kalau mau lihat detail per modul

            'modul1'  => $modul1,
            'modul2'  => $modul2,
            'modul3'  => $modul3,
            'overall' => [
                'pre'  => round($allPre, 2),
                'post' => round($allPost, 2),
            ],
            'rating_app' => 4.2,
            'rating_modul' => 4.0,
        ];

        return view('templates/header', $data)
            . view('desacantik/dashboard', $data)
            . view('templates/footer');
    }
}
