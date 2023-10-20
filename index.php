<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Webpage Title -->
        <title>Beranda</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
        <style>

.box {
    height: 220px;
    width: 850px;
    margin: 20px;
    border: 1px solid #ccc;
  }
  
  .top {
    box-shadow: 0 -5px 5px -5px #333;
  }
  
  .right {
    box-shadow: 5px 0 5px -5px #333;
  }
  
  .bottom {
    box-shadow: 0 5px 5px -5px #333;
  }
  
  .left {
    box-shadow: -5px 0 5px -5px #333;
  }
  
  .all {
    box-shadow: 0 0 5px #333;
  }

  </style>

    </head>
    <body>
        
        <!-- Navigation -->
        <div class="navbar">
            <div class="container flex">

                <!-- Image Logo -->
                <a class="logo-image" href="index.html"><img src="assets/img/logo.png" alt="alternative"></a>

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="logo-text" href="index.html">Name</a> -->

                <nav>
                    <ul >
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#berita">Berita</a></li>
                        <li><a href="Bantuan.php">Bantuan</a></li>
                        <li><a href="signup.php">Daftar</a></li>
                        <li><a href="login.php">Masuk</a></li>
                    </ul>
                </nav>
            </div> <!-- end of container -->
        </div> <!-- end of navbar -->
        <!-- end of navigation -->

        
        <!-- Header -->
        <header>
            <div class="container">
                <div class="text-container">
                    <h1 class="h1-large">Tempat layanan jasa pertanian</h1>
                    <a class="btn-outline-lg" href="buyer/buruhtani.php">Jasa Buruh Tani</a>
                    <a class="btn-outline-lg" href="buyer/traktor.php">Jasa Traktor</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <div class="container" width="80%">
                    
                        <br><br><br>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;Berita Terkini</h3>
                        <?php 
                        
                include 'config.php';
                $no = 1;
                $data = mysqli_query($conn,"select * from post");
                while($d = mysqli_fetch_array($data)){
                    $isi = $d['isi'];
                    ?>
                <div class="box all"><table><tr>
                    <td><img src="assets/img/<?php echo $d['gambar'] ?>" width="800px" height="200px"></td>
                        <td style=" padding-bottom: 2px; padding-left: 15px;" align="left"><b style="font-size:20px;" ><?php echo $d['judul'];  ?></b>
                        <br style="font-size:15px;"><?php echo substr($isi, 0, 300);  ?><br>
                        <a style="text-decoration: none; color: red;" href="baca.php?id=<?=$d['id_post']?>">
                            Baca Selengkapnya
                            </a></td></tr></table></div>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
        </div></div>
<br><br><br><br><br><br><br><br>

         <!-- Contact -->
         <div id="contact" class="contact bg-abu">
            <div class="container">
                <h2>Kontak Kami</h2>
                <p class="p-heading">Silahkan tinggalkan pesan anda, pada kolom yang tersedia.</p>

                <!-- Contact Form -->
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control-input" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">Submit</button>
                    </div>
                </form>
                <!-- end of contact form -->

            </div> <!-- end of container -->
        </div> <!-- end of contact -->
        <!-- end of contact -->


        
        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
                    
                    <!-- Image Logo -->
                    <a class="logo-image" href="index.html"><img src="assets/img/logo.png" alt="alternative"></a> 
                    
                    </div>  
            <div>
              <ul class="li-space-lg">
              <li><p>Hak Cipta © 2022</p></li>
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