<?php

	$number = 7;
	$santris = [
	
		'ali' =>	[
					'nama' => 'ali',
					'umur' => '20',
					'alamat' => 'bekasi',
					],
					
		'malix' =>	[
					'nama' => 'alex',
					'umur' => '20',
					'alamat' => 'Kalimantan',
					],
					
		'yuli' =>	[
					'nama' => 'yuli',
					'umur' => '20',
					'alamat' => 'tambun',
					],
					
		'melati' =>	[
					'nama' => 'melati',
					'umur' => '20',
					'alamat' => 'depok',
					],
						
	];

?>

<html>
	<head>
		<title>Review Loop</title>
	
		<style>
			
		</style>
		
	</head>
	
	<body>
		
		<table border="1">
		
			<thead>
			
				<tr>
					<th>Ini Header 1</th>
					<th>Ini Header 2</th>
					<th>Ini Header 2</th>
				</tr>
				
			</thead>
			
			<tbody>
			
				<?php
					for($i = 0; $i < $number; $i++) {
				echo
				"<tr>
					<td>Index ke-" . $i . "</td>
					<td>Index ke-" . $i . "</td>
					<td>Index ke-" . $i . "</td>
				</tr>";
					};
				?>
				
			</tbody>
			
		</table>
		
		<hr/>
		<hr/>
		
		<table border="1">
			
			<tr>
				<th>Nama</th>
				<th>Detail</th>
			</tr>
			
			<?php
				foreach($santris as $key => $santri) {
			?>
			
			<tr>
				<td rowspan="3"><?= $key ?></td>
				<td><?= $santri ['nama']?></td>
			</tr> 
			
			<tr>
				<td><?= $santri ['umur']?></td>
			</tr> 
			
			<tr>
				<td><?= $santri ['alamat']?></td>
			</tr> 
			
			<?php
				}
			?>
			
		</table>
		
	</body>
	
</html>
