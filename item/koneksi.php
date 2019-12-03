<?php
$server     = "localhost"; //nama server
$user   = "root"; // username dari mysql yang ada di phpmyadmin
$pass       = "1234"; // password dari mysql yang ada di phpmyadmin
$dbname     = "point_of_sale"; // nama database yang sudah dibuat

// Create connection
$connect = mysqli_connect($server, $user, $pass, $dbname);



$sql="CREATE TABLE item(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	category_id INT  NOT NULL,
	nama_item VARCHAR (50) 	NOT NULL,
	prises INT NOT NULL,
	status BOOLEAN NOT NULL,
	FOREIGN KEY(category_id) REFERENCES category(id)
)";
mysqli_query($connect,$sql);

?>