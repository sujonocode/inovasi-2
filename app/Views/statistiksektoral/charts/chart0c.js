new Chart(document.getElementById('chart0c'), {
    type: 'doughnut',
    data: {
        labels: ['Peningkatan', ''],
        datasets: [{
            data: [peningkatan, 100-peningkatan],
            backgroundColor: ['#4CAF50', '#E0E0E0'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // supaya fleksibel tinggi/lebarnya
        cutout: '70%',
        layout: {
            padding: {
                bottom: 20 // 🔹 tambah margin bawah biar tidak mepet
            }
        },
        plugins: {
            legend: { display: false },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return context.label + ": " + context.raw + "%";
                    }
                }
            }
        }
    },
    plugins: [{
        id: 'centerText',
        beforeDraw: (chart) => {
            const {ctx, chartArea: {width, height}} = chart;
            ctx.save();
            ctx.font = 'bold 46px sans-serif'; // 🔹 perbesar ukuran teks (dulu 30px → jadi 36px)
            ctx.fillStyle = '#4CAF50';
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            ctx.fillText('+10%', width / 2, height / 2);
        }
    }]
});
