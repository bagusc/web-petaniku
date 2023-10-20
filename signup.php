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
        <link href="assets/css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
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
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#berita">Berita</a></li>
                        <li><a href="login.php">Masuk</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="contact" class="contact bg-gray">
            <div class="container"><br>
                <h2>Daftar Petaniku</h2>
                <br><br>

                <form method="post" action="">
                    <div class="form-group">
                    Username  : <br>   
                    <input name="username" type="text" class="form-control-input" placeholder="Username" required>
                </div>
                <div class="form-group">
                            Nama Lengkap : <br>
                        <input name="name" type="text" class="form-control-input" placeholder="Nama lengkap" required></div>
                    <div class="form-group">
                    Lahir : <br>
                        <input name="born" type="date" class="form-control-input" placeholder="Tanggal lahir" required></div>
                    <div class="form-group">
                    Alamat :<br>
                    <textarea name="address" id="address" cols="50" rows="10"></textarea>
                </div>
                    <div class="form-group">
                        Jenis Kelamin : <br>
                        <input type="radio" name="gender" value="Pria">
                        <label for="pria">Pria</label>
                        <input type="radio" name="gender" value="Wanita">
                        <label for="wanita">Wanita</label><br> </div>
                    <div class="form-group">
                        Telepon : <br>
                        <input name="telp" type="text" class="form-control-input" placeholder="Telepon" required></div>
                    <div class="form-group">    
                        Password : <br>
                        <input name="password" type="password" class="form-control-input" placeholder="Password" required></div>                 
                        <div class="form-group">
                        Mendaftar Sebagai : <br>
                        <input type="radio" name="level" value="buyer">
                        <label for="pria">Buyer</label>
                        <input type="radio" name="level" value="seller">
                        <label for="wanita">Seller</label><br> </div></div>

                        <div class="form-group">
                        <button name="reg" type="submit" class="form-control-submit-button">Daftar</button>
                    </div>
                    <p class="p-heading">Silahkan Masuk Ke Petaniku | <a href="login.php">Masuk</a></p>
                </form>
                
            </div> 
        </div>

<?php
if (isset($_POST['reg']))
{
            include 'config.php';

            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $born = $_POST['born'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $telp = $_POST['telp'];
            $level = $_POST['level'];

    mysqli_query($conn, "INSERT INTO users VALUES ('', '$name', '$username', '$password', '$address', '$telp', '$gender', '$born', '$level')");
}

?>

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