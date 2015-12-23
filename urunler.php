<?php
$urun = 1;
$marka = $_GET['marka'];
$sayfa = $_GET['s'];
$kategori = $_GET['kategori'];

$marka =strip_tags( trim($marka) );
$sayfa =intval( trim($sayfa));
$kategori =strip_tags( trim($kategori) );

$url=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

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
$tpl -> assign("url",$url);
$tpl -> assign("sayfa",$sayfa);
$tpl -> assign("kategori",$kategori);
$tpl -> assign("marka",$marka);

session_start();
$_SESSION['giris']=1;

$baglan = @mysql_connect($host,$dbuser,$dbpass);
mysql_query("SET NAMES UTF8");
if(! $baglan) die ("Mysql Baglantisi Yapilamadi");
@mysql_select_db($database,$baglan) or die ("Veri Tabanina Baglanti Yapilamadi");
if($marka == "urunler"){
    $offset = ($sayfa-1) * 6;
    $sqlsorgu = mysql_query("SELECT * FROM urunler order by urun_id limit 6 offset ".$offset."");
}
else{
    if($kategori=="erkek" || $kategori == "kadin"){
        $sqlsorgu = mysql_query("SELECT * FROM urunler where urun_marka ='".$marka."' AND kategori ='".$kategori."' limit 6 ");
    }
    else{
        $sqlsorgu = mysql_query("SELECT * FROM urunler where urun_marka ='".$marka."' limit 6 ");
    }
}

$urunler=Array();
while($yazdir = mysql_fetch_array($sqlsorgu)) {
    $durum=1;
    $urunler[]=Array(
        'urun_adi' => $yazdir['urun_adi'],
        'urun_id' => $yazdir['urun_id'],
        'urun_resmi' => $yazdir['urun_resmi'],
        'urun_url' => replace($yazdir['urun_adi']),
        'urun_fiyati' => $yazdir['urun_fiyati']
    );

}
if(isset($durum)){}
else{header("Location: /");die();}

$tpl -> assign("urunler",$urunler);

$tpl->display("./design/urunler.tpl");

function replace($tr1) {
    $turkce=array("ş","Ş","ı","ü","Ü","ö","Ö","ç","Ç","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü"," ","(",")","?","  ","=");
    $duzgun=array("s","S","i","u","U","o","O","c","C","s","S","i","g","G","I","o","O","C","c","u","U","-","-","-","-","-","-");
    $tr1=str_replace($turkce,$duzgun,$tr1);
    $tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i","-",$tr1);
    return $tr1;
}
?>
