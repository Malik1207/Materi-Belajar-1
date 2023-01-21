<?php 
	include 'koneksi.php';
?>
<html>

	<head>
		<title>Customers</title>
	</head>
	
	<body>
	
		<table border="1">
		
			<thead>
				<tr>
				
					<td>Id</td>
					<td>Name</td>
					<td>Address Id</td>
				
				</tr>
			</thead>
			
			<tbody>
			
				<?php
				
					$query = 'SElECT 
								 customers.*,
								 addresses.name AS address_name
								 FROM customers
								 INNER JOIN addresses ON customers.address_id = addresses.id';
					
					$customers = mysqli_query($koneksi, $query);
					foreach($customers as $result){
				
				?>
					<tr>
						
						<td><?=$result['id']?></td>
						<td><?=$result['name']?></td>
						<td><?=$result['address_id']?></td>
						
					</tr>
				<?php
					};
				?>
				
			</tbody>
		
		</table>
	
	</body>

</html>
