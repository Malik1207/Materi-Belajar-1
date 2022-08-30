<?php 
	include 'connection.php';
?>

<html>

	<head>
		<little> Data Rumah Sakit</little>	
	</head>
	
	<body>
		<button>
			<a href="create.php" style="text-decoration: none; color: black;">Buat Data</a>
		</button>
		<br><br>
		
		<table border="1">
		
			<thead>
				<tr>
				
					<td>no</td>
					<td>nama</td>
					<td>telephone</td>
					<td>spesialis</td>
					<td>alamat</td>
					<td>action</td>
					
				</tr>
			</thead>
			
			<tbody>
				<?php
					$query = 'SELECT * FROM dokter';
					$result = mysqli_query($koneksi, $query);
					
					$no = 1;
					
					while ($data = mysqli_fetch_assoc($result)){
				?>
				
				<tr>
				
					<td><?=$no++?></td>
					<td><?=$data['nama']?></td>
					<td><?=$data['telephone']?></td>
					<td><?=$data['spesialis']?></td>
					<td><?=$data['alamat']?></td>
					
					<td>
					
						<button>
							<a href="edit.php?id=<?= $data['id']?>" style="text-decoration: none; color: black; padding: 0px 7.6px;">Edit</a>
						</button>
						
						<form action="delete_proses.php" method="POST">
						
							<input type="hidden" name="id" value="<?=$data['id']?>">
							<button>Hapus</button>
							
						</form>
						
					</td>
					
				</tr>
				
				<?php
					};
				?>
			</tbody>
			
		</table>
	</body>
</html>

