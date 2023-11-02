<?php
include "inc/koneksi.php";
$username = $_POST['username'];

$query = "SELECT * FROM tb_pengguna  WHERE username = '$username'";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$lihatPassword = $data['password'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Masjid PHB | Forgot Password</title>
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
            <a href="index.php"><img src="dist/img/logo (2).png" width=350px /></a>
            <br>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Username:</td>
                                <td><?php echo "$username" ?></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><?php echo "$lihatPassword" ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <!-- <form action="kirimpassword.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <input name="Submit" type="submit" value="Submit" /></td>
                    </div> -->
                <div class="col-md-4">
                    <a href="index.php">Kembali</a>
                </div>
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