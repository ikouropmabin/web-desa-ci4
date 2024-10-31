<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="col-12">
				<div class="card prod-p-card bg-c-secondary">
					<div class="card-header">
					<div class="card-title"><i class="fa solid fa-map"></i> <?= $judul ?></div>
				</div>
			</div>
		</div>
		<div id="map" style="width: 100%; height:70vh;"></div>	
			<script>
				const map = L.map('map').setView([-2.584592458166517, 140.70850581125057], 14);

				const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
				maxZoom: 19,
				attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
				}).addTo(map);
			</script>
		</div>
	</div>
</div>
	
