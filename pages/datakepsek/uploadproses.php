<?php
    //mengambil data gambar dan menyimpannya kedalam variabel
    include "inc/koneksi.php";

    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    $path = "images/".$nama_file;

    if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg"){ 
        if($ukuran_file <= 1000000){ 

          //memindahkan lokasi gambar dari tempat asal ke dalam folder website
          //memiliki 2 parameter yang harus diisi, yaitu parameter tempat asal gambar dan paramter tempat tujuan gambar
          if(move_uploaded_file($tmp_file, $path)){ 
            //query untuk memasukkan data ke dalam database
            $query = "INSERT INTO foto_kepsek (nama,ukuran,tipe) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."')";      
            $sql = mysqli_query($koneksi, $query);
            //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
            if($sql){ 
              echo "<script>
                Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'admin.php?page=MyApp/data_kepsek';
                    }
                })</script>"; 
            }else{
              //jika gagal insert data ke database maka akan memunculkan pesan seperti di bawah ini
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              //link menuju halaman insert gambar
              echo "<br><a href='admin.php?page=MyApp/data_kepsek'>Kembali Ke Form</a>";
            }
          }else{
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='admin.php?page=MyApp/data_kepsek'>Kembali Ke Form</a>";
          }
        }else{
          //jika ukuran gambar lebih besar dari 1MB maka akan memunculkan pesan seperti di bawah ini
          echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
          echo "<br><a href='admin.php?page=MyApp/data_kepsek'>Kembali Ke Form</a>";
        }
      }else{
        //jika tipe gambar yang diupload bukan jpg atau png maka akan memunculkan pesan seperti di bawah ini
        echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
        echo "<br><a href='admin.php?page=MyApp/data_kepsek'>Kembali Ke Form</a>";
      }
?>