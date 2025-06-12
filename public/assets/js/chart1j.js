// Inisialisasi peta
var map = L.map('map-123').setView([-5.15, 105.25], 11);

// Tambahkan tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Fungsi pewarnaan berdasarkan kepadatan
function getColor(kepadatan) {
    return kepadatan > 1000 ? '#800026' :
           kepadatan > 500  ? '#FD8D3C' :
                              '#FFEDA0';
}

function style(feature) {
    return {
        fillColor: getColor(feature.properties.kepadatan),
        weight: 2,
        opacity: 1,
        color: 'white',
        fillOpacity: 0.7
    };
}

// Tambahkan GeoJSON ke peta
L.geoJson(geojsonData, {
    style: style,
    onEachFeature: function (feature, layer) {
        var popupContent = "<strong>" + feature.properties.kecamatan + "</strong><br/>" +
                           "Kepadatan: " + feature.properties.kepadatan + " jiwa/km²";
        layer.bindPopup(popupContent);
    }
}).addTo(map);
