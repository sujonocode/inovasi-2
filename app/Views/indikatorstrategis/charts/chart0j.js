new Chart(document.getElementById('chart0j'), {
    type: 'line',
    data: {
        labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'IKP',
            data: [72.18, 71.35, 74.67, 75.34, 73.6, 74.19, 76.4],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});
// Indeks Ketahanan Pangan	
