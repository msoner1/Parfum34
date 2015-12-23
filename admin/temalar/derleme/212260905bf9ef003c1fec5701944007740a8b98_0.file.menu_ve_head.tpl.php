<?php /* Smarty version 3.1.24, created on 2015-10-05 17:52:46
         compiled from "./parts/menu_ve_head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:145567470356128ebe562085_56054910%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '212260905bf9ef003c1fec5701944007740a8b98' => 
    array (
      0 => './parts/menu_ve_head.tpl',
      1 => 1444056753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145567470356128ebe562085_56054910',
  'variables' => 
  array (
    'admin_name' => 0,
    'admin_level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56128ebe93a2c9_55849841',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56128ebe93a2c9_55849841')) {
function content_56128ebe93a2c9_55849841 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '145567470356128ebe562085_56054910';
?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">Parfüm34 Yönetim Paneli</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="dashboard.php?cikis"><i class="fa fa-fw fa-power-off"></i> Çıkış</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Gösterge Paneli</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-money"></i> Satışlar <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <?php if ($_smarty_tpl->tpl_vars['admin_level']->value == 1) {?>
                        <li>
                            <a href="sales.php?islem_yapilmayanlar">İşlem Yapılmayanlar</a>
                        </li>
                        <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['admin_level']->value != 3) {?>
                        <li>
                            <a href="sales.php?fatura_kesilecekler">Fatura Kesilecekler</a>
                        </li>
                            <?php }?>
                        <li>
                            <a href="sales.php?kargoya_verilecekler">Kargoya Verilecekler</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['admin_level']->value == 1) {?>
                        <li>
                            <a href="sales.php?iptal">İptal Edilenler</a>
                        </li>
                        <li>
                            <a href="sales.php?basarili">Basarili Satislar</a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['admin_level']->value == 1) {?>
                <li>
                    <a href="default.php?mesajlar"><i class="fa fa-fw fa-envelope-square"></i> Mesajlar</a>
                </li>
                <li>
                    <a href="default.php?son_hareketler"><i class="fa fa-fw fa-users"></i> Son Hareketler</a>
                </li>
                <?php }?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
<?php }
}
?>