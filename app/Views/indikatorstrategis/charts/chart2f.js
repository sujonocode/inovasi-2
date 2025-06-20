new Chart(document.getElementById('chart2f'), {
    type: 'line',
    data: {
        labels: ['I-2023', 'II-2023', 'III-2023', 'IV-2023', 'I-2024', 'II-2024', 'III-2024', 'IV-2024', 'I-2025'],
        datasets: [{
            label: 'Persen (%)',
            data: [5.42, 5.12, 4.55, 4.70, 2.84, 3.85, 3.98, 4.01, 4.18],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});