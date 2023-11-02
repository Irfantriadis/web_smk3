<div class="card card-info">
	<div class="card-header" style="background-color: #dabc68;">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Tentang Sekolah
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
						<th>Sekolah</th>
						<th>Tentang Sekolah</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tentang");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php echo $data['tentang']; ?>
							</td>
							<td>
								<a href="?page=MyApp/add_tentang&kode=<?php echo $data['id']; ?>" title="Ubah" class="btn btn-success btn-sm">
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