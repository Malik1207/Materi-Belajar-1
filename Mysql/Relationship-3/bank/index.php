<?php
	include_once "../config/koneksi.php";
?>

<html>

	<head>
		<title>Bank</title>
	</head>
	
	<body>
	
		<a href="create.php">Tambah</a>	
		<table border="1">
			
			<thead>
				<tr>
					
					<td>#</td>
					<td>Nama Bank</td>
					<td>Kode Bank</td>
					<td>Action</td>	
					
				</tr>
			</thead>
			
			<tbody>
				<?php
					$query	= 'SELECT * FROM bank';
					$result	= mysqli_query($connect, $query);
					
					$no =  1;
					
					foreach ($result as $data){
				?>
				<tr>
					
					<td><?= $no++?></td>
					<td><?= $data['name']?></td>
					<td><?= $data['code']?></td>
					<td></td>
					
				</tr>
				<?php
					};
				?>
			</tbody>	
			
		</table>
		
	</body>
	
</html>
