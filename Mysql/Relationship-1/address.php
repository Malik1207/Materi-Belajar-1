<?php 
	include 'koneksi.php';
?>
<html>

	<head>
		<title>Addresses</title>
	</head>
	
	<body>
	
		<table border="1">
		
			<thead>
				<tr>
				
					<td>#</td>
					<td>Name</td>
				
				</tr>
			</thead>
			
			<tbody>
			
				<?php
				
					$query = 'SElECT * FROM addresses';
					
					$addresses = mysqli_query($koneksi, $query);
					
					foreach($addresses as $result){
				
				?>
					<tr>
						
						<td><?=$result['id']?></td>
						<td><?=$result['name']?></td>
						
					</tr>
				<?php
					};
				?>
				
			</tbody>
		
		</table>
	
	</body>

</html>
