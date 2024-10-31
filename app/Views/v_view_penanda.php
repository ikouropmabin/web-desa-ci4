<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="col-12">
                <div class="card prod-p-card bg-c-secondary">
                    <div class="card-header">
                        <div class="card-title"><i class="fa-solid fa-layer-group"></i> <?= $judul ?></div>
                    </div>
                </div>
            </div>
            <div id="map" style="width: 100%; height:70vh;"></div>  
            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
            <script>
                // Peta Satelit dari Esri
                var petaSatelit = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                    attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
                });

                // Peta Jalan dari OpenStreetMap
                var peta2 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                });

                // Peta Grayscale
                var grayscale = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap contributors',
                    opacity: 0.5 // Menambahkan efek grayscale
                });

                // Peta Night Mode (CartoDB DarkMatter)
                var night = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                    attribution: '&copy; <a href="https://carto.com/">CartoDB</a>'
                });

                // Peta Stamen Watercolor
                var stamen = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.jpg', {
                    attribution: '&copy; <a href="http://maps.stamen.com/">Stamen Design</a>, under <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a>'
                });

                // Peta CartoDB Positron
                var cartoDB = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                    attribution: '&copy; <a href="https://carto.com/">CartoDB</a>'
                });

                // Inisialisasi peta
                var map = L.map('map', {
                    center: [-2.588912963301011, 140.70685346011163], // Koordinat Jayapura
                    zoom: 15,
                    layers: [petaSatelit] // Set default layer sebagai peta satelit
                });

                // Control Layer
                var baseMaps = {
                    "Peta Satelit (Esri)": petaSatelit,
                    "Peta Jalan (OpenStreetMap)": peta2,
                    "Grayscale": grayscale,
                    "Night Mode": night,
                    "Stamen Watercolor": stamen,
                    "CartoDB Positron": cartoDB
                };

                const layerControl = L.control.layers(baseMaps,null,{
					collapsed: false
				}).addTo(map);

				//=== penanda ====

				L.marker([-2.5887567960331275, 140.7122995523104])
					.bindPopup("<img src='<?= base_url('gambar/Wisata Mangrove Tobati.png') ?>'width='200px''>" +
						"<h5>Wisata Mangrove Tobati</h5>" +
						"Alamat :CP66+CWG, Tobati, Distrik Jayapura Selatan, Kota Jayapura, Papua")
					.addTo(map);

				L.marker([-2.587072213344895, 140.71319925830304])
					.bindPopup("<img src='<?= base_url('gambar/wisata tobati.png') ?>'width='200px''>" +
						"<h5>Pantai Humbolt</h5>" +
						"Alamat :Jl Tobaobati, Sel., Tobati, Jayapura Selatan, Kota Jayapura, Papua")
					.addTo(map);

				L.marker([-2.588848482752532, 140.7068808891858])
					.bindPopup("<img src='<?= base_url('gambar/Gereja GKI Viadolorosa Tobati.png') ?>'width='200px''>" +
						"<h5>Gereja GKI Viadolorosa Tobati</h5>" +
						"Alamat :CP64+9P5, Tobati, Distrik Jayapura Selatan, Kota Jayapura, Papua")
					.addTo(map);

				L.marker([-2.585931356827367, 140.7119903953819])
					.bindPopup("<img src='<?= base_url('gambar/cafe kk idola.png') ?>'width='200px''>" +
						"<h5>Cafe KK Idola</h5>" +
						"Alamat :CP76+JQ5, Tobati, Distrik Jayapura Selatan, Kota Jayapura, Papua")
					.addTo(map);

				L.marker([-2.5829085082299947, 140.71054114221744])
					.bindPopup("<img src='<?= base_url('gambar/hamadi beach.png') ?>'width='200px''>" +
						"<h5>Hamadi Beach</h5>" +
						"Alamat :CP86+Q68, Jl. Hamadi Pante, Tobati, Distrik Jayapura Selatan, Kota Jayapura, Papua")
					.addTo(map);
            </script>
        </div>
    </div>
</div>
