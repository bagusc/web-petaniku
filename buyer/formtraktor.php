<?php
    if(isset($_GET['id_pesan'])){
        $id_pesan    =$_GET['id_pesan'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../config.php";
    $query    =mysqli_query($conn, "SELECT * FROM jasa WHERE id_jasa='$id_pesan'");
    $result    =mysqli_fetch_array($query);
    
    session_start();
 
	if($_SESSION['level']=="buyer"){
        error_reporting(0);
	?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Webpage Title -->
        <title>Webpage Title</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="../assets/css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body>
        
        <!-- Navigation -->
        <div class="navbar">
            <div class="container flex">

                <!-- Image Logo -->
                <a class="logo-image" href="index.html"><img src="../assets/img/logo.png" alt="alternative"></a>

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="logo-text" href="index.html">Name</a> -->

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div> <!-- end of container -->
        </div> <!-- end of navbar -->
        <!-- end of navigation -->


        <?php

include '../config.php';
                

if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    switch ($select1) {
    case 'membajak':
        $price = 65000;
        $bajak = $_POST['rante'];
        $total = $bajak * $price;
        
        break;
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
                $tanggal = $_POST['tanggal'];
                $pekerjaan = $_POST['select1'];   
                $keterangan = $_POST['keterangan'];
                $idpesan = $_POST['idpesan'];
                $idbuyer = $_POST['idbuyer'];
                $idseller = $_POST['idseller'];

                $rand = rand();
                $ekstensi =  array('png','jpg','jpeg','gif');
                $filename = $_FILES['foto']['name'];
                $ukuran = $_FILES['foto']['size'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                 
                if(!in_array($ext,$ekstensi) ) {
                    header("location:index.php?alert=gagal_ekstensi");
                }else{
                    if($ukuran < 1044070){		
                        $xx = $rand.'_'.$filename;
                        move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/'.$rand.'_'.$filename);

                mysqli_query($conn, "INSERT INTO notif (id_notif, id_buyer, id_seller, id_pesan, date, namebuyer, telp, location, locpic, job, status, total) VALUES ('','$idbuyer','$idseller','$idpesan','$tanggal','$nama','$telp','$lokasi','$xx','$pekerjaan','pending','$total')");
                header('location:index.php') ;}}

                }


?>
        

 
        <div id="contact" class="contact bg-gray">
            <div class="container">
            <div class="cards">
                <h2><br>Form Pemesanan</h2>
                <p class="p-heading">Isi form pemesanan secara lengkap dan benar !</p>
                <!-- Contact Form -->
                <form method="post" action="" enctype="multipart/form-data">
                    <table class="form-group">
                        <tr style="height:60px">
                        <td>Nama Lengkap</td>
                        <td>: <input name="nama" type="text" class="form-control-input" ></div>
                        </td>  </tr>
                        <tr style="height:60px">
                            <div class="form-group">
                        <td>Telepon</td>
                        <td>: <input name="telp" type="text" class="form-control-input" ></div>
                        </td></tr>
                        <tr style="height:60px">
                            <td>Lokasi</td>
                            <div class="form-group">
                        <td>: <input name="lokasi" type="text" class="form-control-input" ></div>
                        </td></tr>
                        <tr style="height:60px">
                            <div class="form-group">
                        <td>Bukti lokasi</td>
                        <td>: <input name="foto" type="file" class="form-control-input" ></div>
                        </td> </tr>
                        <tr style="height:60px">
                            <div class="form-group">
                        <td>Tanggal Pelaksanaan</td>
                        <td>: <input name="tanggal" type="date" class="form-control-input" ></div>
                        </td> </tr>
                        <tr style="height:60px">
                            <div class="form-group">
                            <td>Luas Lahan</td>
                        <td>: <input type="text" name="rante" class="form-control-input" placeholder=" . . . . rante"></td></tr>
    <tr style="height:60px">
    <div class="form-group">
    <td>Pekerjaan</td><td>: 
    <select name="select1" class="form-control-input">
        <option value="">Pilih</option>
        <option name="pekerjaan" value="membajak">Membajak Sawah | Rp. 65.000</option>
    </select>
                </td></tr>
                        <tr style="height:100px">
                    <div class="form-group">
                        <td valign="top">Keterangan</td>
                        <td><textarea name="keterangan" class="form-control-textarea" ></textarea>
                    </td></div></tr>

                    <tr  style="height:100px">
                    <div class="form-group">
                        <td colspan="2"><br>
                        <input type="checkbox" required>&nbsp;&nbsp;&nbsp;&nbsp;Saya sudah mengisi dengan benar sesuai dengan<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ketentuan dari Petaniku<br>
                       <br> <input type="checkbox" required>&nbsp;&nbsp;&nbsp;&nbsp;Lahan sawah saya Memiliki genangan air dengan <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ketinggian ± 2.5 cm
                        </td> </tr>

                    <tr style="height:100px">
                    <td></td><td>
                    <div class="form-group">
                        <button type="submit" name="submit" class="form-control-submit-button">Selanjutnya</button>
                    </div></td></tr>
                    <tr>
                        <td><input type="hidden" name="idpesan" value="<?php echo $id_pesan ; ?>"></td>
                        <td><input type="hidden" name="idbuyer" value="<?php echo $_SESSION['id_users'] ; ?>"></td>
                        <td><input type="hidden" name="idseller" value="<?php echo $result['id_users'] ; ?>"></td>
                        <td><input type="hidden" name="idseller" value="<?php echo $result['id_users'] ; ?>"></td>
                    </tr>
                    </table>
                </form>
                </div>
            </div> <!-- end of container -->
        </div>

        <footer>
            <div class="container grid grid-3">
                <div>
                    
                    <!-- Image Logo -->
                    <a class="logo-image" href="index.html"><img src="../assets/img/logo.png" alt="alternative"></a> 
                    
                    </div>  
            <div>
              <ul class="li-space-lg">
              <li><p>Hak Cipta © 2022</p></li>
              </ul>
            </div>
                    <div>
                        <a href="#"><img src="../assets/img/twitter.png" height="40px"></i></a>
                        <a href="#"><img src="../assets/img/facebook.png" height="40px"></i></a>
                        <a href="#"><img src="../assets/img/linkedin.png" height="40px"></i></a>
                        <a href="#"><img src="../assets/img/instagram.png" height="40px"></i></a>
                    </div>
                </div><!-- end of container -->
        </footer> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Back To Top Button -->
        <a id="myBtn" href="#" data-scroll>
            <img src="images/up-arrow.png" alt="alternative">
        </a>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>
<?php
    }
		header("location:../login.php?pesan=gagal");
?>