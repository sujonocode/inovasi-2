new Chart(document.getElementById('chart0i'), {
    type: 'line',
    data: {
        labels: [
            'Jan 2024', 'Feb 2024', 'Mar 2024', 'Apr 2024', 'Mei 2024', 'Jun 2024',
            'Jul 2024', 'Agt 2024', 'Sep 2024', 'Okt 2024', 'Nov 2024', 'Des 2024',
            'Jan 2025', 'Feb 2025', 'Mar 2025', 'Apr 2025', 'Mei 2025', 'Jun 2025',
            'Jul 2025', 'Agt 2025', 'Sep 2025'
        ],
        datasets: [{
            label: 'Nilai Tukar Petani (NTP)',
            data: [
                119.35, 122.02, 120.37, 119.32, 121.79, 126.56,
                128.94, 127.62, 129.58, 128.47, 126.64, 129.01,
                132.07, 134.59, 133.17, 127.90, 130.64, 128.31,
                125.15, 125.41, 127.62
            ],
            borderColor: '#42a5f5',
            backgroundColor: 'transparent',
            tension: 0.4,
            fill: false
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: false,
                text: 'Nilai Tukar Petani (NTP) 2024–2025'
            },
            legend: {
                display: true
            }
        },
        scales: {
            y: {
                beginAtZero: false
            }
        }
    }
});