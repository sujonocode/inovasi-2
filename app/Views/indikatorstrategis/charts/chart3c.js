const labels3c = [ 
    'Wonosobo', 'Semaka', 'Bandar Negeri Semuong', 'Kota Agung', 'Pematang Sawa',
    'Kota Agung Barat', 'Kota Agung Timur', 'Pulau Panggung', 'Ulubelu',
    'Air Naningan', 'Talang Padang', 'Sumberejo', 'Gisting', 'Gunung Alip',
    'Pugung', 'Bulok', 'Cukuh Balak', 'Kelumbayan', 'Limau', 'Kelumbayan Barat',
];

const dataLembah = [
    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
];
const dataLerengPuncak = [
    1, 2, 1, 1, 5, 0, 6, 4, 16, 1, 0, 7, 1, 0, 4, 1, 2, 8, 8, 6
];
const dataDataran = [
    27, 20, 10, 15, 9, 16, 6, 17, 0, 9, 20, 6, 8, 12, 23, 9, 18, 0, 3, 0
];

new Chart(document.getElementById('chart3c'), { 
    type: 'bar',
    data: {
        labels: labels3c,
        datasets: [
            {
                label: 'Lembah',
                data: dataLembah,
                backgroundColor: '#ef5350' // merah
            },
            {
                label: 'Lereng/Puncak',
                data: dataLerengPuncak,
                backgroundColor: '#42a5f5' // biru
            },
            {
                label: 'Dataran',
                data: dataDataran,
                backgroundColor: '#66bb6a' // hijau
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
                text: 'Jumlah Desa/Kelurahan Menurut Letak Geografis (Lembah, Lereng/Puncak, Dataran) per Kecamatan'
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