<?php
include_once('parts/header.php');
include_once('parts/menu_ve_head.php');
if(isset( $_GET['cikis'])){session_destroy(); header("Location:/parfum34_admin/index.php");die();}
if(isset($_SESSION['name'])){

    $smarty->assign('admin_name',$_SESSION['name']);
    $smarty->assign('admin_level',$_SESSION['level']);

}

else{ session_destroy(); header("Location:/parfum34_admin");

}
$gelen =key($_GET);
$gelen = htmlspecialchars($gelen);

switch($gelen) {

    case 'islem_yapilmayanlar':
        if($_SESSION['level']!=1){
            header("Location:/parfum34_admin/dashboard.php?yetki_yok");
        }

        $smarty->assign('islem_yapilmayanlar','1');
        $smarty->assign('sayfa_baslik','İşlem Yapilmayan Satışlar');

        include_once("db.php");
        $query = $db->prepare("SELECT * FROM siparis WHERE statu=0 ORDER BY siparis_id DESC");
        $query->execute();
        $sonuc= $query->fetchAll();

        $smarty->assign('siparisler',$sonuc);

        $smarty->display('sales.tpl');
        include_once('parts/footer.php');
        break;



    case 'fatura_kesilecekler':
        if($_SESSION['level']==3){
            header("Location:/parfum34_admin/dashboard.php?yetki_yok");
        }


        $smarty->assign('fatura_kesilecekler','1');
        $smarty->assign('sayfa_baslik','Fatura Kesilecek Satışlar');

        include_once("db.php");
        $query = $db->prepare("SELECT * FROM siparis WHERE statu=1 ORDER BY siparis_id DESC");
        $query->execute();
        $sonuc= $query->fetchAll();


        $smarty->assign('siparisler',$sonuc);

        $smarty->display('sales.tpl');
        include_once('parts/footer.php');
        break;




    case 'kargoya_verilecekler':

        $smarty->assign('kargoya_verilecekler','1');
        $smarty->assign('sayfa_baslik','Kargoya Verilecek Satışlar');

        include_once("db.php");
        $query = $db->prepare("SELECT * FROM siparis WHERE statu=2 ORDER BY siparis_id DESC");
        $query->execute();
        $sonuc= $query->fetchAll();


        $smarty->assign('siparisler',$sonuc);

        $smarty->display('sales.tpl');
        include_once('parts/footer.php');
        break;




    case 'iptal':

        if($_SESSION['level']!=1){
            header("Location:/parfum34_admin/dashboard.php?yetki_yok");
        }

        $smarty->assign('iptal','1');
        $smarty->assign('sayfa_baslik','İptal Edilen Satışlar');

        include_once("db.php");
        $query = $db->prepare("SELECT * FROM siparis WHERE statu=4 ORDER BY siparis_id DESC");
        $query->execute();
        $sonuc= $query->fetchAll();


        $smarty->assign('siparisler',$sonuc);

        $smarty->display('sales.tpl');
        include_once('parts/footer.php');
        break;




    case 'basarili':

        if($_SESSION['level']!=1){
            header("Location:/parfum34_admin/dashboard.php?yetki_yok");
        }

        $smarty->assign('basarili','1');
        $smarty->assign('sayfa_baslik','Basarili Satışlar');

        include_once("db.php");
        $query = $db->prepare("SELECT * FROM siparis WHERE statu=3 ORDER BY siparis_id DESC");
        $query->execute();
        $sonuc= $query->fetchAll();


        $smarty->assign('siparisler',$sonuc);

        $smarty->display('sales.tpl');
        include_once('parts/footer.php');
        break;




    ////BUTON İŞLEMLERİ YAPILIP İLGİLİ SAYFAYA YÖNLENDİRİLECEK


    case 'btn_iptal':
        $gelen_id = $_GET['btn_iptal'];
        include_once("db.php");

        $query = $db->prepare("UPDATE siparis SET statu=4 WHERE siparis_id=?");
        $query->execute(array($gelen_id));

        $hareket = $_SESSION['name']." isimli kullanıcı ".$gelen_id." numaralı siparisi iptal etti.";
        $query = $db->prepare("INSERT INTO son_hareketler (hareket) VALUES (?)");
        $query->execute(array($hareket));

        header("Location:/parfum34_admin/sales.php?islem_yapilmayanlar");
        break;


    case 'btn_fatura_kes':
        $gelen_id = $_GET['btn_fatura_kes'];
        include_once("db.php");
        $query = $db->prepare("UPDATE siparis SET statu=1 WHERE siparis_id=?");
        $query->execute(array($gelen_id));

        $hareket = $_SESSION['name']." isimli kullanıcı ".$gelen_id." numaralı siparisin statüsünü işlem yapılmayanlardan fatura kesileceklere değiştirdi.";
        $query = $db->prepare("INSERT INTO son_hareketler (hareket) VALUES (?)");
        $query->execute(array($hareket));

        header("Location:/parfum34_admin/sales.php?islem_yapilmayanlar");
        break;

    case 'btn_kargoya_gonder':
        $gelen_id = $_GET['btn_kargoya_gonder'];
        include_once("db.php");
        $query = $db->prepare("UPDATE siparis SET statu=2 WHERE siparis_id=?");
        $query->execute(array($gelen_id));

        $hareket = $_SESSION['name']." isimli kullanıcı ".$gelen_id." numaralı siparisin statüsünü fatura kesileceklerden kargoya verileceklere değiştirdi.";
        $query = $db->prepare("INSERT INTO son_hareketler (hareket) VALUES (?)");
        $query->execute(array($hareket));

        header("Location:/parfum34_admin/sales.php?fatura_kesilecekler");
        break;

    case 'btn_kargoya_verildi':
        $gelen_id = $_GET['btn_kargoya_verildi'];
        $gelen_barkod = $_GET['barkod'];
        include_once("db.php");
        $query = $db->prepare("UPDATE siparis SET statu=3 , barkod_no=? WHERE siparis_id=?");
        $query->execute(array($gelen_barkod,$gelen_id));

        $hareket = $_SESSION['name']." isimli kullanıcı ".$gelen_id." numaralı siparisin statüsünü kargoya verildi(basarili satis) olarak değiştirdi.";
        $query = $db->prepare("INSERT INTO son_hareketler (hareket) VALUES (?)");
        $query->execute(array($hareket));

        header("Location:/parfum34_admin/sales.php?kargoya_verilecekler");
        break;


    default:
        $url="dashboard.php";
        echo "<script language=\"JavaScript\">window.location.href = '$url';</script>";die();
        break;


}