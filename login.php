<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login | Petaniku</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    </head>
    <body>
        
        <!-- Navigation -->
        <div class="navbar">
            <div class="container flex">

                <!-- Image Logo -->
                <a class="logo-image" href="index.php"><img src="assets/img/logo.png" alt="alternative"></a>

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Berita</a></li>
                        <li><a href="signup.php">Daftar</a></li>
                    </ul>
                </nav>
            </div>
        </div>    

        <div id="contact" class="contact bg-gray">
            <div class="container"><br>
            <div class="cards"><br>
                <h2>Masuk Ke Petaniku</h2>
                <br><br>

                <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert' style='color: red;'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

                <form method="post" action="">
                <table>
                        <tr><td>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control-input" placeholder="Username" required></div>
                        </td></tr><tr><td>
                        <div class="form-group">
                        <input type="password" name="password" class="form-control-input" placeholder="Password" required></div>                 </div>
                        </td></tr><tr><td>
                        <div class="form-group">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" name="submit" class="form-control-submit-button">Masuk</button>
                    </div></td></tr><tr><td>
                    <p class="p-heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Belum menjadi anggota? 
                        <a href="signup.php">Bergabung Sekarang</a></p>
                    </td></tr></table>
                </form>

                <?php
                if (isset($_POST['submit'])){
                session_start();

                        include 'config.php';

                        $username = $_POST['username'];
                        $password = $_POST['password'];
    
                        // menyeleksi data user dengan username dan password yang sesuai
                        $login = mysqli_query($conn,"select * from users where username='$username' and password='$password'");
                        // menghitung jumlah data yang ditemukan
                        $cek = mysqli_num_rows($login);
                         
                        // cek apakah username dan password di temukan pada database
                        if($cek > 0){
                         
                            $data = mysqli_fetch_assoc($login);
                         
                            // cek jika user login sebagai admin
                            if($data['level']=="admin"){
                         
                                // buat session login dan username
                                $_SESSION['id_users'] = $data['id_users'];
                                $_SESSION['username'] = $username;
                                $_SESSION['level'] = "admin";
                                // alihkan ke halaman dashboard admin
                                header("location:admin");
                         
                            // cek jika user login sebagai pegawai
                            }else if($data['level']=="buyer"){
                                // buat session login dan username
                                $_SESSION['id_users'] = $data['id_users'];
                                $_SESSION['username'] = $username;
                                $_SESSION['level'] = "buyer";
                                // alihkan ke halaman dashboard pegawai
                                header("location:buyer");
                         
                            // cek jika user login sebagai pengurus
                            }else if($data['level']=="seller"){
                                // buat session login dan username
                                $_SESSION['id_users'] = $data['id_users'];
                                $_SESSION['username'] = $username;
                                $_SESSION['level'] = "seller";
                                // alihkan ke halaman dashboard pengurus
                                header("location:seller");
                         
                            }else{
                                
                            header("location:login.php?pesan=gagal");
                            }	
                        }else{
                            header("location:login.php?pesan=gagal");

                        }
                    }
                ?>
</div>
            </div> <!-- end of container -->
        </div>

        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
                    
                    <!-- Image Logo -->
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
                </div>        </footer> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Back To Top Button -->
        <a id="myBtn" href="#" data-scroll>
            <img src="images/up-arrow.png" alt="alternative">
        </a>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="js/smooth-scroll.polyfills.min.js"></scrip> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>