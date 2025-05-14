<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for BPS Kabupaten Tanggamus providing document management, reminders, tracking, and more.">
    <link rel="shortcut icon" type="image/png" href="/sieduta.ico">
    <title><?= esc($title) ?></title>
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons (for the info icon) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/33529d3488.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="icon" href=<?= base_url("sieduta.ico"); ?> type="image/x-icon">

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet" />

    <!-- FullCalendar Core and Plugins CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/main.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.8/main.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.8/main.min.css" rel="stylesheet">

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Add jQuery and Select2 scripts -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-box-and-violin-plot@4.3.0/build/Chart.BoxPlot.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-box-and-violin-plot@4.3.0/build/Chart.BoxPlot.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/packed-bubble.js"></script>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <style>
        @media (max-width: 768px) {
            .fc-toolbar {
                flex-direction: column;
                align-items: center;
            }

            .fc-toolbar-title {
                font-size: 1.2rem !important;
                text-align: center;
                margin-bottom: 5px;
            }

            .fc-button {
                font-size: 14px !important;
                padding: 5px 8px !important;
            }

            .fc-header-toolbar {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 5px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="<?= base_url('assets/image/sieduta.png') ?>" alt="Logo SIEDUTA"
                    style="width: 30px; height: 30px; margin-right: 10px;">
                <span><strong>SIEDUTA</strong></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == '' || uri_string() == '/') ? 'active' : '' ?>" href="<?= base_url('') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'indikator_strategis') ? 'active' : '' ?>" href="<?= base_url('indikator_strategis') ?>">Indikator Strategis</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('statistik_sektoral') ?>" id="statistik_sektoral" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pembinaan Statistik Sektoral</a>
                        <ul class="dropdown-menu" aria-labelledby="dokumenDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('statistik_sektoral') ?>">Jadwal Kegiatan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('statistik_sektoral/manage') ?>">Manage Jadwal</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('statistik_sektoral/pembinaan') ?>">Datalaku</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('statistik_sektoral/dokumen') ?>">Kelengkapan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('desa_cantik') ?>" id="desa_cantik" role="button" data-bs-toggle="dropdown" aria-expanded="false">Desa Cantik</a>
                        <ul class="dropdown-menu" aria-labelledby="dokumenDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('desa_cantik') ?>">Jadwal Kegiatan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('desa_cantik/manage') ?>">Manage Jadwal</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('desa_cantik/dokumen') ?>">Kelengkapan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'halo_pst') ? 'active' : '' ?>" href="<?= base_url('halo_pst') ?>">Halo PST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'admin') ? 'active' : '' ?>" href="<?= base_url('admin') ?>">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">