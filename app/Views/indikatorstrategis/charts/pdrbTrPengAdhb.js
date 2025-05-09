// Produk Domestik Regional Bruto (PDRB) Triwulanan Menurut Pengeluaran Atas Dasar Harga Berlaku Kabupaten Tanggamus (Milyar Rupiah)
new Chart(document.getElementById('chart1b'), {
    type: 'line',
    data: {
        labels: ['2022-I', '2022-II', '2022-III', '2022-IV', '2023-I', '2023-II', '2023-III', '2023-IV', '2024-I', '2024-II', '2024-III', '2024-IV'],
        datasets: [{
            label: 'Produk Domestik Regional Bruto (PDRB) Triwulanan Menurut Pengeluaran Atas Dasar Harga Berlaku Kabupaten Tanggamus (Milyar Rupiah)',
            data: [4176.86, 4611.3, 4739.12, 4568.28, 4629.03, 5009.25, 5033.49, 4935.88, 4926.2, 5489.26, 5450.55, 5331.58],
            borderColor: '#42a5f5',
            fill: false,
        }]
    },
    options: {
        responsive: true
    }
});