new Chart(document.getElementById('chart0p'), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Tingkat Akuntabilitas Kinerja',
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
// Tingkat Akuntabilitas Kinerja