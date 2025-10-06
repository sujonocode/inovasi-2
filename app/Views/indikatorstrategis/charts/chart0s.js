new Chart(document.getElementById('chart0s'), {
    type: 'line',
    data: {
        labels: ['2020', '2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'Indeks Daya Saing Daerah',
            data: [1.8506, 2.4290, 2.530, 2.900, 3.370],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});