<!DOCTYPE html>
<html lang="en">
<?php
include("counter.php");
include "inc/koneksi.php";
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>VT SMK NEGERI 3 KOTA TEGAL</title>
    <link rel="icon" type="image/x-icon" href="assets/img/smk3.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <img src="./assets/img/smk3.png" width="40" height="38" alt="">
            <a class="navbar-brand" href="#page-top">&nbsp;&nbsp;SMK NEGERI 3 KOTA TEGAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">VIRTUAL TOUR</h1>
                <?php
					$no = 1;
					$sql = $koneksi->query("select * from tentang");
					while ($data = $sql->fetch_assoc()) {
					?>
                <h2 class="masthead-subheading mb-0"><?php echo $data['nama']; ?></h2>
                <?php
					}
					?>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="./panel.php">Mulai Virtual Tour</a>
                <br>
                <br>
                <h3>
                    Hai!, kamu pengunjung ke <?php echo $kunjungan[0];?> pada website ini.
                </h3>
            </div>
        </div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <!-- <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/01.jpg" alt="..." /></div>
                    </div> -->
                <div class="col-lg-12 order-lg-1">
                    <div class="p-5">
                    <?php
					$no = 1;
					$sql = $koneksi->query("select * from tentang");
					while ($data = $sql->fetch_assoc()) {
					?>
                        <h3 class="display-4" align="center" style="font-size: 2.5vw;"><b>SELAMAT DATANG DI <?php echo $data['nama']; ?></b></h3>
                        <br>
                        <p align="justify" align="center" style="font-size: 1.2vw;"><?php echo $data['tentang']; ?></p>
                        <?php
					}
					?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <?php
					$no = 1;
					$sql = $koneksi->query("select * from foto_kepsek");
					while ($data = $sql->fetch_assoc()) {
					?>
                    <div class="p-5"><img class="img-fluid rounded-circle" src='images/<?php echo $data['nama']; ?>' style="width: 492px; height: 492px;" alt="..." /></div>
                    <?php
					    }
					?>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <?php
					    $no = 1;
					    $sql = $koneksi->query("select * from kepsek");
					    while ($data = $sql->fetch_assoc()) {
					    ?>
                        <h2 class="display-4"><?php echo $data['nama']; ?></h2>
                        <p>Sebagai Kepala Sekolah <?php echo $data['jabatan']; ?></p>
                        <?php
					    }
					    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <?php
                    $kolom = 4;
                    $i=1;
					$sql = $koneksi->query("select * from waka where id");
					while ($data = $sql->fetch_assoc()) {
                        if(($i) % $kolom== 1) {    
                            echo'<tr>';   
                        } 
                        echo '
                        <div class="col-lg-3 order-lg-1">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="images/'.$data['nama_file'].'" style="width: 174px; height: 174px;" alt="..." /></div>
                            <div class="p-6">
                                <h2 align="center" class="display-4" style="font-size: 1vw;"><b>'.$data['nama'].'</b></h2>
                                <p align="center">'.$data['jabatan'].'</p>
                            </div>
                            </div>
                            ';
                            if(($i) % $kolom== 0) {    
                            echo'</tr>';    
                            }
                           $i++;
                           }
					?>
                    <!-- <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/waka2.jpg" alt="..." /></div>
                    <div class="p-6">
                        <h2 align="center" class="display-4" style="font-size: 1vw;"><b>SAMSUDIN, M.PD</b></h2>
                        <p align="center">Waka bagian Kesiswaan</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/waka3.jpg" alt="..." /></div>
                    <div class="p-6">
                        <h2 align="center" class="display-4" style="font-size: 1vw;"><b>MOH. KHAERUS SALIM, S.PD, M.T</b></h2>
                        <p align="center">Waka bagian Humas</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/waka4.jpg" alt="..." /></div>
                    <div class="p-6">
                        <h2 align="center" class="display-4" style="font-size: 1vw;"><b>RAKIM, M.PD</b></h2>
                        <p align="center">Waka bagian Kurikulum</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/waka1.jpg" alt="..." /></div>
                    <div class="p-6">
                        <h2 align="center" class="display-4" style="font-size: 1vw;"><b>RISKANDI, S.PD</b></h2>
                        <p align="center">Waka bagian Sarpas</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-white">
        <div class="container px-5">
        <?php
					$no = 1;
					$sql = $koneksi->query("select * from tentang");
					while ($data = $sql->fetch_assoc()) {
					?>
            <p class="m-0 text-center text-black small">Copyright &copy; <?php echo $data['nama']; ?></p>
            <?php
					}
					?>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>