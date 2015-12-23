<?php /* Smarty version 3.1.24, created on 2015-10-07 19:21:15
         compiled from "/home/parfumco/public_html/design/siparis_takip.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7943510995615467b47f826_42970309%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1065bb19623dcc04826e1dd21b96a8fef81a0a1' => 
    array (
      0 => '/home/parfumco/public_html/design/siparis_takip.tpl',
      1 => 1444234804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7943510995615467b47f826_42970309',
  'variables' => 
  array (
    'header' => 0,
    'hata_' => 0,
    'musteri' => 0,
    'alinan_urun' => 0,
    'durumu' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5615467b50abc5_22545954',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5615467b50abc5_22545954')) {
function content_5615467b50abc5_22545954 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7943510995615467b47f826_42970309';
?>

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
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <link rel="shortcut icon" href="content/images/ico/favicon.ico">

    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="content/lightbox/js/lightbox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.scrollUp.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

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
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<section>
    <div class="takip-form">
        <h2 style="background-color: #FB8C00;height: 60px;padding: 10px"><i class="fa fa-truck"></i> Sipariş Takip Ekranı</h2><br/><br/>
        <?php if (isset($_smarty_tpl->tpl_vars['hata_']->value)) {?>
            <h3 style="padding: 10px"> <?php echo $_smarty_tpl->tpl_vars['hata_']->value;?>
</h3>

        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['musteri']->value)) {?>
            <h3 style="padding: 10px"> İsim Soyisim  :  <?php echo $_smarty_tpl->tpl_vars['musteri']->value;?>
</h3>
            <h3 style="padding: 10px"> Alınan Ürün  :  <?php echo $_smarty_tpl->tpl_vars['alinan_urun']->value;?>
</h3>
            <h3 style="padding: 10px"> Durumu  :  <?php echo $_smarty_tpl->tpl_vars['durumu']->value;?>
</h3>

        <?php }?>
        <form method="post" action="siparis_takip.php">
            <center> <input type="text" name="takip_no" placeholder="siparis takip numarasını girin" style="margin:20px auto;width: 80%;height: 50px;font-size: 30px;text-align: center" /><br />
                <button class="btn btn-primary" type="submit" style="width: 50%;margin:20px auto;height: 40px">Sorgula</button> </center>
        </form>
    </div>
</section>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
?>