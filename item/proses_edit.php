<?php
include 'koneksi.php';
$ID   = $_POST['id'];
$nama = $_POST['category'];

$sql = "UPDATE category SET nama_category='$nama' WHERE id = '$ID'";
mysqli_query($connect,$sql);

header('location:index.php');
?>