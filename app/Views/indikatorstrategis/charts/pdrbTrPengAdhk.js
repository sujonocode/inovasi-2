// Produk Domestik Regional Bruto (PDRB) Triwulanan Menurut Pengeluaran Atas Dasar Harga Konstan 2010 Kabupaten Tanggamus (Milyar Rupiah)
new Chart(document.getElementById('chart1b'), {
    type: 'line',
    data: {
        labels: ['2022-I', '2022-II', '2022-III', '2022-IV', '2023-I', '2023-II', '2023-III', '2023-IV', '2024-I', '2024-II', '2024-III', '2024-IV'],
        datasets: [{
            label: 'Produk Domestik Regional Bruto (PDRB) Triwulanan Menurut Pengeluaran Atas Dasar Harga Konstan 2010 Kabupaten Tanggamus (Milyar Rupiah)',
            data: [2692.49, 2916.11, 2953.37, 2822.36, 2838.53, 3057.5, 3055.79, 2967.65, 2919.17, 3203.83, 3185.49, 3089.42],
            borderColor: '#42a5f5',
            fill: false,
        }]
    },
    options: {
        responsive: true
    }
});