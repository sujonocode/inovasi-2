new Chart(document.getElementById('chart0k'), {
    type: 'line',
    data: {
        labels: [
            '2011', '2012', '2013', '2014', '2015', '2016',
            '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'
        ],
        datasets: [
            {
                label: 'G Perdagangan Besar dan Eceran; Reparasi Mobil dan Sepeda Motor',
                data: [6.69, 5.77, 5.67, 5.93, 1.43, 4.95, 6.14, 8.64, 10.64, -8.2, 16.8, 11.66, 10.15, 6.57],
                borderColor: '#42a5f5',
                fill: false,
                tension: 0.4
            },
            {
                label: 'H Transportasi dan Pergudangan',
                data: [6.18, 7.7, 6.23, 9.16, 11.82, 6.3, 6.47, 6.34, 9.48, -5.05, 5.73, 21.89, 15.33, 7.87],
                borderColor: '#66bb6a',
                fill: false,
                tension: 0.4
            },
            {
                label: 'I Penyediaan Akomodasi dan Makan Minum',
                data: [7.73, 8.53, 9.66, 7.69, 11.17, 6.39, 9.0, 10.6, 10.04, -6.28, -1.43, 14.13, 16.2, 6.96],
                borderColor: '#ffa726',
                fill: false,
                tension: 0.4
            },
            {
                label: 'J Informasi dan Komunikasi',
                data: [10.82, 9.79, 8.3, 7.31, 8.25, 11.14, 11.19, 8.96, 9.68, 8.54, 6.64, 0.4, 7.47, 9.69],
                borderColor: '#ab47bc',
                fill: false,
                tension: 0.4
            },
            {
                label: 'M, N Jasa Perusahaan',
                data: [12.22, 12.7, 12.87, 12.44, 7.05, 7.16, 5.62, 5.7, 3.2, -1.32, 0.49, 17.87, 5.5, 6.06],
                borderColor: '#26a69a',
                fill: false,
                tension: 0.4
            },
            {
                label: 'R,S,T,U Jasa Lainnya',
                data: [4.93, 4.71, 4.26, 3.68, 7.73, 5.35, 8.64, 9.6, 9.43, -5.53, -2.09, 26.71, 17.65, 6.9],
                borderColor: '#ef5350',
                fill: false,
                tension: 0.4
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: false,
                text: 'Persentase Pertumbuhan Pendukung Sektor Pariwisata dalam PDRB (2011–2024)'
            },
            legend: {
                position: 'bottom'
            }
        },
        scales: {
            y: {
                beginAtZero: false
            }
        }
    }
});

// Persentase Pertumbuhan Pendukung Sektor Pariwisata Dalam PDRB