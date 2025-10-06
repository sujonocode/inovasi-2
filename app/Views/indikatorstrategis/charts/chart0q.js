new Chart(document.getElementById('chart0q'), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'IPKD',
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