<?php

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

session_start();
$_SESSION['giris']=1;

$tpl->display("./design/blog.tpl");
?>