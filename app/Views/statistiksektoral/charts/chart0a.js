const ctx = document.getElementById('chart0a').getContext('2d');

// Fungsi buat gradasi 1 warna saja (dari gelap → terang)
function generateSingleGradient(count, baseHue = 210) {
    let colors = [];
    for (let i = 0; i < count; i++) {
        let lightness = 35 + (i * (40 / (count - 1))); // 35% → 75%
        colors.push(`hsl(${baseHue}, 70%, ${lightness}%)`);
    }
    return colors;
}

// const dataValues = [12, 10, 9, 8, 6, 8, 9, 9];
// const labels = [
//     'Dinas Perikanan Kab. Tanggamus',
//     'Dinas Sosial',
//     'Dinas Pendidikan dan Kebudayaan Kab. Tanggamus',
//     'Dinas Kesehatan',
//     'Dinas Pertanian',
//     'Dinas Pendidikan dan Kebudayaan Kab. Tanggamus',
//     'Dinas Kesehatan',
//     'Dinas Pertanian',
// ];



// Gabungkan jadi array objek supaya mudah diurutkan
let combined = labels.map((label, i) => ({
    label: label,
    value: dataValues[i]
}));

// Urutkan dari terbesar ke terkecil
combined.sort((a, b) => b.value - a.value);

// Pisahkan lagi setelah diurutkan
const sortedLabels = combined.map(item => item.label);
const sortedValues = combined.map(item => item.value);

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: sortedLabels,
        datasets: [{
            label: 'Jumlah Pegawai',
            data: sortedValues,
            backgroundColor: generateSingleGradient(sortedValues.length)
        }]
    },
options: {
    indexAxis: 'y',
    responsive: true,
    maintainAspectRatio: false,   // ini wajib supaya ikut tinggi container
    plugins: {
        legend: { display: false },
        title: { display: false },
        tooltip: {
            callbacks: {
                label: function(context) {
                    return `${context.label}: ${context.formattedValue}`;
                }
            }
        }
    },
    scales: {
        x: {
            beginAtZero: true,
            grid: {
                drawOnChartArea: true,
                color: "rgba(0,0,0,0.1)"
            }
        },
        y: {
            ticks: {
                font: { size: 11 },
                callback: function(value, index) {
                    let label = sortedLabels[index];
                    return label.length > 25 ? label.substr(0, 25) + "..." : label;
                }
            },
            grid: {
                drawOnChartArea: false
            }
        }
    }
}

});
