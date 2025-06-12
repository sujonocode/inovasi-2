// Distribusi PDRB Triwulanan menurut Pengeluaran ADHB pie, tahun
const labels11 = ['Konsumsi Akhir Rumah Tangga', 'Konsumsi Akhir Pemerintah', 'Pembentukan Modal Tetap Bruto', 'Lainnya'];

const dataValues11 = {
    TW12024: [75.96, 7.5, 24.24, -7.7],
    TW22024: [71.39, 7.9, 22.41, -1.7],
    TW32024: [70.71, 7.98, 23.02, -1.71],
    TW42024: [70.17, 8.24, 23.39, -1.8]
};

const ctx11 = document.getElementById('chart2c').getContext('2d');
const chart11 = new Chart(ctx11, {
    type: 'pie',
    data: {
        labels: labels11,
        datasets: [{
            label: 'Distribusi',
            data: dataValues11.TW12024,
            backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0'],
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

document.getElementById('option11').addEventListener('change', function() {
    const selected = this.value;
    chart11.data.datasets[0].data = dataValues11[selected];
    chart11.update();
});