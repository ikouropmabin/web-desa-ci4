<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="col-12">
                <div class="card prod-p-card bg-c-secondary">
                    <div class="card-header">
                        <div class="card-title"><i class="fa-solid fa-layer-group"></i> <?= $judul ?></div>
                    </div>
                    <div class="card-body">
                        <?php echo form_open('PetaDasar/UpdatePetaDasar'); ?>

                        <?php
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fas fa-check"></i>';
                            echo session()->getFlashdata('pesan');
                            echo '</h4></div>';
                        }
                        ?>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Kampung</label>
                                    <input name="nama_kampung"
                                        value="<?= isset($kampung['nama_kampung']) ? $kampung['nama_kampung'] : '' ?>"
                                        class="form-control" placeholder="Nama Kampung" required>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Coordinat wilayah</label>
                                    <input name="coordinat_wilayah"
                                        value="<?= isset($kampung['coordinat_wilayah']) ? $kampung['coordinat_wilayah'] : '' ?>"
                                        class="form-control" placeholder="Coordinat wilayah" required>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Zoom View</label>
                                    <input type="number"
                                        value="<?= isset($kampung['zoom_view']) ? $kampung['zoom_view'] : '' ?>"
                                        name="zoom_view" min="0" max="20" class="form-control" placeholder="Zoom view"
                                        required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <br>
                        <br>

                        <div class="col-md-12">
                            <div id="map" style="width: 100%; height:800px;"></div>
                        </div>

                        <!-- Link CSS Leaflet -->
                        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
                            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

                        <!-- Script JS Leaflet -->
                        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

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
                                center: [<?= isset($kampung['coordinat_wilayah']) ? $kampung['coordinat_wilayah'] : '' ?>],
                                zoom: <?= isset($kampung['zoom_view']) ? $kampung['zoom_view'] : '' ?>,
                                layers: [petaSatelit]
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

                            const layerControl = L.control.layers(baseMaps, null, {
                                collapsed: false
                            }).addTo(map);
                        </script>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>