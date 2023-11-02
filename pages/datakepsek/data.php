<div class="card card-info">
	<div class="card-header" style="background-color: #dabc68;">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kepala Sekolah
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<!-- <a href="?page=MyApp/add_masjid" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a> -->
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama Kepala Sekolah</th>
						<th>Sekolah</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from kepsek");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php echo $data['jabatan']; ?>
							</td>
							<td>
								<a href="?page=MyApp/add_kepsek&kode=<?php echo $data['id']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i>
								</a>
								<!-- <a href="?page=MyApp/del_masjid&kode=<?php echo $data['id']; ?>"
							 onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
			  				</a> -->
							</td>
						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
</div>

<br>


<!-- /.card-body -->
<div class="card card-info">
	<div class="card-header" style="background-color: #dabc68;">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kepala Sekolah
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<form method="post" enctype="multipart/form-data" action="?page=MyApp/uploadproses">
					<Input type="file" name="gambar">
					<input type="submit" value="upload">
				</form>
				<p style="color: red;">hapus gambar yang sudah ada sebelum upload gambar baru</p>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Gambar</th>
						<th>Nama File</th>
						<th>Ukuran File</th>
						<th>Tipe File</th>
						<th>Hapus</th>

					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from foto_kepsek");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<img src='images/<?php echo $data['nama']; ?>' width='100' height='100'>
							</td>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php echo $data['ukuran']; ?>
							</td>
							<td>
								<?php echo $data['tipe']; ?>
							</td>
							<td>
								<!-- <a href="?page=edit_operasi&kode=<?php echo $data['id']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a> -->
								<a href="?page=MyApp/del_gam&kode=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
									</>
							</td>
						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->