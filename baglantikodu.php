<?php
$servername = "localhost";
$database = "kolej";
$username = "root";
$password = "";
// Bağlantı Oluştur
$baglan = mysqli_connect($servername, $username, $password, $database);
// Bağlantı Kontrol
if (!$baglan) {
 die("Bağlantı Hatası: ");
}
mysqli_close($baglan);
?>
