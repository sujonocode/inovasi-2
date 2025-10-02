new Chart(document.getElementById('chart0h'), {
    type: 'line',
    data: {
        labels: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
        datasets: [{
            label: 'Gini Ratio',
            data: [0.292, 0.336, 0.294, 0.306, 0.326, 0.329, 0.305, 0.289, 0.314, 0.293, 0.265, 0.261, 0.256],
            borderColor: '#42a5f5',
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true
    }
});