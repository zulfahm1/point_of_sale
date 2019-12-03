<?php
include 'koneksi.php';
$cat = $_POST['category'];
$item = $_POST['item'];
$pri = $_POST['price'];
$stat = $_POST['status'];

$add = "INSERT INTO item (category_id, nama_item, prises, status) VALUES ('$cat','$item','$pri','$stat')";
mysqli_query($connect,$add);
header('location:index.php');