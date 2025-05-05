<!-- CHART GRID SECTION -->
<div class="container-fluid pt-5 px-4">
    <div class="row g-3">
        <!-- Population Chart -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm p-2">
                <h6 class="text-center">Population</h6>
                <canvas id="populationChart" height="180"></canvas>
            </div>
        </div>

        <!-- Gini Ratio -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm p-2">
                <h6 class="text-center">Gini Ratio</h6>
                <canvas id="giniChart" height="180"></canvas>
            </div>
        </div>

        <!-- Education Rate -->
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm p-2">
                <h6 class="text-center">Education Rate</h6>
                <canvas id="educationChart" height="180"></canvas>
            </div>
        </div>

        <!-- More charts can follow with the same pattern -->
    </div>
</div>

<div class="container-fluid px-4 pt-4">
    <div class="row g-3">
        <!-- LEFT LARGE CHART -->
        <div class="col-lg-8">
            <div class="card p-3 shadow-sm rounded">
                <h6 class="text-center">Main Chart</h6>
                <canvas id="mainChart" height="300"></canvas>
            </div>
        </div>

        <!-- RIGHT STACKED SMALL CHARTS -->
        <div class="col-lg-4 d-flex flex-column gap-3">
            <div class="card p-2 shadow-sm rounded">
                <h6 class="text-center mb-1">Chart A</h6>
                <canvas id="chartA" height="100"></canvas>
            </div>
            <div class="card p-2 shadow-sm rounded">
                <h6 class="text-center mb-1">Chart B</h6>
                <canvas id="chartB" height="100"></canvas>
            </div>
            <div class="card p-2 shadow-sm rounded">
                <h6 class="text-center mb-1">Chart C</h6>
                <canvas id="chartC" height="100"></canvas>
            </div>
        </div>
    </div>
</div>