<?php
include 'koneksi.php';
$table =$_POST['table'];
$item = $_POST['item'];
$qty = $_POST['qty'];

$tot = "SELECT prises FROM item WHERE id='$item'";
$tot1 = mysqli_query($connect,$tot);
$tot2 = mysqli_fetch_assoc($tot1);
$total = $qty * $tot2['prises'];

$sql  = "INSERT INTO orders (table_number, item_id, qty, total ) values ('$table', '$item', '$qty', '$total')";
mysqli_query($connect,$sql);

header('location:index.php');
?>