<?php
include_once('parts/header.php');
include_once('parts/menu_ve_head.php');

$gelen =key($_GET);
$gelen = htmlspecialchars($gelen);

switch($gelen) {

    case 'mesajlar':
        if($_SESSION['level']!=1){
            header("Location:/parfum34_admin/dashboard.php?yetki_yok");
        }

        $smarty->assign('mesajlar','1');
        $smarty->assign('sayfa_baslik','Mesajlar');

        include_once("db.php");
        $query = $db->prepare("SELECT * FROM iletisim ORDER BY id DESC");
        $query->execute();
        $sonuc= $query->fetchAll();


        $smarty->assign('mesajlar',$sonuc);

        $smarty->display('default.tpl');
        include_once('parts/footer.php');
        break;



    case 'son_hareketler':
        if($_SESSION['level']!=1){
            header("Location:/parfum34_admin/dashboard.php?yetki_yok");
        }


        $smarty->assign('son_hareketler','1');
        $smarty->assign('sayfa_baslik','Son Hareketler');

        include_once("db.php");
        $query = $db->prepare("SELECT * FROM son_hareketler ORDER BY id DESC");
        $query->execute();
        $sonuc= $query->fetchAll();


        $smarty->assign('son_hareketler',$sonuc);

        $smarty->display('default.tpl');
        include_once('parts/footer.php');
        break;


    default:
        $url="dashboard.php";
        echo "<script language=\"JavaScript\">window.location.href = '$url';</script>";die();
        break;

}