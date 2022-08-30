<?php 
	include 'koneksi.php';
?>
<html>

	<head>
		<title>Orders</title>
	</head>
	
	<body>
	
		<table border="1">
		
			<thead>
				<tr>
				
					<td>#</td>
					<td>Items</td>
					<td>Customers</td>
				
				</tr>
			</thead>
			
			<tbody>
			
				<?php
				
					$query = 'SElECT
								orders.*,
								customers.name
								FROM orders
								INNER JOIN customers ON orders.customer_id = customers.id';
					
					$orders = mysqli_query($koneksi, $query);
					
					foreach($orders as $result){
				
				?>
					<tr>
						
						<td><?=$result['id']?></td>
						<td><?=$result['item']?></td>
						<td><?=$result['customer_id']?></td>
						
					</tr>
				<?php
					};
				?>
				
			</tbody>
		
		</table>
	
	</body>

</html>
