
<?php 
include '../config.php';

$del = $_GET['del'];
mysqli_query($conn,"DELETE from post where id_post='$del'");
header("location:index.php");

?>