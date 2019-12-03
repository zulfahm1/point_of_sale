<html>
	<head>
		<title>edit Data </title>
		
	</head>
	<body>
		<?php
		include 'koneksi.php';
			$ID     = $_GET['id'];
			$sql    = "SELECT * FROM category WHERE id='$ID'";
			$result = mysqli_query($connect,$sql);
			$row    = mysqli_fetch_assoc($result);
			?>
		<form action="proses_edit.php" method="POST">
			 <input type="hidden" name="id" value="<?php echo $ID; ?>">
			 category : <br>
			 <input type="text" name="category" value="<?php echo $row['nama_category'];?>"><br>

			 <input type="submit" value="submit">
		</form>
	</body>
</html>