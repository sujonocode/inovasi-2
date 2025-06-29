new Chart(document.getElementById('chart0b'), {
    type: 'line',
    data: {
        labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
        datasets: [{
            label: 'Angka Harapan Hidup (Tahun)',
            data: [66.58, 66.69, 66.79, 67.12, 67.42, 67.61, 67.80, 68.04, 68.40, 68.56, 68.67, 68.95, 69.23, 69.56],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});