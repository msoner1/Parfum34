<?php
include_once('parts/header.php');
include_once('parts/menu_ve_head.php');

if(isset($_GET['yetki_yok'])){$smarty->assign('yetki_yok','1');}

include_once("db.php");
$query = $db->prepare("SELECT * FROM siparis WHERE statu=0");
$query->execute();
$sonuc_islem_yapilmayanlar= $query->rowCount();
$query = $db->prepare("SELECT * FROM siparis WHERE statu=1");
$query->execute();
$sonuc_fatura_kesilecekler= $query->rowCount();
$query = $db->prepare("SELECT * FROM siparis WHERE statu=2");
$query->execute();
$sonuc_kargoya_verilecekler= $query->rowCount();
$query = $db->prepare("SELECT * FROM siparis WHERE statu=3");
$query->execute();
$sonuc_basarili= $query->rowCount();


$smarty->assign('islem_yapilmayan_satislar_sayi',$sonuc_islem_yapilmayanlar);
$smarty->assign('fatura_kesilecekler_sayi',$sonuc_fatura_kesilecekler);
$smarty->assign('kargoya_verilecekler_sayi',$sonuc_kargoya_verilecekler);
$smarty->assign('basarili_satislar_sayi',$sonuc_basarili);

$smarty->display('dashboard.tpl');
include_once('parts/footer.php');
?>