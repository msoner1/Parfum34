<?php
require('includes/smarty.php');
require("includes/database.php");

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
$tpl -> assign("footer",$footer);
$tpl -> assign("yanbolum",$yanbolum);

if(isset($_POST['takip_no'])){
    $gelen_takip_no =$_POST['takip_no'];
    $siparis_id = substr($gelen_takip_no,3,-2);
    if($siparis_id) {
        $baglan = @mysql_connect($host, $dbuser, $dbpass);
        mysql_query("SET NAMES UTF8");
        if (!$baglan) die ("Mysql Baglantisi Yapilamadi");
        @mysql_select_db($database, $baglan) or die ("Veri Tabanina Baglanti Yapilamadi");
        $sqlsorgu = mysql_query("SELECT * FROM siparis WHERE siparis_id=".$siparis_id);
        if ($yazdir = mysql_fetch_array($sqlsorgu)) {
             $musteri = mb_substr($yazdir['musteri_adsoyad'],0,2,"utf-8")."*** ***".mb_substr($yazdir['musteri_adsoyad'],-3,3,"utf-8");
             $tpl -> assign("musteri",$musteri);

            if($yazdir['statu']==0){
                $tpl -> assign("durumu",'Sipariş Onayı Bekleniyor.');
            }
            else if($yazdir['statu']==1){
                $tpl -> assign("durumu",'Sipariş Onaylandı.Fatura Bekleniyor.');
            }
            else if($yazdir['statu']==2){
                $tpl -> assign("durumu",'Sipariş Kargo Birimine Aktarıldı.');
            }
            else if($yazdir['statu']==3){
                $barkod_no = $yazdir['barkod_no'];
                $tpl -> assign("durumu",'Ürün Kargoya Verildi.<br/>Kargonuzu <a href="http://www1.ptt.gov.tr/tr/interaktif/kayitliposta_yeniweb221214.php" target="_blank">buradan</a> , "'.$barkod_no.'" barkod numarası ile takip edebilirsiniz');
            }
            else if($yazdir['statu']==4){
                $tpl -> assign("durumu",'Sipariş Onaylanmadı.');
            }
            if($yazdir['aldigi_urun_id']==1){
                $tpl -> assign("alinan_urun",'Calvin Klein Euphoria Women(100ml)');
            }
             else if($yazdir['aldigi_urun_id']==2){
                 $tpl -> assign("alinan_urun",'Calvin Klein Euphoria Men(100ml)');
             }
            else{
                $tpl -> assign("alinan_urun",'Gizli Ürün');
            }
        }
        else{
            $tpl -> assign("hata_","Bu numaraya ait bir sipariş bulunamamaktadır.");
        }

    }
    else{
        $tpl -> assign("hata_","Sipariş numaranız hatalıdır.");
    }
}


$tpl->display("./design/siparis_takip.tpl");
?>

