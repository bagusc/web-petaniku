<?php 
	session_start();
 
	if($_SESSION['level']=="seller"){

 
	?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
        <!-- Webpage Title -->
        <title>Webpage Title</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="../assets/css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
    
        <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('a.close').click(function(eve){
			
			eve.preventDefault();
			$(this).parents('div.popup').fadeOut('slow');
		});
	});
</script>
<style type="text/css">
	body{
		width:100%;
		height:100%;
		margin:0;
		padding:0;
	}
	div.popup{
		position:fixed;
		top:0;
		bottom:0;
		left:0;
		right:0;
		width:100%;
		height:100%;
		background: rgba(0,0,0,.8);
	}
	
	div#box{
		margin:5% auto;
		background:#fff;
		width:40%;
		height:60%;
		-webkit-box-shadow:0 0 15px #000;
		-moz-box-shadow:0 0 15px #000;
		box-shadow:0 0 15px #000;
	}
	
	a.close{
		text-decoration:none;
		color:#000;
		margin:10px 15px 0 0;
		float:right;
		font-family:tahoma;
		font-size:20px;
	}
</style>

    </head>
    <body>
        
        <!-- Navigation -->
        <div class="navbar">
            <div class="container flex">

                <!-- Image Logo -->
                <a class="logo-image" href="index.php"><img src="../assets/img/logo.png" alt="alternative"></a>

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="berita.php">Berita</a></li>
                        <li><a href="tambahjasa.php">Jasa</a></li>
                        <li><a href="logout.php">Logout</a></li>
                                        </ul>
                </nav>
            </div> <!-- end of container -->
        </div>

        
 <!-- Customers -->
 <div class="customers">
            <div class="slider">
		<figure>
			<div class="slide">
				<img src="../assets/img/g1.jpg">
			</div>

			<div class="slide">
				<img src="../assets/img/g2.jpg">
			</div>

			<div class="slide">
				<img src="../assets/img/g3.jpg">
			</div>

			<div class="slide">
				<img src="../assets/img/g4.jpg">
			</div>

			<div class="slide">
				<img src="../assets/img/g5.jpg">
			</div>
		</figure>
	</div></div>
            <div class="container"><br><br>
            <center>    
            <h3>Tambah Jasa</h3><br>
            <table><tr><td valign="top" height="363px">

                <select style="width: 300px; height: 30px;"
                onchange="if (this.selectedIndex==1) 
                { document.getElementById('formdata').style.display = 'inline' }else 
                { document.getElementById('formdata').style.display = 'none' };
                if (this.selectedIndex==2) 
                { document.getElementById('formdata2').style.display = 'inline' }else 
                { document.getElementById('formdata2').style.display = 'none' };
                ">
                    <option nama="jenisjasa" value="">Pilih</option>
                    <option nama="jenisjasa" value="Buruh Tani">Buruh Tani</option>
                    <option nama="jenisjasa" value="Traktor">Traktor</option>
                </select><br>
                <span id="formdata" style="display:none;">
                    <form method="post" action="">
                        Nama Kelompok <br> <input class="resizedTextbox" type="text" name="namakelompok" required><br>
                        Jumlah Kelompok <br> <input class="resizedTextbox" type="number" name="jumlahkelompok" required><br>
                        Keterangan <br> <textarea name="keterangan" cols="50" rows="10" required></textarea>
                        <br><input style="padding: 10px 60px; color: white; background-color:#252936; border: none; cursor:pointer;" type="submit" name="tambahdata1" value="Add">
                    </form>
            
                </span>


                <span id="formdata2" style="display:none;">
                    <form method="post" action="">
                    Nama <br> <input class="resizedTextbox" type="text" name="namatraktor"><br>
                    Keterangan <br> <textarea name="keterangan2" cols="50" rows="10"></textarea>
                    <br><input style="padding: 10px 60px; color: white; background-color:#252936; border: none; cursor:pointer;" type="submit" name="tambahdata2" value="Add">
                </form>
                </span></td></tr></table>
            </div>
      
            <?php
                    include '../config.php';
                if (isset($_POST['tambahdata1']))
                {

                            $nama = $_POST['namakelompok'];
                            $jumlah = $_POST['jumlahkelompok'];
                            $keterangan = $_POST['keterangan'];
                            $idusers = $_SESSION['id_users'];

                    mysqli_query($conn, "INSERT INTO jasa (id_jasa, id_users, nama_kelompok, jumlah_kelompok, keterangan, category_jasa) VALUES ('', '$idusers', '$nama', '$jumlah', '$keterangan', '1')");
                }

                elseif (isset($_POST['tambahdata2']))
                {

                            $nama = $_POST['namatraktor'];
                            $keterangan = $_POST['keterangan2'];
                            $idusers = $_SESSION['id_users'];

                    mysqli_query($conn, "INSERT INTO jasa (id_jasa, id_users, nama_kelompok, keterangan, category_jasa) VALUES ('', '$idusers', '$nama', '$keterangan', '2')");
                }

            ?>

<div class="container"><center><br>
<h3>Data Pesanan Jasa</h3><br>
                <table border="1" width="90%" style=" text-align:center" cellspacing='0'>
                <tr style=" background-color:black;">
                <th>ID</th>
                <th>Nama Kelompok</th>
                <th>Jumlah Kelompok</th>
                <th>Keterangan</th>
                <th>Kategori</th>
                <th>Aksi</th>

                <?php 
                
		include '../config.php';
		$no = 1;
        $id_users = $_SESSION['id_users'];
		$data = mysqli_query($conn,"select * from jasa where id_users=$id_users");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_jasa']; ?></td>
				<td><?php echo $d['nama_kelompok']; ?></td>
				<td><?php echo $d['jumlah_kelompok']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td><?php echo $d['category_jasa']; ?></td>
				<td>
					<a style="
                    background-color: green;
                    color: white;   
                    "
                    href="?id=<?php echo $d['id_jasa']; ?>">Edit</a> |
					<a style="
                    background-color: red;
                    color: white;   
                    " href="delete.php?del=<?php echo $d['id_jasa']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
</table></center></div>
<br><br>

<?php
error_reporting(0);

	$id = $_GET['id'];
    
	$data = mysqli_query($conn,"select * from jasa where id_jasa= '$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php ">
        <div class="popup">
		    <div id="box">
            <a class="close" href="tambahjasa.php">X</a><center>
            <br><h4>Edit Jasa</h4><br>
            <table width="80%" style=" text-align:left">
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id_jasa']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama_kelompok']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="number" name="nim" value="<?php echo $d['jumlah_kelompok']; ?>"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><textarea name="alamat" cols="30" rows="10"> <?php echo $d['keterangan']; ?></textarea> </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table></center>
            
		</div>		
	</div>
		</form>
		<?php 
	}
	?>


        <!-- Footer -->
        <footer>
            <div class="container grid grid-3">
                <div>
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
            </div> <!-- end of container -->
        </footer> <!-- end of footer -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->

    </body>
</html>

<?php
	}
    header("location:../login.php?pesan=gagal");
	
?>