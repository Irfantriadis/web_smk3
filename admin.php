<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: login");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
}
// session_start();
// if($_SESSION['status']!="login"){
// 	header("location:../index.php?pesan=belum_login");
// }

//KONEKSI DB
include "inc/koneksi.php";
//FUNGSI RUPIAH
include "inc/rupiah.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VT SMK 3 Tegal</title>
	<link rel="icon" href="./assets/img/smk3.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-default navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars"></i>
					</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="?page=admin" class="nav-link">Home</a>
				</li>
				<!-- <li class="nav-item d-none d-sm-inline-block">
					<a href="?page=rekap_ks" class="nav-link">Rekap Komprehensif</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="?page=rekap_km" class="nav-link">Rekap Kas Masjid</a>
				</li> -->
			</ul>

			<!-- SEARCH FORM
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form> -->

			<!-- Right navbar links -->

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="?page=admin" class="brand-link">
				<img src="./assets/img/smk3.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text font-weight-light"> SMK 3 Tegal</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="?page=admin" class="d-block">
							<?php echo $data_nama; ?>
						</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="?page=admin" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
									<span class="badge badge-primary right">1 Info</span>
								</p>
							</a>
						</li>
						<li class="nav-header">Edit Data</li>
						<li class="nav-item">
							<a href="?page=MyApp/data_kepsek" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Data Kepala Sekolah
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=MyApp/data_waka" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Data Waka Sekolah
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=MyApp/data_tentang" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Tentang
									<span class="badge badge-warning right">Edit</span>
								</p>
							</a>
						</li>

						<?php

						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php
					if (isset($_GET['page'])) {
						$hal = $_GET['page'];

						switch ($hal) {
								//Klik Halaman Home Pengguna
								// case 'MyApp/admin':
								// 	include "	home/admin.php";
								// 	break;
								// case 'bendahara':
								// 	include "home/bendahara.php";
								// 	break;

								//Pengguna
							case 'MyApp/data_pengguna':
								include "admin/pengguna/data_pengguna.php";
								break;
								// case 'MyApp/data_struktur':
								// 	include "admin/pengguna/data_struktur.php";
								// 	break;
							case 'MyApp/add_kepsek':
								include "./pages/datakepsek/add.php";
								break;
								case 'MyApp/uploadproses':
									include "./pages/datakepsek/uploadproses.php";
									break;
									case 'MyApp/del_gam':
										include "./pages/datakepsek/del_gambar.php";
										break;
								case 'MyApp/add_proses':
									include "./pages/datakepsek/add_proses.php";
									break;
									case 'MyApp/add_tentang':
										include "./pages/tentang/addtentang.php";
										break;
										case 'MyApp/data_tentang':
											include "./pages/tentang/datatentang.php";
											break;
							case 'MyApp/add_masjid':
								include "admin/pengguna/add_masjid.php";
								break;
								// case 'MyApp/add_struktur':
								// 	include "admin/pengguna/add_struktur.php";
								// 	break;
							case 'MyApp/edit_pengguna':
								include "admin/pengguna/edit_pengguna.php";
								break;
							case 'MyApp/edit_masjid':
								include "admin/pengguna/edit_masjid.php";
								break;
								// case 'MyApp/edit_struktur':
								// 	include "admin/pengguna/edit_struktur.php";
								// 	break;
							case 'MyApp/del_pengguna':
								include "admin/pengguna/del_pengguna.php";
								break;
							case 'MyApp/del_masjid':
								include "admin/pengguna/del_masjid.php";
								break;
								// case 'MyApp/del_struktur':
								// 	include "admin/pengguna/del_struktur.php";
								// 	break;
							case 'MyApp/data_kepsek':
								include "./pages/datakepsek/data.php";
								break;
								case 'MyApp/data_waka':
									include "./pages/datawaka/data_waka.php";
									break;case 'MyApp/add_waka':
										include "./pages/datawaka/add_waka.php";
										break;
										case 'MyApp/del_waka':
											include "./pages/datawaka/del_waka.php";
											break;
											case 'MyApp/panel':
												include "./panel.php";
												break;
								//Masjid in
								// case 'i_data_km':
								// 	include "bendahara/masjid/in/data_kas.php";
								// 	break;
								// case 'i_add_km':
								// 	include "bendahara/masjid/in/add_kas.php";
								// 	break;
								// case 'i_edit_km':
								// 	include "bendahara/masjid/in/edit_kas.php";
								// 	break;
								// case 'i_del_km':
								// 	include "bendahara/masjid/in/del_kas.php";
								// 	break;

								// 	//Masjid out
								// case 'o_data_km':
								// 	include "bendahara/masjid/out/data_kas.php";
								// 	break;
								// case 'o_add_km':
								// 	include "bendahara/masjid/out/add_kas.php";
								// 	break;
								// case 'o_edit_km':
								// 	include "bendahara/masjid/out/edit_kas.php";
								// 	break;
								// case 'o_del_km':
								// 	include "bendahara/masjid/out/del_kas.php";
								// 	break;

								// case 'rekap_km':
								// 	include "bendahara/masjid/rekap_kas.php";
								// 	break;

								// 	//sos in
								// case 'i_data_ks':
								// 	include "bendahara/sosial/in/data_kas.php";
								// 	break;
								// case 'i_add_ks':
								// 	include "bendahara/sosial/in/add_kas.php";
								// 	break;
								// case 'i_edit_ks':
								// 	include "bendahara/sosial/in/edit_kas.php";
								// 	break;
								// case 'i_del_ks':
								// 	include "bendahara/sosial/in/del_kas.php";
								// 	break;

								// 	//sos out
								// case 'o_data_ks':
								// 	include "bendahara/sosial/out/data_kas.php";
								// 	break;
								// case 'o_add_ks':
								// 	include "bendahara/sosial/out/add_kas.php";
								// 	break;
								// case 'o_edit_ks':
								// 	include "bendahara/sosial/out/edit_kas.php";
								// 	break;
								// case 'o_del_ks':
								// 	include "bendahara/sosial/out/del_kas.php";
								// 	break;

								// case 'rekap_ks':
								// 	include "bendahara/sosial/rekap_kas.php";
								// 	break;

								// 	//lap kas mas
								// case 'lap_masjid':
								// 	include "bendahara/laporan/lap_mas.php";
								// 	break;
								// case 'lap_sosial':
								// 	include "bendahara/laporan/lap_sos.php";
								// 	break;
								// case 'lap_seluang':
								// 	include "bendahara/laporan/lap_seluang.php";
								// 	break;
								// case 'lap_aruskas':
								// 	include "bendahara/laporan/lap_aruskas.php";
								// 	break;
								// case 'lap_posisikeuangan':
								// 	include "bendahara/laporan/lap_posisikeuangan.php";
								// 	break;
								// case 'catatan':
								// 	include "bendahara/catatan/catatan.php";
								// 	break;
								// case 'edit_catatan':
								// 	include "bendahara/catatan/edit_catatan.php";
								// 	break;
								// case 'del_catatan':
								// 	include "bendahara/catatan/del_catatan.php";
								// 	break;
								// case 'add_catatan':
								// 	include "bendahara/catatan/add_catatan.php";
								// 	break;
								// case 'cetak_catatan':
								// 	include "bendahara/catatan/cetak_catatan.php";
								// 	break;
								// case 'edit_operasi':
								// 	include "bendahara/aruskas/operasi/edit_operasi.php";
								// 	break;
								// case 'del_operasi':
								// 	include "bendahara/aruskas/operasi/del_operasi.php";
								// 	break;
								// case 'add_m_operasi':
								// 	include "bendahara/aruskas/operasi/add_m_operasi.php";
								// 	break;
								// case 'add_k_operasi':
								// 	include "bendahara/aruskas/operasi/add_k_operasi.php";
								// 	break;
								// case 'data_operasi':
								// 	include "bendahara/aruskas/operasi/data_operasi.php";
								// 	break;
								// case 'edit_inv':
								// 	include "bendahara/aruskas/investasi/";
								// 	break;
								// case 'del_inv':
								// 	include "bendahara/aruskas/investasi/del_inv.php";
								// 	break;
								// case 'add_m_inv':
								// 	include "bendahara/aruskas/investasi/add_m_inv.php";
								// 	break;
								// case 'add_k_inv':
								// 	include "bendahara/aruskas/investasi/add_k_inv.php";
								// 	break;
								// case 'data_inv':
								// 	include "bendahara/aruskas/investasi/data_inv.php";
								// 	break;
								// case 'edit_pen':
								// 	include "bendahara/aruskas/investasi/";
								// 	break;
								// case 'del_pen':
								// 	include "bendahara/aruskas/pendanaan/del_pen.php";
								// 	break;
								// case 'add_m_pen':
								// 	include "bendahara/aruskas/pendanaan/add_m_pen.php";
								// 	break;
								// case 'add_k_pen':
								// 	include "bendahara/aruskas/pendanaan/add_k_pen.php";
								// 	break;
								// case 'data_pen':
								// 	include "bendahara/aruskas/pendanaan/data_pen.php";
								// 	break;
								// case 'del_neto':
								// 	include "bendahara/asetneto/del_neto.php";
								// 	break;
								// case 'add_m_neto':
								// 	include "bendahara/asetneto/add_m_neto.php";
								// 	break;
								// case 'add_k_neto':
								// 	include "bendahara/asetneto/add_k_neto.php";
								// 	break;
								// case 'data_neto':
								// 	include "bendahara/asetneto/data_neto.php";
								// 	break;
								// case 'upload':
								// 	include "bendahara/posisi_keuangan/upload.php";
								// 	break;
								// case 'data_pos':
								// 	include "bendahara/posisi_keuangan/data_pos.php";
								// 	break;
								// case 'rekap_aruskas':
								// 	include "bendahara/aruskas/rekap_aruskas.php";
								// 	break;
								// case 'del_lia':
								// 	include "bendahara/liabilitas/del_lia.php";
								// 	break;
								// case 'add_lia':
								// 	include "bendahara/liabilitas/add_lia.php";
								// 	break;
								// case 'data_lia':
								// 	include "bendahara/liabilitas/data_lia.php";
								// 	break;
							case 'admin':
								include "home/admin.php";
								break;



								//default
							default:
								echo "<center><h1> ERROR !</h1></center>";
								break;
						}
					}
					?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<?php
					$no = 1;
					$sql = $koneksi->query("select * from tentang");
					while ($data = $sql->fetch_assoc()) {
					?>
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
			<?php echo $data['nama']; ?>
			</div>
			Copyright &copy;
			<a target="_blank" href="">
				<strong> <?php echo $data['nama']; ?> </strong>
			</a>
			All rights reserved.
		</footer>
		<?php
					}
					?>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>