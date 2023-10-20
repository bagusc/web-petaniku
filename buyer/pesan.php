<?php

include '../config.php';
                

if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    switch ($select1) {
    case 'benteng':
        $price = 130000;
        $total = $_POST['a1'] * $_POST['a2'] * $price;
        
        break;
    case 'perawatan':  
        $price = 80000;
        $total = $_POST['a1'] * $_POST['a2'] * $price;
        
        break;
    case 'menanam':
        $price = 80000;
        $total = $_POST['a1'] * $_POST['a2'] * $price;
        
        break;
    case 'memanen':
        $price = 7000;
        $total = $_POST['a1'] * $_POST['a2'] * $price;
        
        break;
    default:
        # code...
        break;
}
}



                if(isset($_POST['submit'])){
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




                }
                

 header('location:tarif.php');
?>



