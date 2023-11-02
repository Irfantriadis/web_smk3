<?php
  include "inc/koneksi.php";
   
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Masjid PHB | Log in</title>
	<link rel="icon" href="dist/img/poltek-removebg-preview.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page"> 
	<div class="login-box">
		<div class="login-logo">
			<img src="dist/img/poltek-removebg-preview.png" width=170px />
			<br>
			<a href="login.php">
				<b>Aplikasi</b> Kas Masjid PHB</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Login System</p>

				<form action="" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="nama_pengguna" placeholder="Nama Pengguna" required>
						<div class="input-group-append">
							<div class="input-group-text">
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Username" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="password1" placeholder="Password" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="email" placeholder="Email" required>
						<div class="input-group-append">
							<div class="input-group-text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block btn-flat" name="btnDaftar" title="Masuk Sistem">
								<b>Daftar</b>
							</button>
						</div>
						<div class="col-md-4">
                        	<a href="login.php">Kembali</a>
                    	</div>
						<!-- <a href="index.php" > ke Halaman Utama</a> -->
				</form>

				</div>
			</div>
		</div>
		<!-- /.login-box -->

		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>
		<!-- Alert -->
		<script src="plugins/alert.js"></script>

</body>

</html>

<?php





if (isset($_POST['btnDaftar'])) {  
	//anti inject sql
	$username  = $_POST['nama_pengguna'];
	$username  = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];


	if ($password1 == $password2)
	{
  
    	// menyimpan username dan password terenkripsi ke database
    	$query = "INSERT INTO tb_pengguna (nama_pengguna,username,password,email) VALUES (
			'".$_POST['nama_pengguna']."',
			'".$_POST['username']."',
			'".$_POST['password1']."',
			'".$_POST['email']."
			')";
    	$hasil = mysqli_query($koneksi, $query);
		mysqli_close($koneksi);
  
    	// menampilkan status pendaftaran
    	if ($hasil) echo "<script>
		Swal.fire({title: 'Pendaftaran Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
		}).then((result) => {if (result.value)
			{window.location = 'login.php';}
		})</script>";
    	else echo "<script>
			Swal.fire({title: 'Username Sudah Tersedia!',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {if (result.value)
			{window.location = 'register.php';}
		})</script>";
  
	} else { 
		echo "<script>
		Swal.fire({title: 'Password Tidak Sama!',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {if (result.value)
			{window.location = 'register.php';}
		})</script>";
		}		
	}
?>