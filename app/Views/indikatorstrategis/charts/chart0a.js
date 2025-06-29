new Chart(document.getElementById('chart0a'), {
    type: 'line',
    data: {
        labels: ['2020', '2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'IPM',
            data: [68.58, 68.79, 69.32, 69.93, 70.54],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});
