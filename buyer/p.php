<?php
include '../config.php';

                if(isset($_POST['pesan'])){
                    $nama = $_POST['nama'];
                    $telp = $_POST['telp'];
                    $lokasi = $_POST['lokasi'];
                    $buktilokasi = $_POST['buktilokasi'];
                    $tanggal = $_POST['tanggal'];
                    $pekerjaan = $_POST['select1'];   
                    $keterangan = $_POST['keterangan'];
                    $idpesan = $_POST['idpesan'];
                    $idbuyer = $_POST['idbuyer'];
                    $idseller = $_POST['idseller'];
    
                    
                    mysqli_query($conn, "INSERT INTO notif (id_notif, id_buyer, id_seller, id_pesan, date, namebuyer, telp, location, locpic, job, status, total) VALUES ('','$idbuyer','$idseller','$idpesan','$tanggal','$nama','$telp','$lokasi','$buktilokasi','$pekerjaan','pending','$total')");
                header('location:index.php') ;   }
                
?>