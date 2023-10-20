<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
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
    <ul >
        <li><a href="index.php">Home</a></li>
        <li><a href="add.php">Tambah Berita</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
</div> <!-- end of container -->
</div> <!-- end of navbar -->
<!-- end of navigation -->

<?php
    include '../config.php';
    $idusers = $_SESSION['id_users'];
        if(isset($_POST['submit'])){
                $judul = $_POST['judul'];
                $isi = $_POST['isi'];
                $sumber = $_POST['sumber'];
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
                        mysqli_query($conn, "INSERT INTO post (id_post, gambar, id_users, judul, sumber, isi) VALUES ('','$xx','$idusers','$judul','$sumber','$isi')");
                        header("location:index.php?alert=berhasil");
                    }else{
                        header("location:index.php?alert=gagak_ukuran");
                    }
                }
                header('location:index.php') ;

                }


?>

        <br><br><br>
        <div id="contact" class="contact bg-gray">
        <center><H3>Tambah Berita</H3><br>
        <form action="" method="post" enctype="multipart/form-data">Judul Berita
            <input style="height:30px; padding:15px; width:635px; margin:15px 0;" type="text" name="judul">Sumber Berita
            <input style="height:30px; padding:15px; width:635px; margin:15px 0;" type="text" name="sumber">Isi Berita
            <textarea style="padding:15px" name="isi" cols="80" rows="20"></textarea>
            <input type="file" name="foto"> <br><br>
            <input type="submit" name="submit" value="Simpan">
            <br><br><br><br>
        
        </form>
</div>

</div>
        
        <!-- Footer -->
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
                </div>  <!-- end of container -->
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