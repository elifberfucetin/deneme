<?php
require_once("baglan.php");
$baglan = mysqli_connect($servername, $username, $password, $database);
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$telefon=$_POST["telefon"];
$kurs=$_POST["dersler"];
$kur=$_POST["kur"];
$aylar=$_POST["aylar"];
$hata="hata oluştu";
if($kurs=="almanca")
{
$fiyat=1200*$kur;
}
if($kurs=="ingilizce")
{
$fiyat=900*$kur;
}
if($kurs=="fransızca")
{
$fiyat=1500*$kur;
}
if($kurs=="japonca")
{
$fiyat=2200*$kur;
}
$sql = "INSERT INTO ogrencibilgileri (ogrenciad, ogrencisoyad, ogrencitelefon,
ogrencikurs, ogrencikur, fiyat, ay) VALUES ('$ad','$soyad','$telefon','$kurs', '$kur', '$fiyat',
'$aylar')";
if(mysqli_query($baglan, $sql)){
echo "Kaydınız başarıyla tamamlandı.3 saniye sonra sayfaya yönlendirileceksiniz...";
header("Refresh: 3; url=yonetimpaneli.php");
}
else
{
echo "Kaydınız Olulturulurken bir hata oluştu.";
}
?>
