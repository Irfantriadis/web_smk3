<?php
include("counter.php");
include "inc/koneksi.php";
?>
<div class="row">
	<!-- <div class="col-lg-8 col-8">
		<div class="card text-dark bg-success mb-3">
			<div class="row g-0">
				<div class="col-md-8">
					<div class="card-header bg-transparent border-dark">SMK 3 Tegal
					</div>
					<div class="card-footer bg-transparent border-dark">Alamat
						<p>Jl. Gajah Mada No.72, Pekauman, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52125</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box" style="background-color: #ead26a;">
			<div class="inner">
				<h5>
				<?php echo $kunjungan[0];?> Pengunjung
				</h5>

				<p>Jumlah Pengunjung</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="?page=rekap_ks" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<!-- <div class="col-lg-4 col-6">
		<div class="small-box bg-warning">
			<div class="inner">
				<h5>
					<?php echo $jml; ?>
				</h5>

				<p>Data Guru</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div> -->