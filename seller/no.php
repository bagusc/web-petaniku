


<?php 
include '../config.php';

$setuju = $_GET['setuju'];
mysqli_query($conn,"UPDATE notif SET status='Disetujui' where id_notif='$setuju'");
header("location:index.php");

$tolak = $_GET['tolak'];
mysqli_query($conn,"UPDATE notif SET status='Ditolak' where id_notif='$tolak'");
header("location:index.php");
?>


