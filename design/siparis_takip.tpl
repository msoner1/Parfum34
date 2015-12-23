
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
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

<style type="text/css">
    .takip-form{
        width: 70%;margin:20px auto;background-color: #dddddd;opacity: 0.8;
    }
    @media (max-width: 768px) {
        /* For mobile phones: */
        .takip-form {
            width: 95%;
        }
    }
</style>

</head><!--/head-->
<body>
{$header}
<section>
    <div class="takip-form">
        <h2 style="background-color: #FB8C00;height: 60px;padding: 10px"><i class="fa fa-truck"></i> Sipariş Takip Ekranı</h2><br/><br/>
        {if isset($hata_)}
            <h3 style="padding: 10px"> {$hata_}</h3>

        {/if}
        {if isset($musteri)}
            <h3 style="padding: 10px"> İsim Soyisim  :  {$musteri}</h3>
            <h3 style="padding: 10px"> Alınan Ürün  :  {$alinan_urun}</h3>
            <h3 style="padding: 10px"> Durumu  :  {$durumu}</h3>

        {/if}
        <form method="post" action="siparis_takip.php">
            <center> <input type="text" name="takip_no" placeholder="siparis takip numarasını girin" style="margin:20px auto;width: 80%;height: 50px;font-size: 30px;text-align: center" /><br />
                <button class="btn btn-primary" type="submit" style="width: 50%;margin:20px auto;height: 40px">Sorgula</button> </center>
        </form>
    </div>
</section>
{$footer}
</body>
</html>