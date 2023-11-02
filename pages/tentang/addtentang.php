<?php

if (isset($_GET['kode'])) {
  $sql_cek = "SELECT * FROM tentang WHERE id='" . $_GET['kode'] . "'";
  $query_cek = mysqli_query($koneksi, $sql_cek);
  $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-success">
  <div class="card-header" style="background-color: #dabc68;">
    <h3 class="card-title"><i class="fa fa-edit"></i> Ubah Data</h3>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">

      <input type='hidden' class="form-control" name="id" value="<?php echo $data_cek['id']; ?>" readonly />

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Sekolah</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>" />
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tentang Sekolah</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tentang" name="tentang" value="<?php echo $data_cek['tentang']; ?>" />
        </div>
      </div>

      <div class="card-footer">
        <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
        <a href="?page=MyApp/data_kepsek" title="Kembali" class="btn btn-secondary">Batal</a>
      </div>
  </form>
</div>



<?php

if (isset($_POST['Ubah'])) {
  $sql_ubah = "UPDATE tentang SET
        nama='" . $_POST['nama'] . "',
        tentang='" . $_POST['tentang'] . "'
        WHERE id='" . $_POST['id'] . "'";
  $query_ubah = mysqli_query($koneksi, $sql_ubah);
  mysqli_close($koneksi);

  if ($query_ubah) {
    echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'admin.php?page=MyApp/data_tentang';
        }
      })</script>";
  } else {
    echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'admin.php?page=MyApp/add_tentang';
        }
      })</script>";
  }
}
?>