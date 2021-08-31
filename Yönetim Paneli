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
$sql="SELECT fiyat from ogrencibilgileri";
$sqlmayis="SELECT fiyat from ogrencibilgileri where ay='mayıs'";
$sqlhaziran="SELECT fiyat from ogrencibilgileri where ay='haziran'";
$sqltemmuz="SELECT fiyat from ogrencibilgileri where ay='temmuz'";
$sqlagustos="SELECT fiyat from ogrencibilgileri where ay='ağustos'";
$sqleylul="SELECT fiyat from ogrencibilgileri where ay='eylül'";
$sorgumayis=mysqli_query($baglan,$sqlmayis);
$sorguhaziran=mysqli_query($baglan,$sqlhaziran);
$sorgutemmuz=mysqli_query($baglan,$sqltemmuz);
$sorguagustos=mysqli_query($baglan,$sqlagustos);
$sorgueylul=mysqli_query($baglan,$sqleylul);
$sorgusql=mysqli_query($baglan,$sql);
$sorgualmanca=mysqli_query($baglan,$sqlalmanca);
$sorguingilizce=mysqli_query($baglan,$sqlingilizce);
$sorgufransızca=mysqli_query($baglan,$sqlfransızca);
$sorgujaponca=mysqli_query($baglan,$sqljaponca);
$ingilizcetutar = 0;
$almancatutar=0;
$fransızcatutar=0;
$japoncatutar=0;
$toplamgelir=0;
$mayistutar=0;
$hazirantutar=0;
$temmuztutar=0;
$agustostutar=0;
$eylultutar=0;
while($dizi = mysqli_fetch_array($sorgueylul))
{
 $eylultutar = $eylultutar + $dizi["fiyat"];
}
while($dizi = mysqli_fetch_array($sorguhaziran))
{
 $hazirantutar = $hazirantutar + $dizi["fiyat"];
}
while($dizi = mysqli_fetch_array($sorgutemmuz))
{
 $temmuztutar = $temmuztutar + $dizi["fiyat"];
}
while($dizi = mysqli_fetch_array($sorguagustos))
{
 $agustostutar = $agustostutar + $dizi["fiyat"];
}
while($dizi = mysqli_fetch_array($sorgumayis))
{
 $mayistutar = $mayistutar + $dizi["fiyat"];
}
while($dizi = mysqli_fetch_array($sorgusql))
{
 $toplamgelir = $toplamgelir + $dizi["fiyat"];
}
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
$dataPoints = array(
array("label"=> "İngilizce", "y"=> $ingilizcetutar),
array("label"=> "Almanca", "y"=> $almancatutar),
array("label"=> "Japonca", "y"=> $japoncatutar),
array("label"=> "Fransızca", "y"=> $fransızcatutar),
array("label"=> "Kantin", "y"=> 4000),
);
?>
