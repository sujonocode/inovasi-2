new Chart(document.getElementById('chart2d'), {
    type: 'line',
    data: {
        labels: ['I-2023', 'II-2023', 'III-2023', 'IV-2023', 'I-2024', 'II-2024', 'III-2024', 'IV-2024', 'I-2025'],
        datasets: [{
            label: 'Persen (%)',
            data: [0.57, 7.71, -0.06, -2.88, -1.63, 9.75, -0.57, -3.02, -1.56],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});