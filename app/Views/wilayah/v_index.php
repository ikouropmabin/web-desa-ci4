<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="col-12">
                <div class="card prod-p-card bg-c-secondary">
                    <div class="card-header">
                        <div class="card-title"><i class="fa-solid fa-map-pin"></i> <?= $judul ?></div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Tabel Wilayah</h3>
                                    <div class="card-tools"></div>
                                </div>

                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped bg-light">
                                        <thead class="bg-primary text-white">
                                            <tr class="text-center">
                                                <th width="50px">No</th>
                                                <th>Nama Wilayah</th>
                                                <th>Warna</th>
                                                <th width="100px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($wilayah as $key => $value) { ?> 
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value['nama_wilayah'] ?></td>
                                                    <td style="background-color: <?= $value['warna'] ?> ;"></td>
                                                    <td></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="map" style="width: 100%; height: 800px;"></div>
                        </div>

                        <!-- Link Bootstrap 5 -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
                            rel="stylesheet"
                            integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/SiqE91z68usOkEd76dPcdOd3c7efRVfuI69sv6"
                            crossorigin="anonymous">

                        <link rel="stylesheet"
                            href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

                        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
                            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

                        <!-- Script JS Leaflet -->
                        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

                        <!-- Script JS Bootstrap 5 -->
                        <script
                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-ho+j7jyWK8fNQe+A12W70PbA5vh+O9xr5yJ6KtfF6ynPqCqOdAIOFf92fbk5pXKe"
                            crossorigin="anonymous"></script>

                        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
                        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
                        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

                        <script>
                            // Peta Satelit dari Esri
                            var petaSatelit = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                                attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
                            });

                            // Peta Jalan dari OpenStreetMap
                            var peta2 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            });

                            // Inisialisasi peta dengan default zoom dan center
                            var map = L.map('map', {
                                center: [<?= isset($kampung['coordinat_wilayah']) ? $kampung['coordinat_wilayah'] : '-2.600, 140.700' ?>],
                                zoom: <?= isset($kampung['zoom_view']) ? $kampung['zoom_view'] : '14' ?>,
                                layers: [petaSatelit]
                            });

                            // Control Layer
                            var baseMaps = {
                                "Peta Satelit (Esri)": petaSatelit,
                                "Peta Jalan (OpenStreetMap)": peta2
                            };

                            L.control.layers(baseMaps).addTo(map);

                            <?php foreach ($wilayah as $key => $value) { ?>
                                L.geoJSON(<?= $value['geojson'] ?>, {
                                    fillColor: '<?= $value['warna'] ?>',
                                    fillOpacity: 0.5,
                                })
                                .bindPopup("<b><?= $value['nama_wilayah'] ?></b>")
                                .addTo(map);
                            <?php } ?>
                        </script>

                        <script>
                            $(function () {
                                $("#example1").DataTable({
                                    "responsive": true,
                                    "lengthChange": false,
                                    "autoWidth": false,
                                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

                                $('#example2').DataTable({
                                    "paging": true,
                                    "lengthChange": true,
                                    "searching": true,
                                    "ordering": true,
                                    "info": true,
                                    "autoWidth": false,
                                    "responsive": true,
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
