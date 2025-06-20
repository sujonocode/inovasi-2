new Chart(document.getElementById('chart1a'), {
    type: 'pie',
    data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah (jiwa)',
            data: [345940, 324427],
            backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0']
        }]
    },
    options: {
        responsive: true
    }
});