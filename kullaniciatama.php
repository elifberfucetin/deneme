<?php
 require_once("baglan.php");
$baglan = mysqli_connect($servername, $username, $password, $database);
$kullaniciadi=$_POST["name"];
$kullanicisoyadi=$_POST["lastname"];
$email=$_POST["email"];
$sifre=$_POST["password"];
$hata="hata oluştu";
echo $kullaniciadi;
echo $kullanicisoyadi;
echo $email;
echo $sifre;
$sql = "INSERT INTO kullanicibilgileri (adi, soyadi, email, sifre) VALUES
('$kullaniciadi','$kullanicisoyadi','$email','$sifre')";
if(mysqli_query($baglan, $sql)){
echo "Kaydınız başarıyla tamamlandı.";
header("location:index.html");
}
else
{
echo "Kaydınız Olulturulurken bir hata oluştu.";
}
?>
