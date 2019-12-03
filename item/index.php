<html>
	<head>
		<title>index</title>
		
	</head>
	<body>
		<a href="tambah.php">Tambah Data</a>
		<table border="1" cellpadding="5px">
			<tr>
				<td>No</td>
				<td>category</td>
				<td>name</td>
				<td>Price</td>
				<td>Status</td>
				<td>proses</td>
			</tr>
			<?php
				include 'koneksi.php';
				$no=1;
				$sql="SELECT * FROM item";
				$result= mysqli_query($connect,$sql);
				if (mysqli_num_rows($result)>0){
					while ($row=mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?= kats($row['category_id'],$connect); ?></td>
							<td><?= $row['nama_item']; ?></td>
							<td><?= $row['prises']; ?></td>
							<td><?= ($row['status'])?"aktif":"tidak aktif"; ?></td>
							<td> <a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
							<a href="delete.php?id=<?php echo $row ['id'];?>">delete</a></td>
						</tr>
			<?php
					}
				}
				function kats($x, $connect)
				{
					$cat = "SELECT nama_category FROM category WHERE id = '$x'";
					$jad = mysqli_query($connect,$cat);
					$roow = mysqli_fetch_assoc($jad);
					return $roow['nama_category'];
				}
	        ?>
	     
		</table>
	</body>
</html>