<html>
	<head>
		<title>Tambah data</title>
		
	</head>
	<body>
		 <form method="post" action="proses_tambah.php">

		    category<br>
		    <select name="category">
		    	<?php
		    		include 'koneksi.php';
		    		$sql = "SELECT * FROM category";
		    		$res = mysqli_query($connect, $sql);
		    		while ($row = mysqli_fetch_assoc($res)) { ?>
		    			<option value="<?= $row['id']; ?>">
		    				<?= $row['nama_category']; ?>
		    			</option>
		    		<?php	
		    		}
		    	?>
		    </select><br>
		    item <br>
		    <input type="text" name="item"><br>
		    price <br>
		    <input type="number" name="price">
		    status <br>
			    <label><input type="radio" name="status" value="1">aktif</label>
			    <label><input type="radio" name="status" value="0">tidak aktif</label>
			    <br>

		    <input type="submit" value="SUBMIT">
			
		</form>
	</body>
</html>