new Chart(document.getElementById('chart2c'), {
    type: 'line',
    data: {
        labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025'],
        datasets: [{
            label: 'Persen (%)',
            data: [5.87, 9.19, 6.76, 5.9, 5.5, 5.18, 5.19, 5.01, 5.02, -1.77, 2.34, 4.16, 4.7, 4.01],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});