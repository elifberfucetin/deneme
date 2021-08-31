<?php
$baglan = mysqli_connect("localhost", "root", "");
mysqli_select_db($baglan,"kolej");
if(isset($_POST["mail"]) && isset($_POST["password"]))
{
$mail= $_POST["mail"];
$sifre= $_POST["password"];
$sql= "SELECT * from kullanicibilgileri where email='$mail' and sifre='$sifre'";
$sorgu=mysqli_query($baglan,$sql);
$dizi=mysqli_fetch_array($sorgu);
if($dizi != 0)
{
header("location:yonetimpaneli.php");
}
else
{
echo "lütfen bilgilerinizi kontrol ediniz... 3 saniye sonra sayfaya yönlendiriliyorsunuz";
header("Refresh: 3; url=index.html");
}
}
?>
