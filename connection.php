<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webdb";

//Menyambungkan database
$conn=new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Memindahkan dari form
if (isset($_POST['nama'])) {
$namaVar=htmlspecialchars($_POST['nama']);
}
if (isset($_POST['npm'])) {
$npmVar=htmlspecialchars($_POST['npm']);
}
if (isset($_POST['pilihan'])) {
$pilihanVar=htmlspecialchars($_POST['pilihan']);
}
if (isset($_POST['kode_proyektor'])) {
$kode_proyektorVar=htmlspecialchars($_POST['kode_proyektor']);
}
if (isset($_POST['tanggal'])) {
$tanggalVar=htmlspecialchars($_POST['tanggal']);
}
if (isset($_POST['jam'])) {
$jamVar=htmlspecialchars($_POST['jam']);
}

//Kode Random
function createRandomPassword() { 

    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 5) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

} 

$random_code = createRandomPassword();



//Memasukkan values
$sql = "INSERT INTO proyektordb (kode_transaksi, nama, npm, pilihan, kode_proyektor, tanggal, jam) 
VALUES ('$random_code', '$namaVar', '$npmVar', '$pilihanVar', '$kode_proyektorVar', '$tanggalVar', '$jamVar')";

//Mengecheck koneksi dan pemindahan
if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">'; 
	echo 'alert("Input Berhasil. Silahkan klik OK");'; 
	echo 'window.location.href = "displaydata.php";';
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
