<?php
/**
 * Created by PhpStorm.
 * User: msoner
 * Date: 27.6.2015
 * Time: 17:56
 */
require("includes/database.php");
$url=$_SERVER['SERVER_NAME'];
if(isset($_POST['submit'])) {
$baglan = @mysql_connect($host,$dbuser,$dbpass);
mysql_query("SET NAMES UTF8");
if(! $baglan) die ("Mysql Baglantisi Yapilamadi");
@mysql_select_db($database,$baglan) or die ("Veri Tabanina Baglanti Yapilamadi");

    $ip=GetIP();
    $sqlsorgu = mysql_query("SELECT * FROM ipler where ip='".$ip."'");
   while($yazdir = mysql_fetch_array($sqlsorgu)) {
       $adet = $yazdir['form_adet'];
       $artis = 1;
       $id = $yazdir['id'];
       if ($adet > 1) {
           header("Location: http://" . $url . "?hata=1");
           die();
       } else {
           $adet++;
           $sqlsorgu = mysql_query("UPDATE ipler SET form_adet=" . $adet . " WHERE id=" . $id . "");
       }
   }    date_default_timezone_set('Europe/Istanbul');
        $simdi=time();

        $adsoyad =mysql_real_escape_string(strip_tags( trim($_POST['ad_soyad'])));
        $email =mysql_real_escape_string(strip_tags( trim($_POST['email'])));
        $telefon =intval($_POST['telefon']);
        $semt =mysql_real_escape_string(strip_tags( trim($_POST['semt'])));
        $adet =mysql_real_escape_string(intval( trim($_POST['adets'])));
        $urun_id =intval($_POST['urun_ids']);
        $adres =mysql_real_escape_string(strip_tags( trim($_POST['adres'])))."   Semt :".$semt;
        $zaman =date('Y-m-d H:i:s',$simdi);;

        if($adres == "" || $adsoyad=="" )
        {
            header("Location: http://".$url."?hata2=1");die();
        }
        else {
            $sqlsorgu = mysql_query("INSERT INTO siparis (musteri_adsoyad,email,musteri_telefon,adres,notu,aldigi_urun_id,siparis_zamani,statu) VALUES ('" . $adsoyad . "','" . $email . "','" . $telefon . "','" . $adres . "','" . $adet . "','".$urun_id."','".$zaman."',0)");

            if (!isset($artis)) {
                $sqlsorgu = mysql_query("INSERT INTO ipler (ip,form_adet) VALUES ('" . $ip . "',1)");
            }
            $sqlsorgu = mysql_query("SELECT * FROM siparis ORDER BY siparis_id DESC");
            $yazdir = mysql_fetch_array($sqlsorgu);
            $sifrelenmis_veri = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3).$yazdir['siparis_id'].substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2);
            header("Location: http://" . $url . "?basari=".$sifrelenmis_veri);
        }


}
else{
    header("Location: http://".$url."/");die();
}


function GetIP(){
    if(getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (strstr($ip, ',')) {
            $tmp = explode (',', $ip);
            $ip = trim($tmp[0]);
        }
    } else {
        $ip = getenv("REMOTE_ADDR");
    }
    return $ip;
}