// PDRB Triwulanan menurut Pengeluaran
// Option: ADHB, ADHK
const labels2am1 = ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'];

const dataValues2am1 = {
    ADHB: [6462.52,	7248.09, 8249.76, 9039.81, 10201.71, 11130.37, 12328.00, 13414.93, 14514.45, 15590.93, 15467.66, 16316.87, 18095.56, 19607.65, 21197.58],
    ADHK: [6462.52, 6841.76, 7470.39, 7975.62, 8445.98, 8910.24, 9371.99, 9858.64, 10352.10, 10872.10, 10679.82, 10929.22, 11384.34, 11919.46, 12397.91]
};

const ctx2am1 = document.getElementById('chart2am1').getContext('2d');
const chart2am1 = new Chart(ctx2am1, {
    type: 'bar',
    data: {
        labels: labels2am1,
        datasets: [{
            label: 'PDRB',
            data: dataValues2am1.ADHB, // Default to ADHB
            backgroundColor: '#42a5f5',
            borderColor: '#1e88e5',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom'
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        const label = context.dataset.label || '';
                        const value = context.raw;
                        return `${label}: ${value.toLocaleString('id-ID')} milyar rupiah`;
                    }
                }
            }
        }
    }
});

document.getElementById('option2am1').addEventListener('change', function() {
    const selected = this.value;
    chart2am1.data.datasets[0].data = dataValues2am1[selected];
    chart2am1.update();
});