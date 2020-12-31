<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webdb";

// Menaymbungkan database
$conn = new mysqli($servername, $username, $password, $dbname);
// Check Koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Mengambil data dari database
$sql = "SELECT * from proyektordb";
$result = $conn->query($sql);

?>
<html>
</head>
<title>Data ProyektorGO</title>
<link rel="stylesheet" type="text/css" href="css/display.css">
</head>
<body>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="">Peminjaman</a></li>
		</ul>
	<div style="overflow-x:auto;">
	<br>
	<center><img class= "image" src="images/Logo.png" alt="Logo"></center>
	<br>
		<table width="100%" cellspacing="0" cellpadding="18">
				<div class="header">
					<th>Kode Transaksi</th>
					<th>Nama</th>
					<th>NPM</th>
					<th>Pilihan</th>
					<th>Kode Proyektor</th>
					<th>Tanggal</th>
					<th>Jam</th>
				</div>	
					<tr>
						<?php
							while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>".$row['kode_transaksi']."</td>";
							echo "<td>".$row['nama']."</td>";
							echo "<td>".$row['npm']."</td>";
							echo "<td>".$row['pilihan']."</td>";
							echo "<td>".$row['kode_proyektor']."</td>";
							echo "<td>".$row['tanggal']."</td>";
							echo "<td>".$row['jam']."</td>";
							echo "</tr>";
							}
						?>
		</table>
	</div>
</body>
</html>