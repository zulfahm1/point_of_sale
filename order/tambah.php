<html>
	<head>
		<title>Tambah data</title>
		
	</head>
	<body>
		 <form method="post" action="proses_tambah.php">
		 	table number <br>
			 	<input type="text" name="table"><br>
			item <br>
				<select name="item">
					<?php
						include 'koneksi.php';
						$item = "SELECT * FROM item WHERE status = '1'";
						$has = mysqli_query($connect,$item);
						while ($bar = mysqli_fetch_assoc($has)) { ?>
							<option value="<?= $bar['id']; ?>">
								<?= $bar['nama_item']; ?>
							</option>
						<?php }
					?>
				</select>
			qty <br>
				<input type="number" name="qty"><br>
				<input type="submit" value="submit">
		</form>
	</body>
</html>