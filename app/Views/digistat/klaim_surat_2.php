<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Surat Keterangan</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 10px 50px 40px 50px;
            position: relative;
        }

        .kop {
            font-family: Arial, sans-serif;
            border-bottom: 2px solid black;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .kop table {
            width: 100%;
        }

        .kop td {
            vertical-align: top;
        }

        .logo {
            width: 110px;
        }

        .logo img {
            width: 90px;
        }

        .identitas {
            text-align: left;
        }

        .identitas .judul {
            font-size: 14pt;
            font-weight: bold;
            font-style: italic;
            line-height: 1.2;
            margin-bottom: 4px;
        }

        .identitas .alamat {
            font-size: 10pt;
            line-height: 1.3;
        }

        .judul-surat {
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
        <img src="https://raw.githubusercontent.com/sujonocode/assets/refs/heads/main/sieduta.png" alt="SIEDUTA Logo">
    </div>

    <div class="kop">
        <table>
            <tr>
                <td class="logo">
                    <img src="https://raw.githubusercontent.com/sujonocode/assets/refs/heads/main/logo-bps.png" alt="Logo BPS">
                </td>
                <td class="identitas">
                    <div class="judul">
                        <strong><em>BADAN PUSAT STATISTIK<br>KABUPATEN TANGGAMUS</em></strong>
                    </div>
                    <div class="alamat">
                        Jalan Ir. H. Juanda Kota Agung, Tanggamus 35384 Telp (0722) 21893<br>
                        Website: https://tanggamuskab.bps.go.id Email: bps1802@bps.go.id
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="judul-surat">SURAT KETERANGAN</div>
    <div class="nomor">Nomor: B-412/<?= str_pad($data['nomor'], 4, '0', STR_PAD_LEFT) ?>/18020/DL.500/<?= date('Y') ?></div>

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
            <td>: <?= number_format($data['nilai_pretest'] * 10, 2, ',', '') ?></td>
        </tr>
        <tr>
            <td>Token Posttest</td>
            <td>: <?= $data['token_posttest'] ?></td>
        </tr>
        <tr>
            <td>Nilai Posttest</td>
            <td>: <?= number_format($data['nilai_posttest'] * 10, 2, ',', '') ?></td>
        </tr>
    </table>

    <div class="isi">
        Telah mengikuti dan menyelesaikan seluruh rangkaian pembelajaran statistik <strong>(Modul 2 - Kualitas Data)</strong>
        melalui aplikasi pembelajaran BPS Kabupaten Tanggamus <strong>(Digistat)</strong>, yang terdiri dari:
        <ol>
            <li>Pretest</li>
            <li>Materi Pembelajaran</li>
            <li>Posttest</li>
        </ol>
        Demikian surat keterangan ini dibuat agar dapat digunakan sebagaimana mestinya.
    </div>

    <div class="ttd" style="margin-top: 30px; width: 100%; text-align: right; line-height: 1.3;">
        Tanggamus, <?= tanggalIndo($data['waktu_klaim']) ?><br>
        Kepala Badan Pusat Statistik<br>
        Kabupaten Tanggamus<br>

        <img src="https://raw.githubusercontent.com/sujonocode/assets/refs/heads/main/ttd-niken-hariyanti-v1.png"
            alt="Tanda Tangan"
            style="width: 250px; height: auto; margin: 0; padding: 0;"><br>

        <div style="margin-top: 5px; font-weight: bold; text-decoration: underline;">Niken Hariyanti</div>
    </div>

</body>

</html>