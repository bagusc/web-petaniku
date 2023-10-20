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
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div> 
            </div><!-- end of container -->
        </div> <!-- end of navbar -->
        <!-- end of navigation -->
 
            <div id="contact" class="contact bg-gray">
            <div class="container"><br>
            <div class="cards"><br><br>
                <h3>Kebijakan & ketentuan Petaniku</h3><br><table><tr>
                    <td colspan="2" style="padding-bottom: 50px; padding-left: 35px;" ><strong>MOHON ANDA MEMERIKSA KETENTUAN PENGGUNAAN DAN KEBIJAKAN PRIVASI KAMI DENGAN SEKSAMA SEBELUM MENGGUNAKAN LAYANAN KAMI UNTUK PERTAMA KALI</strong>
                   </td></tr><tr><td colspan="2" align="left" style="padding-bottom: 50px; padding-left: 35px;">Petaniku ini di rancang dengan harapan bisa membantu memperbaiki struktur pertanian di Indonesia, dengan memberikan kemudahan bagi masyarakat yang bekerja di bidang pertanian di antaranya petani dan buruh tani. Dan dengan adanya peran teknologi di bidang pertanian maka diharapkan dapat meningkatkan kualitas hasil yang bagus, serta memudahkan para pengelola sektor pertanian untuk mendapatkan hasil kerja yang optimal.</td><td></td></tr>
                   <tr><td width="10%" valign="top">1</td><td align="left">Anda menyatakan dan menjamin bahwa anda adalah individu yang secara hukum berhak untuk mengadakan perjanjian yang mengikat berdasarkan hukum Negara Republik Indonesia, khususnya Ketentuan Penggunaan, untuk menggunakan Aplikasi dan bahwa anda telah berusia minimal 21 tahun atau sudah menikah dan tidak berada di bawah perwalian. Jika tidak, kami atau Penyedia Layanan terkait, berhak berdasarkan hukum untuk membatalkan perjanjian yang dibuat dengan anda. Anda selanjutnya menyatakan dan menjamin bahwa anda memiliki hak, wewenang dan kapasitas untuk menggunakan Layanan dan mematuhi Ketentuan Penggunaan. Jika anda mendaftarkan atas nama suatu badan hukum, anda juga menyatakan dan menjamin bahwa anda berwenang untuk mengadakan, dan mengikatkan diri entitas tersebut pada Ketentuan Penggunaan ini dan mendaftarkan untuk Layanan dan Aplikasi.</td>
<tr><td valign="top"><br>2</td><td align="left"><br>Kami mengumpulkan dan memproses informasi pribadi anda, seperti nama, alamat, dan nomor telepon seluler anda ketika anda mendaftar. Anda harus memberikan informasi yang akurat dan lengkap, dan setuju untuk memberikan kepada kami bukti identitas apapun yang secara wajar dapat kami mintakan.</td></tr>
<tr><td valign="top"><br>3</td><td align="left"><br>
Hanya anda yang dapat menggunakan akun anda sendiri dan anda berjanji untuk tidak memberikan wewenang kepada orang lain untuk menggunakan identitas anda atau menggunakan akun anda. Anda tidak dapat menyerahkan atau mengalihkan akun anda kepada pihak lain. Anda harus menjaga keamanan dan kerahasiaan kata sandi akun anda dan setiap identifikasi yang kami berikan kepada anda. Dalam hal terjadi pengungkapan atas kata sandi anda, dengan cara apapun, yang mengakibatkan setiap penggunaan yang tidak sah atau tanpa kewenangan atas akun atau identitas anda, masih akan dianggap sebagai pesanan yang sah, kecuali anda memberitahu kami tentang mengenai hal tersebut sebelum Penyedia Layanan menyetujui pesanan anda.
<br><br><br><br>
</td></tr>
</table>

                </div>    
            </div> <!-- end of container -->
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