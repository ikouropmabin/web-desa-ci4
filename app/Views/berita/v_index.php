<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="row ">
				<div class="col-12">
					<div class="card prod-p-card bg-c-secondary">

						<div class="card-header">
							<div class="card-title"><i class="fa fa-table"></i> Data <?= $judul ?></div>
						</div>
						<div class="card-body">
							<?php
							if (session()->get('insert')) {
								echo '<div class="alert alert-success">';
								echo session()->get('insert');
								echo '</div>';
							}

							if (session()->get('update')) {
								echo '<div class="alert alert-primary">';
								echo session()->get('update');
								echo '</div>';
							}

							if (session()->get('delete')) {
								echo '<div class="alert alert-danger">';
								echo session()->get('delete');
								echo '</div>';
							}
							?>
							<!-- Button trigger modal -->

							<a href="<?= base_url('Berita/Input') ?>" type="button" class="btn btn-primary btn-sm">
								<i class="fas fa-plus"></i> Tambah
							</a>
							<br>
							<br>
							<table id="basic-datatables"
								class="table table-sm table-striped table-hover table-bordered-bd-primary table-head-bg-primary mt-4">
								<thead>
									<tr class="text-center">
										<th width="50px">#</th>
										<th scope="col">Judul Berita</th>
										<th scope="col">Gambar</th>
										<th scope="col">Tanggal</th>
										<th width="100px">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($berita as $key => $p) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td class="text-center"><?= $p['judul_berita'] ?></td>
											<td class="text-center"><img
													src="<?= base_url('gambar/' . $p['gambar_berita']) ?>" width="250px">
											</td>
											<td><?= $p['tgl_berita'] ?> 	<?= $p['jam_berita'] ?></td>
											<td class="text-center">
												<a href="#" class="btn btn-warning btn-xs"><i
														class="fa fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function () {
		$('#basic-datatables').DataTable({
		});

		$('#multi-filter-select').DataTable({
			"pageLength": 5,
			initComplete: function () {
				this.api().columns().every(function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo($(column.footer()).empty())
						.on('change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search(val ? '^' + val + '$' : '', true, false)
								.draw();
						});

					column.data().unique().sort().each(function (d, j) {
						select.append('<option value="' + d + '">' + d + '</option>')
					});
				});
			}
		});

	});    
</script>