new Chart(document.getElementById('chart1e'), {
    type: 'line',
    data: {
        labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
        datasets: [{
            label: 'HLS',
            data: [10.70, 10.86, 11.03, 11.29, 11.49, 11.92, 11.93, 12.14, 12.15, 12.17, 12.18, 12.19, 12.30, 12.31, 12.33],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});