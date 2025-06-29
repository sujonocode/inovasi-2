new Chart(document.getElementById('chart0c'), {
    type: 'line',
    data: {
        labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
        datasets: [
            {
                label: 'Harapan Lama Sekolah (Tahun)',
                data: [10.70, 10.86, 11.03, 11.29, 11.49, 11.92, 11.93, 12.14, 12.15, 12.17, 12.18, 12.19, 12.30, 12.31, 12.33],
                borderColor: '#42a5f5',
                backgroundColor: 'transparent',
                tension: 0.4
            },
            {
                label: 'Rata-rata Lama Sekolah (Tahun)',
                data: [6.16, 6.19, 6.27, 6.35, 6.63, 6.86, 6.87, 6.88, 6.96, 7.21, 7.22, 7.34, 7.35, 7.36, 7.38],
                borderColor: '#66bb6a',
                backgroundColor: 'transparent',
                tension: 0.4
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            },
            title: {
                display: false,
                text: 'Perbandingan HLS dan RLS (2010–2024)'
            }
        },
        scales: {
            y: {
                beginAtZero: false
            }
        }
    }
});

// new Chart(document.getElementById('chart0c'), {
//     type: 'line',
//     data: {
//         labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024'],
//         datasets: [{
//             label: '',
//             data: [3.91, 4.82, 4.76, 6.08, 3.24, 4.88, 4.60, 5.72, 5.08, 2.21, 2.96, 2.96, 2.93, 3.70, 3.35],
//             borderColor: '#42a5f5',
//             fill: false,
//             tension: 0.4
//         }]
//     },
//     options: {
//         responsive: true
//     }
// });

// Harapan Lama Sekolah (HLS) 10.70	10.86	11.03	11.29	11.49	11.92	11.93	12.14	12.15	12.17	12.18	12.19	12.30	12.31	12.33
// Rata-rata Lama Sekolah (RLS) ls 6.16	6.19	6.27	6.35	6.63	6.86	6.87	6.88	6.96	7.21	7.22	7.34	7.35	7.36	7.38