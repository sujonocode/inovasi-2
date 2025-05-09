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
                        <canvas id="" class="w-100" style="height: 100px;"></canvas>
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
                        <div id="mainChart" class="w-100" style="height: 100%; min-height: 330px;"></div>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?= $this->include('indikatorstrategis/charts/jumlahPendudukJk.js') ?>
        <?= $this->include('indikatorstrategis/charts/jumlahPendudukAgama.js') ?>
        new Chart(document.getElementById('chart1c'), {
            type: 'line',
            data: {
                labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'TPT',
                    data: [3.91, 4.82, 4.76, 6.08, 3.24, 4.88, 4.60, 5.72, 5.08, 2.21, 2.96, 2.96, 2.93, 3.70, 3.35],
                    borderColor: '#42a5f5',
                    fill: false,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true
            }
        });

        new Chart(document.getElementById('chart1d'), {
            type: 'line',
            data: {
                labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'TPAK',
                    data: [68.71, 68.35, 68.55, 66.81, 71.18, 66.20, 71.34, 68.46, 65.91, 75.58, 68.78, 59.72, 68.76, 68.91, 70.60],
                    borderColor: '#42a5f5',
                    fill: false,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true
            }
        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Chart(document.getElementById('chart1e'), {
            type: 'line',
            data: {
                labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'HLS',
                    data: [10.70, 10.86, 11.03, 11.29, 11.49, 11.92, 11.93, 12.14, 12.15, 12.17, 12.18, 12.19, 12.30, 12.31, 12.33],
                    borderColor: '#42a5f5',
                    fill: false,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true
            }
        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('chart1f').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                        label: 'Bekerja',
                        data: [223354, 121366],
                        backgroundColor: '#29b6f6',
                        stack: 'Stack 0',
                    },
                    {
                        label: 'Pengangguran Terbuka',
                        data: [5385, 5973],
                        backgroundColor: '#ef5350',
                        stack: 'Stack 0',
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        });
    });



    const ctx = document.getElementById('chart1g').getContext('2d');

    new Chart(ctx, {
        type: 'bubble',
        data: {
            datasets: [{
                    label: 'Asia',
                    data: [{
                            x: 10,
                            y: 20,
                            r: 15
                        },
                        {
                            x: 15,
                            y: 10,
                            r: 10
                        },
                        {
                            x: 25,
                            y: 30,
                            r: 8
                        }
                    ],
                    backgroundColor: 'rgba(255, 99, 132, 0.6)'
                },
                {
                    label: 'Europe',
                    data: [{
                            x: 20,
                            y: 25,
                            r: 10
                        },
                        {
                            x: 30,
                            y: 15,
                            r: 12
                        }
                    ],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)'
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const {
                                x,
                                y,
                                r
                            } = context.raw;
                            return `x: ${x}, y: ${y}, size: ${r}`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'X Value'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Y Value'
                    }
                }
            }
        }
    });
</script>

<script>
    // 1. Create the map
    var map = L.map('mainChart').setView([-2.5, 117.5], 5); // Centered on Indonesia

    // 2. Add OpenStreetMap base layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // 3. Sample GeoJSON (can be replaced with your own or loaded from server)
    var sampleGeoJson = {
        "type": "FeatureCollection",
        "features": [{
            "type": "Feature",
            "properties": {
                "name": "Example Area"
            },
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                    [
                        [117.0, -2.0],
                        [118.0, -2.0],
                        [118.0, -3.0],
                        [117.0, -3.0],
                        [117.0, -2.0]
                    ]
                ]
            }
        }]
    };

    // 4. Add GeoJSON to map
    L.geoJSON(tanggamusGeoJSON, {
        style: {
            color: "#28a745",
            weight: 2,
            fillOpacity: 0.4
        },
        onEachFeature: function(feature, layer) {
            if (feature.properties.name) {
                layer.bindPopup("Kecamatan: " + feature.properties.name);
            }
        }
    }).addTo(map);
</script>