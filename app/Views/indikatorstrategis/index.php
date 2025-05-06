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
                <!-- Population Chart -->
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center">Population</h6>
                        <canvas id="populationChart" height="180"></canvas>
                    </div>
                </div>

                <!-- Gini Ratio -->
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center">Gini Ratio</h6>
                        <canvas id="giniChart" height="180"></canvas>
                    </div>
                </div>

                <!-- Education Rate -->
                <div class="col-md-4 col-sm-6">
                    <div class="card shadow-sm p-3">
                        <h6 class="text-center">Education Rate</h6>
                        <canvas id="educationChart" height="180"></canvas>
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
                        <canvas id="chartA" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart B</h6>
                        <canvas id="chartB" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart C</h6>
                        <canvas id="chartC" class="w-100" style="height: 100px;"></canvas>
                    </div>
                </div>

                <!-- RIGHT LARGE CHART -->
                <div class="col-lg-8 d-flex">
                    <div class="card p-3 shadow-sm rounded w-100">
                        <h6 class="text-center">Main Chart</h6>
                        <canvas id="mainChart" class="w-100" style="height: 100%; min-height: 330px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Economy Dashboard -->
    <div id="economy" class="dashboard-section">
        <div class="container-fluid p-2 m-2">
            <div class="row g-4 align-items-stretch">
                <!-- LEFT LARGE CHART -->
                <div class="col-lg-8 d-flex">
                    <div class="card p-3 shadow-sm rounded w-100">
                        <h6 class="text-center">Main Chart</h6>
                        <canvas id="mainChart" class="w-100" style="height: 100%; min-height: 330px;"></canvas>
                    </div>
                </div>

                <!-- RIGHT STACKED SMALL CHARTS -->
                <div class="col-lg-4 d-flex flex-column gap-4">
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart A</h6>
                        <canvas id="chartA" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart B</h6>
                        <canvas id="chartB" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart C</h6>
                        <canvas id="chartC" class="w-100" style="height: 100px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Multi-Domain Dashboard -->
    <div id="multi" class="dashboard-section">
        <div class="container-fluid p-2 m-2">
            <div class="row g-4 align-items-stretch">
                <!-- LEFT SMALL CHARTS -->
                <div class="col-lg-4 d-flex flex-column gap-4">
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart A</h6>
                        <canvas id="chartA" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart B</h6>
                        <canvas id="chartB" class="w-100" style="height: 100px;"></canvas>
                    </div>
                    <div class="card p-3 shadow-sm rounded flex-fill">
                        <h6 class="text-center">Chart C</h6>
                        <canvas id="chartC" class="w-100" style="height: 100px;"></canvas>
                    </div>
                </div>

                <!-- RIGHT LARGE CHART -->
                <div class="col-lg-8 d-flex">
                    <div class="card p-3 shadow-sm rounded w-100">
                        <h6 class="text-center">Main Chart</h6>
                        <canvas id="mainChart" class="w-100" style="height: 100%; min-height: 330px;"></canvas>
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