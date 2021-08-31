<?php
require_once("baglan.php");
$baglan = mysqli_connect($servername, $username, $password, $database);
$sqlalmanca= "SELECT fiyat from ogrencibilgileri where
ogrencikurs='almanca'";
$sqlingilizce= "SELECT fiyat from ogrencibilgileri where
ogrencikurs='ingilizce'";
$sqlfransızca= "SELECT fiyat from ogrencibilgileri where
ogrencikurs='fransızca'";
$sqljaponca= "SELECT fiyat from ogrencibilgileri where
ogrencikurs='japonca'";
$sorgualmanca=mysqli_query($baglan,$sqlalmanca);
$sorguingilizce=mysqli_query($baglan,$sqlingilizce);
$sorgufransızca=mysqli_query($baglan,$sqlfransızca);
$sorgujaponca=mysqli_query($baglan,$sqljaponca);
$ingilizcetutar = 0;
$almancatutar=0;
$fransızcatutar=0;
$japoncatutar=0;
while($dizi = mysqli_fetch_array($sorgualmanca))
{
 $almancatutar = $almancatutar + $dizi["fiyat"];
}
while($dizi = mysqli_fetch_array($sorguingilizce))
{
 $ingilizcetutar = $ingilizcetutar + $dizi["fiyat"];
}
while($dizi = mysqli_fetch_array($sorgufransızca))
{
 $fransızcatutar = $fransızcatutar + $dizi["fiyat"];
}
while($dizi = mysqli_fetch_array($sorgujaponca))
{
 $japoncatutar = $japoncatutar + $dizi["fiyat"];
}
echo "Urunlerin toplam tutarı ".$almancatutar." TL'dir";
echo "Urunlerin toplam tutarı ".$ingilizcetutar." TL'dir";
echo "Urunlerin toplam tutarı ".$fransızcatutar." TL'dir";
echo "Urunlerin toplam tutarı ".$japoncatutar." TL'dir";
?>

