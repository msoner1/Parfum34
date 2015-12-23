<?php
ob_start();
session_start();
if(isset( $_GET['cikis'])){session_destroy(); header("Location:/parfum34_admin/index.php");die();}
require_once('libs/smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './temalar/';
$smarty->compile_dir = './temalar/derleme/';
?>

<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="none" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Parfum34 Yönetim</title>

    <!-- Bootstrap Core CSS -->
    <link href="content/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="content/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="content/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="content/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="content/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="content/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">

        function barkod(){
            var barkod_no=window.prompt("Bu siparişe ait kargo barkod numarasını girin.");
            var link = "?btn_kargoya_verildi="+document.getElementById("kargo").getAttribute("name")+"&barkod="+barkod_no;
            window.location=link;
        }

    </script>
</head>