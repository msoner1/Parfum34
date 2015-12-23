<?php
$urun = 1;
$url=$_SERVER['SERVER_NAME'];
require("includes/database.php");

ob_start();
require("design/parts/meta.php");
$meta = ob_get_contents();
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


session_start();
$_SESSION['giris']=1;

if(isset($_GET['adet'])){
    $adet =intval( trim( $_GET['adet']));
    $tpl -> assign("adet",$adet);
}
else{
    $tpl -> assign("adet","1");
}

$tpl -> assign("urun_adi",$urun_adi);
$tpl -> assign("urun_resmi",$urun_resmi);
$tpl -> assign("urun_marka",$urun_marka);
$tpl -> assign("urun_fiyati",$urun_fiyati);
$tpl -> assign("urun_id",$urun_id);
if(isset($urun_resmi)){}
else{
    header("Location: http://".$url."/");die();
}
$tpl->display("./design/siparis.tpl");


?>
