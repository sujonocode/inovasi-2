const labels3b = [
    'Wonosobo', 'Semaka', 'Bandar Negeri Semuong', 'Kota Agung', 'Pematang Sawa',
    'Kota Agung Barat', 'Kota Agung Timur', 'Pulau Panggung', 'Ulubelu',
    'Air Naningan', 'Talang Padang', 'Sumberejo', 'Gisting', 'Gunung Alip',
    'Pugung', 'Bulok', 'Cukuh Balak', 'Kelumbayan', 'Limau', 'Kelumbayan Barat',
];

const dataTepiLaut = [1, 1, 0, 6, 13, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 7, 6, 0];
const dataBukanTepiLaut = [27, 21, 11, 10, 1, 12, 8, 21, 16, 10, 20, 13, 9, 12, 27, 10, 11, 1, 5, 6];

new Chart(document.getElementById('chart3b'), {
    type: 'bar',
    data: {
        labels: labels3b,
        datasets: [
            {
                label: 'Tepi Laut',
                data: dataTepiLaut,
                backgroundColor: '#42a5f5'
            },
            {
                label: 'Bukan Tepi Laut',
                data: dataBukanTepiLaut,
                backgroundColor: '#66bb6a'
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: false,
                text: 'Jumlah Desa/Kelurahan Menurut Letak Geografis di Kecamatan, Kabupaten Tanggamus'
            }
        },
        scales: {
            x: {
                stacked: true,
                title: {
                    display: true,
                    text: 'Kecamatan'
                },
                ticks: {
                    autoSkip: false,
                    maxRotation: 90,
                    minRotation: 45
                }
            },
            y: {
                stacked: true,
                title: {
                    display: true,
                    text: 'Jumlah'
                }
            }
        }
    }
});