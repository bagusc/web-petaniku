<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:../login.php?pesan=gagal");
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


        <style>
.anjay {
  display: inline-block;
  width: auto;
  height: auto;
  padding: 0 30px;
  border: 0px solid blue;    
  margin: 5px;
  margin-top: 100px;
  background-color: yellow; 

            }
        </style>
    </head>
    <body>
        
        <!-- Navigation -->
        <div class="navbar">
            <div class="navbar-black">
            <div class="container flex">

                <!-- Image Logo -->
                <a class="logo-image" href="index.html"><img src="../assets/img/logo.png" alt="alternative"></a>
                
            
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div> 
            </div><!-- end of container -->
        </div> <!-- end of navbar -->
        <!-- end of navigation -->
 
        <div id="benefits" class="benefits bg-gray">
            <div class="container grid">

            <?php
        
        include '../config.php';
    
    $id = $_GET['id'];
        
    $data = mysqli_query($conn,"select * from post where id_post= '$id'");
    while($d = mysqli_fetch_array($data)){
        ?>

                <div class="image-container">
                <img src="../assets/img/<?php echo $d['gambar'] ?>" width="100%" height="100%">
                <br><br><h3 style="width:100%;"><?=$d['judul']?></h3>
                <p style="line-height: 30px; margin-left:0%; width:100%; color:blue;">sumber : <?=$d['sumber']?></p><br>
                <p style="line-height: 30px; margin-left:0%; width:100%;"><?=$d['isi']?></p>
        
<?php
    }
    ?>
            </div>
                <div class="text-container">
                <div class="container">
                
            </div> <!-- end of container -->
            </div></div>
        </div> <!-- end of benefits -->
        



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