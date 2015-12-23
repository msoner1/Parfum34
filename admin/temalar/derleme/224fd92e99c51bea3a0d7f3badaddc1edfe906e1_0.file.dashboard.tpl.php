<?php /* Smarty version 3.1.24, created on 2015-10-05 12:49:47
         compiled from "./temalar/dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:234262473561247bb7dad22_80771094%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '224fd92e99c51bea3a0d7f3badaddc1edfe906e1' => 
    array (
      0 => './temalar/dashboard.tpl',
      1 => 1443878869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234262473561247bb7dad22_80771094',
  'variables' => 
  array (
    'yetki_yok' => 0,
    'islem_yapilmayan_satislar_sayi' => 0,
    'fatura_kesilecekler_sayi' => 0,
    'kargoya_verilecekler_sayi' => 0,
    'basarili_satislar_sayi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_561247bb810da0_04115244',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561247bb810da0_04115244')) {
function content_561247bb810da0_04115244 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '234262473561247bb7dad22_80771094';
?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gösterge Paneli
                        </h1>
                    </div>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['yetki_yok']->value)) {?>
                <div class="alert alert-danger">
                    <strong>Bu işlemi yapmaya yetkiniz yok.</strong>
                </div>
                <?php }?>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-money fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['islem_yapilmayan_satislar_sayi']->value;?>
</div>
                                        <div>İşlem Yapılmayanlar</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sales.php?islem_yapilmayanlar">
                                <div class="panel-footer">
                                    <span class="pull-left">Detaylar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['fatura_kesilecekler_sayi']->value;?>
</div>
                                        <div>Fatura Kesilecekler</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sales.php?fatura_kesilecekler">
                                <div class="panel-footer">
                                    <span class="pull-left">Detaylar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-truck fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['kargoya_verilecekler_sayi']->value;?>
</div>
                                        <div>Kargoya Verilecekler</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sales.php?kargoya_verilecekler">
                                <div class="panel-footer">
                                    <span class="pull-left">Detaylar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['basarili_satislar_sayi']->value;?>
</div>
                                        <div>Basarili Satis</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sales.php?basarili">
                                <div class="panel-footer">
                                    <span class="pull-left">Detaylar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php }
}
?>