<?php

if(!isset($_POST['kullaniciadi'])){session_start();session_destroy();header("Location:index.php?hata"); die();}
else{
    include_once("db.php");
    $query = $db->prepare('SELECT * FROM admins WHERE kull_adi=?');

    $kullanici_adi =$_POST['kullaniciadi'];

    $query->execute(array($kullanici_adi));
    $query->bindColumn('kull_adi',$db_kull_adi);
    $query->bindColumn('name',$name);
    $query->bindColumn('level',$level);
    $query->bindColumn('pass',$db_pass);
    $query->fetch(PDO::FETCH_BOUND);

if($db_kull_adi == $kullanici_adi){
    $sifre_md5 = md5($_POST['sifre']);

 if($db_pass==$sifre_md5){
    session_start();
    $_SESSION['name']=$name;
    $_SESSION['level']=$level;
    header("Location: dashboard.php");
 }
 else{
 session_start();
 session_destroy();
 header("Location:index.php?hata"); die();}

}
else{
         session_start();
         session_destroy();
         header("Location:index.php?hata"); die();
}
}

?>