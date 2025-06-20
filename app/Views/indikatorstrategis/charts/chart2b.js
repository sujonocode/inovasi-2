// Distribusi PDRB Triwulanan menurut Pengeluaran ADHB pie, tahun
const labels11 = ['Konsumsi Akhir Rumah Tangga', 'Konsumsi Akhir Pemerintah', 'Pembentukan Modal Tetap Bruto', 'Lainnya'];

const dataValues2b = {
    TW12024: [75.96, 7.5, 24.24, -7.7],
    TW22024: [71.39, 7.9, 22.41, -1.7],
    TW32024: [70.71, 7.98, 23.02, -1.71],
    TW42024: [72.70, 11.59, 24.24, -8.53],
    TW12025: [75.80, 6.17, 23.34, -5.30]
};

const ctx2b = document.getElementById('chart2b').getContext('2d');
const chart2b = new Chart(ctx2b, {
    type: 'pie',
    data: {
        labels: labels11,
        datasets: [{
            label: 'Distribusi (%)',
            data: dataValues2b.TW12025,
            backgroundColor: [  '#ff6384', '#36a2eb', '#ffce56', '#4bc0c0', '#9966ff', '#ff9f40', '#c9cbcf', '#00a950', '#ff6b6b', '#6b5b95'],
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
                        return `${label}: ${value.toLocaleString('id-ID')} %`;
                    }
                }
            }
        }
    }
});

document.getElementById('option2b').addEventListener('change', function() {
    const selected = this.value;
    chart2b.data.datasets[0].data = dataValues2b[selected];
    chart2b.update();
});