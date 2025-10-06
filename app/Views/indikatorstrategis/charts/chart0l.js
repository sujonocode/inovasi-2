new Chart(document.getElementById('chart0l'), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'IPID',
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