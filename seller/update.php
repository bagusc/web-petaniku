<?php 


// koneksi database
include '../config.php';


// menangkap data yang di kirim dari form
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $nim = $_POST['nim'];
                $alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($conn,"UPDATE jasa set nama_kelompok='$nama', jumlah_kelompok='$nim', keterangan='$alamat' where id_jasa='$id'");
 
header('Location: tambahjasa.php');

?>