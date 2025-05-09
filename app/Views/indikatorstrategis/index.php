<script src="<?= base_url('assets/geojson/tanggamusKab_kab.js') ?>"></script>

<div class="container my-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 mb-2">
                <button class="btn btn-primary w-100" onclick="showSection('demography')">Demografi</button>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 mb-2">
                <button class="btn btn-success w-100" onclick="showSection('economy')">Ekonomi</button>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 mb-2">
                <button class="btn btn-warning w-100" onclick="showSection('multi')">Multi-Domain</button>
            </div>
        </div>
    </div>

    <!-- Demography Dashboard -->
    <div id="demography" class="dashboard-section active-section">
        <div class="container-fluid p-2">
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1a" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1b" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1c" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1d" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1e" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1f" height="180"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-2">
            <div class="row g-4 align-items-stretch">
                <!-- LEFT SMALL CHARTS -->
                <div class="col-lg-4 d-flex flex-column gap-4">
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart A</h6>
                        <canvas id="chart2a" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart B</h6>
                        <canvas id="chart2b" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart C</h6>
                        <canvas id="chart2c" class="w-100" style="height: 100px;"></canvas>
                    </div>
                </div>

                <!-- RIGHT LARGE CHART -->
                <div class="col-lg-8 d-flex">
                    <div class="card p-3 shadow-sm rounded w-100">
                        <h6 class="text-center">Main Chart</h6>
                        <div id="chart2d" class="w-100" style="height: 100%; min-height: 330px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Economy Dashboard -->
    <div id="economy" class="dashboard-section">
        <div class="container-fluid p-2">
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1a" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1b" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1c" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1d" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1e" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1f" height="180"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-2">
            <div class="row g-4 align-items-stretch">
                <!-- LEFT SMALL CHARTS -->
                <div class="col-lg-4 d-flex flex-column gap-4">
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart A</h6>
                        <canvas id="chart2a" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart B</h6>
                        <canvas id="chart2b" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart C</h6>
                        <canvas id="chart2c" class="w-100" style="height: 100px;"></canvas>
                    </div>
                </div>

                <!-- RIGHT LARGE CHART -->
                <div class="col-lg-8 d-flex">
                    <div class="card p-3 shadow-sm rounded w-100">
                        <h6 class="text-center">Main Chart</h6>
                        <div id="chart2d" class="w-100" style="height: 100%; min-height: 330px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Multi-Domain Dashboard -->
    <div id="multi" class="dashboard-section">
        <div class="container-fluid p-2">
            <div class="row g-4">
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1a" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1b" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1c" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1d" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1e" height="180"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center"></h6>
                        <canvas id="chart1f" height="180"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-2">
            <div class="row g-4 align-items-stretch">
                <!-- LEFT SMALL CHARTS -->
                <div class="col-lg-4 d-flex flex-column gap-4">
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart A</h6>
                        <canvas id="chart2a" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart B</h6>
                        <canvas id="chart2b" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart C</h6>
                        <canvas id="chart2c" class="w-100" style="height: 100px;"></canvas>
                    </div>
                </div>

                <!-- RIGHT LARGE CHART -->
                <div class="col-lg-8 d-flex">
                    <div class="card p-3 shadow-sm rounded w-100">
                        <h6 class="text-center">Main Chart</h6>
                        <div id="chart2d" class="w-100" style="height: 100%; min-height: 330px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showSection(id) {
        document.querySelectorAll('.dashboard-section').forEach(sec => sec.classList.remove('active-section'));
        document.getElementById(id).classList.add('active-section');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?= $this->include('indikatorstrategis/charts/jumlahPendudukJk.js') ?>
        <?= $this->include('indikatorstrategis/charts/jumlahPendudukAgama.js') ?>
        <?= $this->include('indikatorstrategis/charts/tpt.js') ?>
        <?= $this->include('indikatorstrategis/charts/tpak.js') ?>
        <?= $this->include('indikatorstrategis/charts/hls.js') ?>
        <?= $this->include('indikatorstrategis/charts/jumlahPendudukStatusPekerjaanJk.js') ?>
        <?= $this->include('indikatorstrategis/charts/charta.js') ?>
        <?= $this->include('indikatorstrategis/charts/chartb.js') ?>
        <?= $this->include('indikatorstrategis/charts/chartc.js') ?>
        <?= $this->include('indikatorstrategis/charts/kepadatanPendudukKec.js') ?>
    });
</script>