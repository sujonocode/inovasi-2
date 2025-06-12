// PDRB Triwulanan menurut Pengeluaran
// Option: ADHB, ADHK
const labels9 = ['I-2022', 'II-2022', 'III-2022', 'IV-2022', 'I-2023', 'II-2023', 'III-2023', 'IV-2023', 'I-2024', 'II-2024', 'III-2024', 'IV-2024'];

const dataValues9 = {
    ADHB: [4176.86, 4611.3, 4739.12, 4568.28, 4629.03, 5009.25, 5033.49, 4935.88, 4926.2, 5489.26, 5450.55, 5331.58],
    ADHK: [2692.49, 2916.11, 2953.37, 2822.36, 2838.53, 3057.5, 3055.79, 2967.65, 2919.17, 3203.83, 3185.49, 3089.42]
};

const ctx9 = document.getElementById('chart2a').getContext('2d');
const chart9 = new Chart(ctx9, {
    type: 'bar',
    data: {
        labels: labels9,
        datasets: [{
            label: 'PDRB',
            data: dataValues9.ADHB, // Default to ADHB
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

document.getElementById('option9').addEventListener('change', function() {
    const selected = this.value;
    chart9.data.datasets[0].data = dataValues9[selected];
    chart9.update();
});