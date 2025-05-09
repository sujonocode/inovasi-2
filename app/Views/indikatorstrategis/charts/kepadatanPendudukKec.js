var map = L.map('chart2d');

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

var geoLayer = L.geoJSON(tanggamusGeoJSON, {
    style: {
        color: "#28a745",
        weight: 2,
        fillOpacity: 0.4
    },
    onEachFeature: function(feature, layer) {
        if (feature.properties.name) {
            layer.bindPopup("Kecamatan: " + feature.properties.name);
        }
    }
}).addTo(map);

map.fitBounds(geoLayer.getBounds());