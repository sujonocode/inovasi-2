const ctx = document.getElementById('chart1f').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
                label: 'Bekerja',
                data: [223354, 121366],
                backgroundColor: '#29b6f6',
                stack: 'Stack 0',
            },
            {
                label: 'Pengangguran Terbuka',
                data: [5385, 5973],
                backgroundColor: '#ef5350',
                stack: 'Stack 0',
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            }
        },
        scales: {
            x: {
                stacked: true
            },
            y: {
                stacked: true
            }
        }
    }
});