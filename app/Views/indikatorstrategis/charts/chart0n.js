new Chart(document.getElementById('chart0n'), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Rasio Elektrifikasi',
            data: [],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});
// Rasio Elektrifikasi