new Chart(document.getElementById('chart0b'), {
    type: 'bar',
    data: {
            labels: ['Modul 1', 'Modul 2', 'Modul 3', 'Modul 4', 'Modul 5'],
            datasets: [
                {
                    label: 'Pre Test',
                    data: preAverage,
                    backgroundColor: 'rgba(66, 165, 245, 0.8)' // biru
                },
                {
                    label: 'Post Test',
                    data: postAverage,
                    backgroundColor: 'rgba(102, 187, 106, 0.8)' // hijau
                }
            ]
        },
    options: {
        responsive: true,
        maintainAspectRatio: false,   // ini wajib supaya ikut tinggi container
        plugins: {
            legend: {
                position: 'top'
            },
            title: {
                display: false,
                text: 'Perbandingan Pre Test dan Post Test per Modul'
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 100, // kalau skor pakai skala 0–100
                ticks: {
                    stepSize: 10
                }
            },
            x: {
                grid: {
                    drawOnChartArea: false
                }
            }
        }
    }
});
