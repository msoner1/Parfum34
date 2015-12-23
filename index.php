<?php
$ana = 1;
$url='parfum34.com/';

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


if(isset($_GET['basari'])){$tpl->assign('siparis','Siparişiniz tarafımıza ulaşmıştır.Takip numaranız : '.$_GET['basari']);}
if(isset($_GET['hata'])){$tpl->assign('siparis','Aynı siparişi 3 kere veremezsiniz.');}
if(isset($_GET['hata2'])){$tpl->assign('siparis','Lütfen Formu Tam Doldurun.');}

$tpl -> assign("header",$header);
$tpl -> assign("meta",$meta);
$tpl -> assign("footer",$footer);
$tpl -> assign("yanbolum",$yanbolum);
$tpl -> assign("url",$url);


$baglan = @mysql_connect($host,$dbuser,$dbpass);
mysql_query("SET NAMES UTF8");
if(! $baglan) die ("Mysql Baglantisi Yapilamadi");
@mysql_select_db($database,$baglan) or die ("Veri Tabanina Baglanti Yapilamadi");
$sqlsorgu = mysql_query("SELECT * FROM urunler ORDER BY urun_id limit 6");
$urunler=Array();
while($yazdir = mysql_fetch_array($sqlsorgu)) {

    $urunler[]=Array(
        'urun_adi' => $yazdir['urun_adi'],
        'urun_id' => $yazdir['urun_id'],
        'urun_resmi' => $yazdir['urun_resmi'],
        'urun_url' => replace($yazdir['urun_adi']),
        'urun_fiyati' => $yazdir['urun_fiyati']
    );

}
$sqlsorgu = mysql_query("SELECT * FROM urunler WHERE urun_statu='yeni_urun' ORDER BY urun_id DESC limit 3 ");
$yeni_urunler=Array();
while($yazdir = mysql_fetch_array($sqlsorgu)) {

    $yeni_urunler[]=Array(
        'urun_adi' => $yazdir['urun_adi'],
        'urun_id' => $yazdir['urun_id'],
        'urun_resmi' => $yazdir['urun_resmi'],
        'urun_url' => replace($yazdir['urun_adi']),
        'urun_fiyati' => $yazdir['urun_fiyati']
    );

}
$sqlsorgu = mysql_query("SELECT * FROM urunler WHERE urun_marka='diesel' limit 4 ");
$diesel_urunler=Array();
while($yazdir = mysql_fetch_array($sqlsorgu)) {

    $diesel_urunler[]=Array(
        'urun_adi' => $yazdir['urun_adi'],
        'urun_id' => $yazdir['urun_id'],
        'urun_resmi' => $yazdir['urun_resmi'],
        'urun_url' => replace($yazdir['urun_adi']),
        'urun_fiyati' => $yazdir['urun_fiyati']
    );

}
$sqlsorgu = mysql_query("SELECT * FROM urunler WHERE urun_marka='giorgio-armani' limit 4 ");
$armani_urunler=Array();
while($yazdir = mysql_fetch_array($sqlsorgu)) {

    $armani_urunler[]=Array(
        'urun_adi' => $yazdir['urun_adi'],
        'urun_id' => $yazdir['urun_id'],
        'urun_resmi' => $yazdir['urun_resmi'],
        'urun_url' => replace($yazdir['urun_adi']),
        'urun_fiyati' => $yazdir['urun_fiyati']
    );

}
$sqlsorgu = mysql_query("SELECT * FROM urunler WHERE urun_marka='roberto-cavalli' limit 4 ");
$roberto_urunler=Array();
while($yazdir = mysql_fetch_array($sqlsorgu)) {

    $roberto_urunler[]=Array(
        'urun_adi' => $yazdir['urun_adi'],
        'urun_id' => $yazdir['urun_id'],
        'urun_resmi' => $yazdir['urun_resmi'],
        'urun_url' => replace($yazdir['urun_adi']),
        'urun_fiyati' => $yazdir['urun_fiyati']
    );

}
$sqlsorgu = mysql_query("SELECT * FROM urunler WHERE urun_marka='calvin-klein' limit 4 ");
$calvin_urunler=Array();
while($yazdir = mysql_fetch_array($sqlsorgu)) {

    $calvin_urunler[]=Array(
        'urun_adi' => $yazdir['urun_adi'],
        'urun_id' => $yazdir['urun_id'],
        'urun_resmi' => $yazdir['urun_resmi'],
        'urun_url' => replace($yazdir['urun_adi']),
        'urun_fiyati' => $yazdir['urun_fiyati']
    );

}
$sqlsorgu = mysql_query("SELECT * FROM urunler WHERE urun_marka='paco-rabanne' limit 4 ");
$paco_urunler=Array();
while($yazdir = mysql_fetch_array($sqlsorgu)) {

    $paco_urunler[]=Array(
        'urun_adi' => $yazdir['urun_adi'],
        'urun_id' => $yazdir['urun_id'],
        'urun_resmi' => $yazdir['urun_resmi'],
        'urun_url' => replace($yazdir['urun_adi']),
        'urun_fiyati' => $yazdir['urun_fiyati']
    );

}

$tpl -> assign("urunler",$urunler);
$tpl -> assign("yeni_urunler",$yeni_urunler);
$tpl -> assign("diesel_urunler",$diesel_urunler);
$tpl -> assign("armani_urunler",$armani_urunler);
$tpl -> assign("roberto_urunler",$roberto_urunler);
$tpl -> assign("calvin_urunler",$calvin_urunler);
$tpl -> assign("paco_urunler",$paco_urunler);

$tpl->display("./design/index.tpl");

function replace($tr1) {
    $turkce=array("ş","Ş","ı","ü","Ü","ö","Ö","ç","Ç","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü"," ","(",")","?","  ","=");
    $duzgun=array("s","S","i","u","U","o","O","c","C","s","S","i","g","G","I","o","O","C","c","u","U","-","-","-","-","-","-");
    $tr1=str_replace($turkce,$duzgun,$tr1);
    $tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i","-",$tr1);
    return $tr1;
}
?>
