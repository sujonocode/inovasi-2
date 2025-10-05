\<div class="container my-5">
    <!-- Judul Utama -->
    <h3 class="text-center mb-4 fw-bold">📊 Dashboard Digistat - Desa Cantik - Cinta Statistik</h3>
    <div class="dashboard-section active-section">
        <div class="container-fluid p-2">
            <div class="row g-4">
                <!-- Jumlah -->
                <div class="col-md-12 col-sm-12">
                    <div class="card shadow-lg p-4 position-relative rounded-4 border-0">
                        <h6 class="text-center mb-3 fw-semibold">
                            🏛️ Jumlah Pengerjaan Modul Digistat Per Desa
                        </h6>
                        <div class="position-absolute top-0 end-0 p-2">
                            <a href="https://tanggamuskab.bps.go.id/id/query-builder" target="_blank">
                                <i class="bi bi-info-circle-fill text-secondary"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="left"
                                    title="klik untuk data selengkapnya">
                                </i>
                            </a>
                        </div>
                        <div class="chart-container" style="position: relative; height:400px;">
                            <canvas id="chart0a"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Detail Peningkatan -->
                <div class="col-md-12 col-sm-12">
                    <div class="card shadow-lg p-4 position-relative rounded-4 border-0">
                        <h6 class="text-center mb-3 fw-semibold">
                            📈 Perbandingan Pre Test dan Post Test
                        </h6>
                        <div class="position-absolute top-0 end-0 p-2">
                            <a href="https://tanggamuskab.bps.go.id/id/query-builder" target="_blank">
                                <i class="bi bi-info-circle-fill text-secondary"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="left"
                                    title="klik untuk data selengkapnya">
                                </i>
                            </a>
                        </div>
                        <div class="chart-container" style="position: relative; height:400px;">
                            <canvas id="chart0b"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Peningkatan -->
                <div class="col-md-6 col-sm-6 d-flex">
                    <div class="card shadow-lg p-3 position-relative rounded-4 border-0 w-100 h-100">
                        <h6 class="text-center mb-3 fw-semibold">
                            ⬆️ Peningkatan Pemahaman Statistik
                        </h6>
                        <div class="position-absolute top-0 end-0 p-2">
                            <a href="https://tanggamuskab.bps.go.id/id/query-builder" target="_blank">
                                <i class="bi bi-info-circle-fill text-secondary"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="left"
                                    title="klik untuk data selengkapnya"></i>
                            </a>
                        </div>
                        <div class="chart-container" style="position: relative; height:400px;">
                            <canvas id="chart0c"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Rating -->
                <div class="col-md-6 col-sm-6 d-flex">
                    <div class="card shadow-lg p-3 position-relative rounded-4 border-0 w-100 h-100">
                        <h6 class="text-center mb-4 fw-semibold">
                            ⭐ Rating SIEDUTA - Digistat <br>
                            <small class="fw-normal text-muted">(Desa Cantik - Cinta Statistik)</small>
                        </h6>
                        <div class="position-absolute top-0 end-0 p-2">
                            <a href="https://tanggamuskab.bps.go.id/id/query-builder" target="_blank">
                                <i class="bi bi-info-circle-fill text-secondary fs-5"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="left"
                                    title="klik untuk data selengkapnya"></i>
                            </a>
                        </div>

                        <!-- Rating Aplikasi -->
                        <div class="rating-box p-3 mb-4 rounded-3 bg-secondary-subtle shadow-sm">
                            <p class="fw-semibold text-center text-dark mb-2">Aplikasi</p>
                            <div class="d-flex justify-content-center stars mb-2" data-rating="4.2"></div>
                            <p class="text-center fs-6 fw-bold text-dark mb-3">
                                4.2 <small class="text-muted">/ 5</small>
                            </p>
                            <div class="progress rounded-pill" style="height: 8px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 84%;"></div>
                            </div>
                        </div>

                        <!-- Rating Modul Pembelajaran -->
                        <div class="rating-box p-3 rounded-3 bg-secondary-subtle shadow-sm">
                            <p class="fw-semibold text-center text-dark mb-2">Modul Pembelajaran</p>
                            <div class="d-flex justify-content-center stars mb-2" data-rating="4.0"></div>
                            <p class="text-center fs-6 fw-bold text-dark mb-3">
                                4.0 <small class="text-muted">/ 5</small>
                            </p>
                            <div class="progress rounded-pill" style="height: 8px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .stars i {
                        transition: transform 0.2s ease, color 0.3s ease;
                        margin: 0 2px;
                    }

                    .stars i:hover {
                        transform: scale(1.2);
                        color: #ffcc00 !important;
                    }

                    .rating-box {
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                    }

                    .rating-box:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
                    }
                </style>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        function renderStars(container, rating) {
                            container.innerHTML = "";
                            for (let i = 1; i <= 5; i++) {
                                if (rating >= i) {
                                    container.innerHTML += '<i class="bi bi-star-fill text-warning fs-4"></i>';
                                } else if (rating >= i - 0.5) {
                                    container.innerHTML += '<i class="bi bi-star-half text-warning fs-4"></i>';
                                } else {
                                    container.innerHTML += '<i class="bi bi-star text-warning fs-4"></i>';
                                }
                            }
                        }

                        document.querySelectorAll(".stars").forEach(starContainer => {
                            const rating = parseFloat(starContainer.getAttribute("data-rating"));
                            renderStars(starContainer, rating);
                        });
                    });
                </script>

            </div>
        </div>
    </div>
</div>

<style>
    .active-button {
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.2);
        transform: scale(1.03);
        transition: all 0.2s ease;
        font-weight: 700;
    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function(tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl);
        });

        let labels = <?= json_encode($instansi) ?>;
        let dataValues = <?= json_encode($jumlah) ?>;

        const labels0b = ['Modul 1', 'Modul 2', 'Modul 3', 'Modul 4', 'Modul 5'];

        const preData = <?= json_encode([
                            $modul1['pre'],
                            $modul2['pre'],
                            $modul3['pre'],
                        ]) ?>;

        const postData = <?= json_encode([
                                $modul1['post'],
                                $modul2['post'],
                                $modul3['post'],
                            ]) ?>;

        const countPreData = <?= json_encode([
                                    $modul1['count_pre'],
                                    $modul2['count_pre'],
                                    $modul3['count_pre'],
                                ]) ?>;

        const countPostData = <?= json_encode([
                                    $modul1['count_post'],
                                    $modul2['count_post'],
                                    $modul3['count_post'],
                                ]) ?>;

        // Hitung rata-rata per elemen
        const preAverage = preData.map((val, i) => val / countPreData[i]);
        const postAverage = postData.map((val, i) => val / countPostData[i]);

        <?php
        $peningkatan = 0;
        if ($overall['pre'] > 0) {
            $peningkatan = (($overall['post'] - $overall['pre']) / $overall['pre']) * 100;
        }
        ?>
        const peningkatan = <?= round($peningkatan, 2) ?>;

        <?= $this->include('statistiksektoral/charts/chart0a.js') ?>
        <?= $this->include('statistiksektoral/charts/chart0b.js') ?>
        <?= $this->include('statistiksektoral/charts/chart0c.js') ?>
        <?= $this->include('statistiksektoral/charts/chart0d.js') ?>
    });
</script>