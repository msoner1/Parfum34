<?php
/**
 * Created by PhpStorm.
 * User: msoner
 * Date: 24.6.2015
 * Time: 14:03
 */
require('includes/smarty.php');
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Parfum34.com olarak büyük firmaların sponsorluğunda büyük kampanyalar yapmaya devam ediyoruz.Artık yeni bir parfumcunuz var Üstelik sadece parfum satıyoruz.">
    <meta name="author" content="parfum34">
    <title>Parfum34 Sadece Parfüm</title>
    <link href="content/css/bootstrap.min.css" rel="stylesheet">
    <link href="content/css/font-awesome.min.css" rel="stylesheet">
    <link href="content/css/prettyPhoto.css" rel="stylesheet">
    <link href="content/css/animate.css" rel="stylesheet">
	<link href="content/css/main.css" rel="stylesheet">
	<link href="content/lightbox/css/lightbox.css" rel="stylesheet">
	<link href="content/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <link rel="shortcut icon" href="content/images/ico/favicon.ico">

    <script src="js/jquery.js"></script>
    <script src="content/lightbox/js/lightbox.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        $(function(){
            document.getElementById('email_buton').onclick =
                function () { alert('Emailiniz sistemimize kayıt edilmiştir.Teşekkürler.'); };
        });

    </script>

    <script type="text/javascript">
        $(document).ready( function() {
            $("#main-contact-form").submit(function() {
                if ($("#ad_soyad").val()=='') {
                    alert("Lütfen, Ad Soyadınızı Giriniz.");
                    return false;
                }
                if ($("#tel").val()=='') {
                    alert("Lütfen, Telefonunuzu giriniz.");
                    return false;
                }
                if ($("#semt").val()=='') {
                    alert("Lütfen, Semt adını giriniz.");
                    return false;
                }
                if ($("#adres").val()=='') {
                    alert("Lütfen, Adresinizi yazın.");
                    return false;
                }
            });
        });
        function yorum() {
            alert('Yorumunuz incelendikten sonra yayına alınacaktır.Teşekkürler.');
        }

    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-64292850-2', 'auto');
        ga('send', 'pageview');

    </script>

    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
            _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="//v2.zopim.com/?3NDW8gEka2ldmgqkiDuHPV1tfSuDCy2D";z.t=+new Date;$.
                type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->


</head><!--/head-->