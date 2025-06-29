new Chart(document.getElementById('chart0t'), {
    type: 'line',
    data: {
        labels: ['2022', '2023', '2024'],
        datasets: [{
            label: 'Indeks Desa Membangun',
            data: [0.6888, 0.7012, 0.7142],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});
// Indeks Desa Membangun