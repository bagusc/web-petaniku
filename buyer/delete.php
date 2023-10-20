<?php 
include '../config.php';
$id = $_GET['del'];
mysqli_query($conn,"DELETE from notif where id_notif='$id'");
header("location:index.php");
 
?>