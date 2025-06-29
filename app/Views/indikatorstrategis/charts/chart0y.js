new Chart(document.getElementById('chart0y'), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'IRB',
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
// Indeks Risiko Bencana