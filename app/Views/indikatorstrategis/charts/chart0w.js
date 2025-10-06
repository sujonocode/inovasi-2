new Chart(document.getElementById('chart0w'), {
    type: 'line',
    data: {
        labels: ['2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'IKLH',
            data: [63.42, 62.06, 64.75, 73.07],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});