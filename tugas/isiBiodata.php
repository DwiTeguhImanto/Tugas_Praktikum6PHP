<?php
$npm = $_POST['NPM'];
$Nama = $_POST['Nama'];
$jurusan = $_POST['jurusan'];
$Tempat = $_POST['tempat'];
$TTL = $_POST['Ttl'];
$JK = $_POST['JK'];
$alamat = $_POST['alamat'];
$hobby = $_POST['hobby'];

echo "<center>";
echo "<h1>BIODATA</h1>";
echo "NPM      : $npm<br>";
echo "Nama     : $Nama<br>";
echo "Jurusan  : $jurusan<br>";
echo "Tempat dan Tanggal Lahir : $Tempat, $TTL<br>";
echo "Jenis Kelamin : $JK<br>";
echo "Alamat : $alamat<br>";
echo "Hobby : $hobby<br>";
echo "</center>";
?>