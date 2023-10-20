<?php
    if(isset($_GET['id_notif'])){
        $id_notif    =$_GET['id_notif'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "../config.php";
    $query    =mysqli_query($conn, "SELECT * FROM notif WHERE id_notif='$id_notif'");
    $result    =mysqli_fetch_array($query);
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
                <a class="logo-image" href="index.php"><img src="../assets/img/logo.png" alt="alternative"></a>

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="logo-text" href="index.html">Name</a> -->

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="tambahjasa.php">Tambah Jasa</a></li>
                        <li><a href="logout.php">Logout</a></li>
                                        </ul>
                </nav>
            </div> <!-- end of container -->
        </div> <!-- end of navbar -->
        <!-- end of navigation -->

    

        <div id="contact" class="contact bg-gray">
            <div class="container"><br>
            <div class="cards"><br><br>
                <h2>Tarif Pemesanan</h2>
                <br><br>
                    <form>
                    <table>
                        <tr valign="top" alig><th><div class="form-group">Nama pemesan</th><td>: <?php echo $result['namebuyer']; ?></td></tr>
                        <tr valign="top"><th><div class="form-group">Pelaksanaan</th><td>: <?php echo $result['date']; ?></td></tr>
                        <tr valign="top"><th><div class="form-group">Telepon</th><td>: <?php echo $result['telp']; ?></td></tr>
                        <tr valign="top"><th><div class="form-group">Lokasi</th><td>: <?php echo $result['location']; ?></td></tr>
                        <tr valign="top"><th><div class="form-group">Pekerjaan</th><td>: <?php echo $result['job']; ?></td></tr>
                        <tr valign="top"><th><div class="form-group">Total biaya</th><td>: <?php echo $result['total']; ?></td></tr>
                        <tr valign="top"><th><div class="form-group">Lokasi</th><td><img src="../assets/img/<?php echo $result['locpic'] ?>" width="100%" height="100%"></td></tr>
                        <tr><th  colspan="2"><br><br><div class="form-group">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="text-align:center; padding-top: 25px; text-decoration:none;" class="form-control-submit-button">Kembali</a>
                    </div></th></tr></table>
                </form>
            </div>
            </div> <!-- end of container -->
        </div> <!-- end of contact -->
        <!-- end of contact -->

        
        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
                    <a class="logo-image" href="index.html"><img src="../assets/img/logo.png" alt="alternative"></a> 
                    
                </div>  
        <div>
          <ul class="li-space-lg">
          <li><p>Copyright © 2022</p></li>
          </ul>
        </div>
                <div>
                    <a href="#"><img src="../assets/img/twitter.png" height="40px"></i></a>
                    <a href="#"><img src="../assets/img/facebook.png" height="40px"></i></a>
                    <a href="#"><img src="../assets/img/linkedin.png" height="40px"></i></a>
                    <a href="#"><img src="../assets/img/instagram.png" height="40px"></i></a>
                </div>
            </div> <!-- end of container -->
        </footer> <!-- end of footer -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>