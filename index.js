var map = L.map('mapid').setView([38.2462420, 21.7350847], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([38.246242, 21.7350847]).addTo(map)
    .bindPopup('Πλατεία Γεωργίου')
    .openPopup();
