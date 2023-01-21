<?php 
	include_once ("../config/koneksi.php");
?>

<html>

	<head>
		<little>Data Guru</little>	
	</head>
	
	<body>
		<button>
			<a href="create.php" style="text-decoration: none; color: black;">Buat Data</a>
		</button>
		<br><br>
		
		<table border="1">
		
			<thead>
				<tr>
				
					<td>No</td>
					<td>Nama</td>
					<td>Alamat</td>
					<td>Nip</td>
					<td>Action</td>
					
				</tr>
			</thead>
			
			<tbody>
				<?php
					$query = 'SELECT * FROM guru';
					$result = mysqli_query($connect, $query);
					
					$no = 1;
					
					while ($data = mysqli_fetch_assoc($result)){
				?>
				
				<tr>
				
					<td><?=$no++?></td>
					<td><?=$data['nama']?></td>
					<td><?=$data['alamat']?></td>
					<td><?=$data['nip']?></td>
					
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

