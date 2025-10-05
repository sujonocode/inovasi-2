new Chart(document.getElementById('chart0d'), {
    type: 'line',
    data: {
        labels: ['2020', '2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'IPG',
            data: [91.45, 91.36, 91.53, 91.77, 91.99],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});