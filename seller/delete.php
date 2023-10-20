<?php 
include '../config.php';
$id = $_GET['del'];
mysqli_query($conn,"DELETE from jasa where id_jasa='$id'");
header("location:tambahjasa.php");
 
?>