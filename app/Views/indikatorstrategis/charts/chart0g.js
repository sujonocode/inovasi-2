new Chart(document.getElementById('chart0g'), {
    type: 'line',
    data: {
        labels: ['2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'Persentase Penduduk Miskin (%)',
            data: [13.25, 12.48, 12.05, 11.68, 11.13, 10.98, 10.52, 10.28],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});