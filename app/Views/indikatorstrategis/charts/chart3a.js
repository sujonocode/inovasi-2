const labels3a = ['2020', '2021', '2022', '2023', '2024'];
const dataWilayah = {
    // 'Lampung Barat': [70.47, 70.55, 71.01, 71.72, 72.41],
    'Tanggamus': [68.58, 68.79, 69.32, 69.93, 70.54],
    // 'Lampung Selatan': [70.36, 70.48, 70.95, 71.55, 72.15],
    // 'Lampung Timur': [70.62, 70.91, 71.82, 72.44, 73.05],
    // 'Lampung Tengah': [71.97, 72.04, 72.59, 73.39, 74.16],
    // 'Lampung Utara': [69.58, 69.78, 70.19, 70.78, 71.42],
    // 'Way Kanan': [69.33, 69.46, 69.92, 70.51, 71.17],
    // 'Tulang Bawang': [70.07, 70.28, 71.08, 71.56, 72.24],
    // 'Pesawaran': [67.7, 68.04, 68.55, 69.46, 70.24],
    // 'Pringsewu': [72.04, 72.14, 72.57, 73.11, 73.84],
    // 'Mesuji': [65.83, 66.24, 67.12, 67.79, 68.59],
    // 'Tulang Bawang Barat': [67.51, 67.76, 68.7, 69.38, 70.04],
    // 'Pesisir Barat': [68.43, 68.79, 69.58, 70.4, 71.04],
    // 'Bandar Lampung': [78.78, 78.93, 79.33, 79.86, 80.46],
    // 'Metro': [78.69, 78.99, 79.38, 79.85, 80.41],
    'Provinsi Lampung': [71.04, 71.25, 71.79, 72.48, 73.13],
    'Indonesia': [72.81, 73.16, 73.77, 74.39, 75.02]
  };
  
// Warna tetap untuk tiap wilayah (urut sesuai data)
const colors = [
    '#1e88e5',
    '#43a047',
    '#fb8c00',
    '#fdd835',
    '#2e7d32',
    '#8e24aa',
    '#6d4c41',
    '#00acc1',
    '#ef5350',
    '#5e35b1',
    '#c0ca33',
    '#8d6e63',
    '#ff7043',
    '#3949ab',
    '#7cb342',
    '#9e9d24'
];
  
  const datasets = Object.entries(dataWilayah).map(([wilayah, data]) => ({
      label: wilayah,
      data: data,
      borderColor: colors,
      fill: false,
      tension: 0.4
  }));
  
  new Chart(document.getElementById('chart3a'), {
      type: 'line',
      data: {
          labels: labels3a,
          datasets: datasets
      },
      options: {
          responsive: true,
          plugins: {
              legend: {
                  display: true,
                  position: 'bottom'
              },
              tooltip: {
                  mode: 'index',
                  intersect: false
              }
          },
          interaction: {
              mode: 'nearest',
              axis: 'x',
              intersect: false
          },
          scales: {
              y: {
                  title: {
                      display: true,
                      text: 'IPM'
                  }
              },
              x: {
                  title: {
                      display: true,
                      text: 'Tahun'
                  }
              }
          }
      }
  });