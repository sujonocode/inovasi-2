new Chart(document.getElementById('chart0m'), {
    type: 'line',
    data: {
        labels: ['2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
        datasets: [{
            label: 'TPT',
            data: [3.91, 4.82, 4.76, 6.08, 3.24, 4.88, 4.60, 5.72, 5.08, 2.21, 2.96, 2.96, 2.93, 3.70, 3.35],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});