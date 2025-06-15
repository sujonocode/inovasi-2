<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Surat Keterangan</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 50px;
            position: relative;
        }

        .kop {
            text-align: center;
            border-bottom: 3px solid black;
            margin-bottom: 20px;
        }

        .kop img {
            float: left;
            width: 80px;
            height: auto;
        }

        .kop h2 {
            margin: 0;
            font-size: 18pt;
        }

        .kop p {
            margin: 0;
            font-size: 10pt;
            line-height: 1.2;
        }

        .judul {
            text-align: center;
            font-size: 16pt;
            margin-top: 20px;
            margin-bottom: 15px;
            text-decoration: underline;
            font-weight: bold;
        }

        .nomor {
            text-align: center;
            margin-bottom: 20px;
        }

        .isi {
            font-size: 12pt;
            line-height: 1.4;
            text-align: justify;
            margin-bottom: 10px;
        }

        ol {
            margin-top: 5px;
            margin-bottom: 5px;
            padding-left: 20px;
        }

        .ttd {
            margin-top: 40px;
            width: 100%;
            text-align: right;
        }

        .ttd .nama {
            margin-top: 60px;
            font-weight: bold;
            text-decoration: underline;
        }

        .watermark {
            position: absolute;
            opacity: 0.07;
            width: 100%;
            top: 30%;
            text-align: center;
            z-index: -1;
        }

        .watermark img {
            width: 400px;
        }

        table.detail {
            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 12pt;
        }

        table.detail td {
            padding: 2px 8px;
        }
    </style>

</head>

<body>
    <?php
    function tanggalIndo($tanggal)
    {
        $bulan = [
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];
        $pecah = explode('-', date('Y-m-d', strtotime($tanggal)));
        return $pecah[2] . ' ' . $bulan[(int)$pecah[1]] . ' ' . $pecah[0];
    }

    ?>
    <div class="watermark">
        <!-- <img src="< ?= base_url('/assets/image/sieduta.png') ?>" alt="SIEDUTA Logo"> -->
        <!-- <img src="< ?= FCPATH . '/assets/image/sieduta.png' ?>" alt="SIEDUTA Logo"> -->
    </div>

    <div class="kop">
        <!-- <img src="< ?= base_url('assets/image/logo-bps.png') ?>" alt="Logo BPS"> -->
        <h2>BADAN PUSAT STATISTIK<br>KABUPATEN TANGGAMUS</h2>
        <p>Jl. Raya Kota Agung No. XX, Kabupaten Tanggamus, Lampung</p>
        <p>Website: tanggamus.bps.go.id | Email: bps1806@bps.go.id</p>
    </div>

    <div class="judul">SURAT KETERANGAN</div>
    <div class="nomor">Nomor: BPS-TGM/STAT/<?= $data['nomor'] ?>/<?= date('Y') ?></div>

    <div class="isi">
        Yang bertanda tangan di bawah ini menerangkan bahwa:
    </div>

    <table class="detail">
        <tr>
            <td>Nama</td>
            <td>: <?= $data['nama_lengkap'] ?></td>
        </tr>
        <tr>
            <td>Instansi</td>
            <td>: <?= $data['instansi'] ?></td>
        </tr>
        <tr>
            <td>Token Pretest</td>
            <td>: <?= $data['token_pretest'] ?></td>
        </tr>
        <tr>
            <td>Nilai Pretest</td>
            <td>: <?= $data['nilai_pretest'] ?></td>
        </tr>
        <tr>
            <td>Token Posttest</td>
            <td>: <?= $data['token_posttest'] ?></td>
        </tr>
        <tr>
            <td>Nilai Posttest</td>
            <td>: <?= $data['nilai_posttest'] ?></td>
        </tr>
        <!-- <tr>
            <td>Rating Aplikasi</td>
            <td>: < ?= $data['rating'] ?> ⭐</td>
        </tr> -->
    </table>

    <div class="isi">
        Telah mengikuti dan menyelesaikan seluruh rangkaian pembelajaran statistik melalui aplikasi pembelajaran BPS Kabupaten Tanggamus, yang terdiri dari:
        <ol>
            <li>Pretest</li>
            <li>Materi Pembelajaran</li>
            <li>Posttest</li>
        </ol>
        Demikian surat keterangan ini dibuat agar dapat digunakan sebagaimana mestinya.
    </div>

    <div class="ttd">
        Tanggamus, <?= tanggalIndo($data['waktu_klaim']) ?><br>
        Kepala BPS Kabupaten Tanggamus<br><br><br><br>
        <div class="nama">Niken Hariyanti</div>
    </div>

</body>

</html>