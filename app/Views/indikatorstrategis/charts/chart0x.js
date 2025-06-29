new Chart(document.getElementById('chart0x'), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Penurunan Emisi Gas Rumah Kaca',
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
// Penurunan Emisi Gas Rumah Kaca