<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
        <!-- Webpage Title -->
        <title>Webpage Title</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="../css/fontawesome-all.min.css" rel="stylesheet">
        <link href="../assets/css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body>
        
        <!-- Navigation -->
        <div class="navbar">
            <div class="container flex">

                <!-- Image Logo -->
                <a class="logo-image" href="index.php"><img src="assets/img/logo.png" alt="alternative"></a>

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="logo-text" href="index.html">Name</a> -->

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menjadi-penyedia">Menjadi Peyedia</a></li>
                        <li><a href="login.php">Masuk</a></li>
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
    case 'benteng':
        $price = 130000;
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $total = $a1 * $a2 * $price;
        
        break;
    case 'perawatan':  
        $price = 80000;        
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $total = $a1 * $a2 * $price;
        
        break;
    case 'menanam':
        $price = 80000;
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $total = $a1 * $a2 * $price;
        
        break;
    case 'memanen':
        $price = 7000;
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $total = $a1 * $a2 * $price; 
        
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
                mysqli_query($conn, "INSERT INTO notif (id_notif, id_buyer, id_seller, id_pesan, date, namebuyer, telp, location, locpic, job, status, total) VALUES ('','$idbuyer','$idseller','$idpesan','$tanggal','$nama','$telp','$lokasi','$buktilokasi','$pekerjaan','pending','$total')");
                header('location:index.php') ;

                }


?>

        <div id="contact" class="contact bg-gray">
            <div class="container"><br>
            <div class="cards"><br><br>
                <h2>Tarif Pemesanan</h2>
                <br><br>
                    
                <form method="post" action="p.php">
                    <table class="form-group">
                        <tr style="height:60px">
                        <td>Nama Lengkap</td> 
                        <td>: <input name="nama" type="text" class="form-control-input" value="<?php echo $_POST['nama'] ;?>" disabled></div>
                        </td>  </tr>
                        <tr style="height:60px">
                            <div class="form-group">
                        <td>Telepon</td>
                        <td>: <input name="telp" type="text" class="form-control-input" value="<?php echo $_POST['telp'] ;?>" disabled></div>
                        </td></tr>
                        <tr style="height:60px">
                            <td>Lokasi</td>
                            <div class="form-group">
                        <td>: <input name="lokasi" type="text" class="form-control-input" value="<?php echo $_POST['lokasi'] ;?>" disabled></div>
                        </td></tr>
                        <tr style="height:60px">
                            <div class="form-group">
                        <td>Bukti lokasi</td>
                        <td>: <input name="buktilokasi" type="file" class="form-control-input" value="<?php echo $_POST['buktilokasi'] ;?>" disabled></div>
                        </td> </tr>
                        <tr style="height:60px">
                            <div class="form-group">
                        <td>Tanggal Pelaksanaan</td>
                        <td>: <input name="tanggal" type="date" class="form-control-input" value="<?php echo $_POST['tanggal'] ;?>" disabled></div>
                        </td> </tr>
                        <tr style="height:60px">
                            <div class="form-group">
                            <td>Pekerjaan</td>
                        <td>: 
                            <input class="form-control-input" type="text" value="<?php echo $_POST['select1'] ;?>" disabled>
                            <input type="text" class="form-control-input" name="a1"value="<?php echo $_POST['a1'] ;?>" disabled><br>
                            <input type="text" class="form-control-input" name="a2" value="<?php echo $_POST['a2'] ;?>" disabled><br>
                            <input type="text" class="form-control-input" name="total" value="<?php echo $total ;?>" disabled><br>
                </td></tr>
                        <tr style="height:100px">
                    <div class="form-group">
                        <td valign="top">Keterangan</td>
                        <td>: <textarea name="keterangan" class="form-control-textarea" disabled> <?php echo $_POST['keterangan'] ;?> </textarea>
                    </td></div></tr>


                    <tr style="height:100px">
                    <td></td><td>
                    <div class="form-group">
                        <input type="submit" name="pesan" class="form-control-submit-button">Pesan</input>
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
        </div> <!-- end of contact -->
        <!-- end of contact -->

        
        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
                    <a class="logo-image" href="index.html"><img src="assets/img/logo.png" alt="alternative"></a> 
                    
                </div>  
        <div>
          <ul class="li-space-lg">
          <li><p>Copyright © 2022</p></li>
          </ul>
        </div>
                <div>
                    <a href="#"><img src="assets/img/twitter.png" height="40px"></i></a>
                    <a href="#"><img src="assets/img/facebook.png" height="40px"></i></a>
                    <a href="#"><img src="assets/img/linkedin.png" height="40px"></i></a>
                    <a href="#"><img src="assets/img/instagram.png" height="40px"></i></a>
                </div>
            </div> <!-- end of container -->
        </footer> <!-- end of footer -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>