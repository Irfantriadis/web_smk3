<div class="card card-primary">
  <div class="card-header" style="background-color: #dabc68;">
    <h3 class="card-title"><i class="fa fa-edit"></i> Tambah Data</h3>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-6">
        <Input type="file" id="gambar" name="gambar">
        <p style="color: red;">*direkomendasikan gambar dalam ukuran 1:1 (square)</p>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Waka Sekolah</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Waka Sekolah" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
        </div>
      </div>

    </div>
    <div class="card-footer">
      <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
      <a href="?page=MyApp/data_waka" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
  </form>
</div>


<?php

if (isset($_POST['Simpan'])) {
  //mulai proses simpan data
  $nama_file = $_FILES['gambar']['name'];
  $ukuran_file = $_FILES['gambar']['size'];
  $tipe_file = $_FILES['gambar']['type'];
  $tmp_file = $_FILES['gambar']['tmp_name'];
//   $nama = $_POST['nama']['nama'];
//   $jabatan = $_POST['jabatan']['jabatan'];

  $path = "images/".$nama_file;

  if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg"){ 
      if($ukuran_file <= 1000000){ 

        //memindahkan lokasi gambar dari tempat asal ke dalam folder website
        //memiliki 2 parameter yang harus diisi, yaitu parameter tempat asal gambar dan paramter tempat tujuan gambar
        if(move_uploaded_file($tmp_file, $path)){ 
          //query untuk memasukkan data ke dalam database
          $query = "INSERT INTO waka (nama,jabatan,nama_file,ukuran,type) VALUES(
            '" . $_POST['nama'] . "',
            '" . $_POST['jabatan'] . "',
            '".$nama_file."',
            '".$ukuran_file."',
            '".$tipe_file."')";      
          $sql = mysqli_query($koneksi, $query);
  if ($sql) {
    echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'admin.php?page=MyApp/data_waka';
          }
      })</script>";
  } else {
    echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'admin.php?page=MyApp/add_waka';
          }
      })</script>";
  }
}
}
}
}
//selesai proses simpan data
?>