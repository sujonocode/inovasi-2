new Chart(document.getElementById('chart1b'), {
    type: 'pie',
    data: {
        labels: ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Lainnya'],
        datasets: [{
            label: 'Jumlah (jiwa)',
            data: [635943, 1462, 2538, 727, 318, 48],
            backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0']
        }]
    },
    options: {
        responsive: true
    }
});