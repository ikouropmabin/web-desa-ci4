<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>web desa kelompok | <?= $judul ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('back-end') ?>/assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ['<?= base_url('back-end') ?>/assets/css/fonts.css']
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('back-end') ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('back-end') ?>/assets/css/azzara.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<style>
        table.table {
            background-color: transparent !important;
        }
        table.table thead {
            background-color: transparent !important;
        }
        table.table tbody tr {
            background-color: transparent !important;
        }
    </style>
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url('back-end') ?>/assets/css/demo.css">

	<!--   Core JS Files   -->
	<script src="<?= base_url('back-end') ?>/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url('back-end') ?>/assets/js/core/popper.min.js"></script>
	<script src="<?= base_url('back-end') ?>/assets/js/core/bootstrap.min.js"></script>
	

	<!-- jQuery UI -->
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script
		src="<?= base_url('back-end') ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Moment JS -->
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/moment/moment.min.js"></script><!-- DateTimePicker -->
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="<?= base_url('back-end') ?>/assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Azzara JS -->
	<script src="<?= base_url('back-end') ?>/assets/js/ready.min.js"></script>
	<!-- Azzara DEMO methods, don't include it in your project! -->
	<script src="<?= base_url('back-end') ?>/assets/js/setting-demo.js"></script>

	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url('back-end') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet"href="<?= base_url('back-end') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('back-end') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

	<!-- Required Js -->
	<script src="<?= base_url('back-end') ?>/assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url('back-end') ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url('back-end') ?>/assets/js/pcoded.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
		integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
		integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

	<!-- include summernote css/js -->
	<link href="<?= base_url('summernote') ?>/summernote-bs4.min.css" rel="stylesheet">
	<script src="<?= base_url('summernote') ?>/summernote-bs4.min.js"></script>

	<!-- DataTables & Plugins -->
	<script src="<?= base_url('back-end') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/jszip/jszip.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url('back-end') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="blue">
			<!-- Logo Header -->
			<div class="logo-header">

				<a href="index.html" class="logo" style="font-size: 20px; font-weight: bold; color: white;">
					WEB KAMPUNG
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">

						<div class="input-group">

							<h2 style="font-weight: bold; color: white;"> KAMPUNG TOBATI</h2>
						</div>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
								aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
								aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= base_url('foto') ?>/<?= session()->get('foto') ?>" alt="..."
										class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img
												src="<?= base_url('foto') ?>/<?= session()->get('foto') ?>"
												alt="image profile" class="avatar-img rounded"></div>
										<div class="u-text">
											<h4><?= session()->get('nama_user') ?></h4>
											<p class="text-muted">Admin</p>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?= base_url('Auth/Logout') ?>">Keluar</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- End Navbar -->

		<!-- Sider-->
		<div class="sidebar">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url('foto') ?>/<?= session()->get('foto') ?>" alt="..."
								class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= session()->get('nama_user') ?>
									<span
										class="user-level"><?= session()->get('level') == 1 ? 'Admin' : 'User' ?></span>
								</span>
							</a>
						</div>
					</div>

					<ul class="nav">
						<li class="nav-item">
							<a href="<?= base_url('Admin') ?>" class="nav-link">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<div class="dropdown-divider"></div>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Master Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url('Pendidikan') ?>">
											<span class="sub-item">Pendidikan</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('Pekerjaan') ?>">
											<span class="sub-item">Pekerjaan</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('Penghasilan') ?>">
											<span class="sub-item">Penghasilan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fa-solid fa-map-location"></i>
								<p>Peta</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url('Peta') ?>">
											<i class="fa-solid fa-map"></i>
											<p>Peta</p>
										</a>
									</li>
									<li>
										<a href="<?= base_url('PetaDasar') ?>">
											<i class="fa-solid fa-layer-group"></i>
											<p>Peta Dasar</p>
										</a>
									</li>
									<li>
										<a href="<?= base_url('Wilayah') ?>">
											<i class="fa-solid fa-map-pin"></i>
											<p>Wilayah</p>
										</a>
									</li>
									<li>
										<a href="<?= base_url('Penanda') ?>">
											<i class="fa-solid fa-location"></i>
											<p>Penanda</p>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item">
							<a href="<?= base_url('Berita') ?>">
								<i class="fas fa-newspaper"></i>
								<p>Berita</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url('setting') ?>">
								<i class="fa-solid fa-gears"></i>
								<p>Pengaturan</p>
							</a>
						</li>

						<div class="dropdown-divider"></div>
						<li class="nav-item">
							<a href="<?= base_url('Auth/Logout') ?>" class="nav-link">
								<i class="fa-solid fa-person-running"></i>
								<p>Keluar</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php if ($page) {
			echo view($page);
		} ?>

	</div>

</body>

</html>