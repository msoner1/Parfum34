<?php
$iletisim = 1;
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



if(isset($_POST['submit'])) {
    $isim = strip_tags($_POST['name']);
    $konu = strip_tags($_POST['subject']);
    $email =strip_tags($_POST['email']);
    $mesaj =strip_tags($_POST['message']);



    $baglan = @mysql_connect($host, $dbuser, $dbpass);
    mysql_query("SET NAMES UTF8");
    if (!$baglan) die ("Mysql Baglantisi Yapilamadi");
    @mysql_select_db($database, $baglan) or die ("Veri Tabanina Baglanti Yapilamadi");
    $isim = mysql_real_escape_string($isim);
    $konu = mysql_real_escape_string($konu);
    $email =mysql_real_escape_string($email);
    $mesaj =mysql_real_escape_string($mesaj);
    $sqlsorgu = mysql_query("INSERT INTO iletisim (isim,konu,mesaj,email) VALUES ('".$isim."','".$konu."','".$mesaj."','".$email."')");
    $basari =1;
    echo "<center><h1>Mesajınız Alınmıştır.Teşekkür Ederiz.</h1></center>";
}



$tpl->display("./design/iletisim.tpl");


?>
