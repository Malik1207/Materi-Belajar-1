<?php
	// Buat koneksi dengan database mysql
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "12345678";
	$dbname = "kampusku";
	$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>

<!DOCTYPE html>
<html lang="id">

	<head>
		<meta charset="UTF-8">
		<title>Tabel Factory</title>
		<style>
			/* ====GLOBLA STYLE====*/
			body {
				background: #f8f8f8;
			}
			div.container {
				width: 960px;
				padding: 10px 50px 50px;
				background-color: white;
				margin: 20px auto;
				box-shadow: 1px 0px 10px, -1px 0px 10px;
			}
			h1 {
				text-align: center;
				font-family: Cambria, "Times New Roman", serif;
			}
			
			/* ====TABLE==== */
			table {
				border-collapse: collapse;
				border-spacing: 0;
				border: 1px solid black;
				width: 100%;
			}
			th, td {
				padding: 8px 15px;
				border: 1px black solid;
			}
			tr:nth-child(2n+3) {
				background-color: #f2f2f2;
			} 
		</style>
	</head>
	
	<body>
		<div class="container">
			<h1>Data Factory</h1>
			<table>
				<tr>
					<th>Id Employes</th>
					<th>Name</th>
					<th>Place of Birth</th>
					<th>Date of Birth</th>
					<th>Position</th>
					<th>Duty</th>
					<th>Salary</th>
				</tr>
				<?php
					//Jalankan Query
					$query  = "SELECT * FROM mahasiswa";
					$result = mysqli_query($link, $query);
					
					//Buat perulangan untuk element tabel dari data mahasiswa
					while($data = mysqli_fetch_assoc($result)) {
						//Konversi data MySQL (yyyy-mm-dd) menjadi dd-mm-yyyy
						$tanggal_php = strtotime($data["tanggal_lahir"]);
						$tanggal = date("d - m - Y", $tanggal_php);
						
						echo "<tr>";
							echo "<td>$data[nim]</td>";
							echo "<td>$data[nama]</td>";
							echo "<td>$data[tempat_lahir]</td>";
							echo "<td>$tanggal</td>";
							echo "<td>$data[fakultas]</td>";
							echo "<td>$data[jurusan]</td>";
							echo "<td>$data[ipk]</td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
	
</html>
