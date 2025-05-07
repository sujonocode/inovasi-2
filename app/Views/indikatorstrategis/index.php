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
            </div>
        </div>

        <div class="container-fluid p-2">
            <div class="row g-4">
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
                        <canvas id="chart1g" class="w-100" style="height: 100%; min-height: 330px;"></canvas>
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
        // Register Chart.js and boxplot plugin
        // Chart.register(
        //     Chart.BoxPlotController,
        //     Chart.BoxAndWhiskers,
        //     Chart.BoxPlotChart
        // );

        // Chart 1a - Pie Chart
        new Chart(document.getElementById('chart1a'), {
            type: 'pie',
            data: {
                labels: ['A', 'B', 'C', 'D'],
                datasets: [{
                    label: 'Population',
                    data: [300, 50, 100, 75],
                    backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0']
                }]
            },
            options: {
                responsive: true
            }
        });

        // Chart 1b - Line Chart
        new Chart(document.getElementById('chart1b'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr'],
                datasets: [{
                    label: 'Growth',
                    data: [10, 20, 15, 25],
                    borderColor: '#42a5f5',
                    fill: false,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true
            }
        });

        // Chart 1c - Bar Chart
        new Chart(document.getElementById('chart1c'), {
            type: 'bar',
            data: {
                labels: ['2019', '2020', '2021', '2022'],
                datasets: [{
                    label: 'GDP',
                    data: [500, 600, 700, 800],
                    backgroundColor: '#66bb6a'
                }]
            },
            options: {
                responsive: true
            }
        });

        // Chart 1d - Scatter Plot
        new Chart(document.getElementById('chart1d'), {
            type: 'scatter',
            data: {
                datasets: [{
                    label: 'Data Points',
                    data: [{
                        x: 10,
                        y: 20
                    }, {
                        x: 15,
                        y: 10
                    }, {
                        x: 20,
                        y: 30
                    }],
                    backgroundColor: '#ef5350'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        type: 'linear',
                        position: 'bottom'
                    }
                }
            }
        });

        const ctx = document.getElementById('chart1e').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                        label: 'Line A',
                        data: [10, 20, 15, 25, 22],
                        borderColor: 'red',
                        fill: false,
                        tension: 0.4
                    },
                    {
                        label: 'Line B',
                        data: [30, 25, 35, 20, 40],
                        borderColor: 'blue',
                        fill: false,
                        tension: 0.4
                    },
                    {
                        label: 'Line C',
                        data: [5, 10, 8, 15, 12],
                        borderColor: 'green',
                        fill: false,
                        tension: 0.4
                    },
                    {
                        label: 'Line D',
                        data: [22, 18, 25, 30, 28],
                        borderColor: 'orange',
                        fill: false,
                        tension: 0.4
                    },
                    {
                        label: 'Line E',
                        data: [12, 17, 10, 18, 20],
                        borderColor: 'purple',
                        fill: false,
                        tension: 0.4
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
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Value'
                        }
                    }
                }
            }
        });

        // Chart 1f - Stacked Bar Chart
        // new Chart(document.getElementById('chart1f'), {
        //     type: 'bar',
        //     data: {
        //         labels: ['Q1', 'Q2', 'Q3', 'Q4'],
        //         datasets: [{
        //                 label: 'Service',
        //                 data: [120, 130, 100, 90],
        //                 backgroundColor: '#29b6f6'
        //             },
        //             {
        //                 label: 'Manufacturing',
        //                 data: [80, 70, 60, 100],
        //                 backgroundColor: '#ef5350'
        //             }
        //         ]
        //     },
        //     options: {
        //         responsive: true,
        //         scales: {
        //             x: {
        //                 stacked: true
        //             },
        //             y: {
        //                 stacked: true
        //             }
        //         }
        //     }
        // });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('chart1f').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                datasets: [{
                        label: 'Service',
                        data: [120, 130, 100, 90],
                        backgroundColor: '#29b6f6',
                        stack: 'Stack 0',
                    },
                    {
                        label: 'Manufacturing',
                        data: [80, 70, 60, 100],
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