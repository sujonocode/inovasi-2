new Chart(document.getElementById('chart1d'), {
    type: 'line',
    data: {
        labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
        datasets: [{
            label: 'TPAK',
            data: [68.71, 68.35, 68.55, 66.81, 71.18, 66.20, 71.34, 68.46, 65.91, 75.58, 68.78, 59.72, 68.76, 68.91, 70.60],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});