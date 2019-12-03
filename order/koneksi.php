<?php
$server     = "localhost"; //nama server
$user   = "root"; // username dari mysql yang ada di phpmyadmin
$pass       = "1234"; // password dari mysql yang ada di phpmyadmin
$dbname     = "point_of_sale"; // nama database yang sudah dibuat

// Create connection
$connect = mysqli_connect($server, $user, $pass, $dbname);



$sql="CREATE TABLE orders(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	table_number VARCHAR(20) NOT NULL,
	item_id INT NOT NULL,
	qty INT NOT NULL,
	total INT NOT NULL,
	FOREIGN KEY(item_id) REFERENCES item(id)
)";
mysqli_query($connect,$sql);

?>