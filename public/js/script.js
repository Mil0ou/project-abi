var map = L.map('map').setView([45.16546064660384, 1.5325170155019425], 18)

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map)

L.marker([45.16546064660384, 1.5325170155019425]).addTo(map).bindPopup('Nous sommes ici !').openPopup()
