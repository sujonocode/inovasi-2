new Chart(document.getElementById('chart0v'), {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Angka Kriminalitas Terhadap Jumlah Penduduk',
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
// Angka Kriminalitas Terhadap Jumlah Penduduk