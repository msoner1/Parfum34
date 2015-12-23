<?php
$urun = 1;
$url=$_SERVER['SERVER_NAME'];
require("includes/database.php");

ob_start();
require("design/parts/meta.php");
$meta = ob_get_contents();
ob_end_clean();

ob_start();
require("design/parts/yan.php");
$yanbolum = ob_get_contents();
ob_end_clean();

ob_start();
require("design/parts/header.php");
$header =ob_get_contents();
ob_end_clean();

ob_start();
require("design/parts/footer.php");
$footer =ob_get_contents();
ob_end_clean();


$tpl -> assign("header",$header);
$tpl -> assign("meta",$meta);
$tpl -> assign("footer",$footer);
$tpl -> assign("yanbolum",$yanbolum);


$baglan = @mysql_connect($host,$dbuser,$dbpass);
mysql_query("SET NAMES UTF8");
if(! $baglan) die ("Mysql Baglantisi Yapilamadi");
@mysql_select_db($database,$baglan) or die ("Veri Tabanina Baglanti Yapilamadi");
$id = $_GET['urun_id'];
$id = intval( trim($id));
$sqlsorgu = mysql_query("SELECT * FROM urunler where urun_id=".$id."");
    $yazdir = mysql_fetch_array($sqlsorgu);
    $urun_adi = $yazdir['urun_adi'];
    $urun_id = $yazdir['urun_id'];
    $urun_resmi = $yazdir['urun_resmi'];
    $urun_marka = $yazdir['urun_marka'];
    $urun_fiyati = $yazdir['urun_fiyati'];

    $tpl -> assign("urun_adi",$urun_adi);
    $tpl -> assign("urun_resmi",$urun_resmi);
    $tpl -> assign("urun_marka",$urun_marka);
    $tpl -> assign("urun_fiyati",$urun_fiyati);
    $tpl -> assign("urun_id",$urun_id);
if(isset($urun_resmi)){}
else{
    header("Location: http://".$url."/");die();
}

$onerilen_urunler=Array();

    $onerilen_urunler[0]=Array(
        'urun_adi' => "Calvin Klein Euphoria(Bay)",
        'urun_id' => "1",
        'urun_resmi' => "content/images/home/ck5.jpg",
        'urun_url' => "calvin-klein-euphoria-men-100ml-u2",
        'urun_fiyati' => "69"
    );
    $onerilen_urunler[1]=Array(
        'urun_adi' => "Calvin Klein Euphoria(Bayan)",
        'urun_id' => "2",
        'urun_resmi' => "content/images/home/ck1.jpg",
        'urun_url' => "calvin-klein-euphoria-men-100ml-u1",
        'urun_fiyati' => "69"
    );
    $onerilen_urunler[2]=Array(
        'urun_adi' => "Calvin Klein Be Man",
        'urun_id' => "7",
        'urun_resmi' => "content/images/product-details/ck2.jpg",
        'urun_url' => "Calvin-Klein-Be-Men-100ml-u7",
        'urun_fiyati' => "109"
    );

$tpl -> assign("onerilen_urunler",$onerilen_urunler);

$tpl->display("./design/urun-detay.tpl");


?>
