<html>
	<head>
		<title>index</title>
		
	</head>
	<body>
		<a href="tambah.php">Tambah Data</a>
		<table border="1" cellpadding="5px">
			<tr>
				<td>No</td>
				<td>table number</td>
				<td>item</td>
				<td>qty</td>
				<td>total</td>
				<td>proses</td>
			</tr>
			<?php
				include 'koneksi.php';
				$no=1;
				$sql="SELECT * FROM orders";
				$result= mysqli_query($connect,$sql);
				if (mysqli_num_rows($result)>0){
					while ($row=mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?= $row['table_number']; ?></td>
							<td><?= item($row['item_id'], $connect); ?></td>
							<td><?= $row['qty']; ?></td>
							<td><?= $row['total']; ?></td>
							<td> <a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
							<a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
						</tr>
			<?php
					}
				}
				function item($x, $connect)
				{
					$sqlw="SELECT * FROM item WHERE id= '$x'";
					$asd = mysqli_query($connect, $sqlw);
					$bow = mysqli_fetch_assoc($asd);
					return $bow['nama_item'];
				}
	        ?>
	     
		</table>
	</body>
</html>