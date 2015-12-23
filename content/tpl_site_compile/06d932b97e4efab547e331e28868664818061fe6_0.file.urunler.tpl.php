<?php /* Smarty version 3.1.24, created on 2015-07-01 17:38:20
         compiled from "D:/Apache/www/test/outletparfumcu.com/design/urunler.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:279785593fb5c90f002_06220928%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06d932b97e4efab547e331e28868664818061fe6' => 
    array (
      0 => 'D:/Apache/www/test/outletparfumcu.com/design/urunler.tpl',
      1 => 1435760754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279785593fb5c90f002_06220928',
  'variables' => 
  array (
    'meta' => 0,
    'header' => 0,
    'yanbolum' => 0,
    'marka' => 0,
    'urunler' => 0,
    'v' => 0,
    'sayfa' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5593fb5ca9fbe7_98033791',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5593fb5ca9fbe7_98033791')) {
function content_5593fb5ca9fbe7_98033791 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '279785593fb5c90f002_06220928';
echo $_smarty_tpl->tpl_vars['meta']->value;?>

<body>
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

	<section id="advertisement">
		<div class="container">
			<img src="content/images/shop/advertisement.jpg" alt="parfum34 sıfır risk sistemi" />
		</div>
	</section>
	
	<section>
		<?php echo $_smarty_tpl->tpl_vars['yanbolum']->value;?>

				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><?php if ($_smarty_tpl->tpl_vars['marka']->value != "urunler") {
echo $_smarty_tpl->tpl_vars['marka']->value;?>
 Marka<?php }?> Ürünler</h2>

						<?php
$_from = $_smarty_tpl->tpl_vars['urunler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['urun_url'];?>
-u<?php echo $_smarty_tpl->tpl_vars['v']->value['urun_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['urun_adi'];?>
 parfüm" class=""><div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['urun_resmi'];?>
" alt="" />
												<h2>&#8378; <?php echo $_smarty_tpl->tpl_vars['v']->value['urun_fiyati'];?>
</h2>
												<p><?php echo $_smarty_tpl->tpl_vars['v']->value['urun_adi'];?>
</p>
												<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['urun_url'];?>
-u<?php echo $_smarty_tpl->tpl_vars['v']->value['urun_id'];?>
" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Hemen Al</a>
											</div>
										</div></a>
								</div>
							</div>
						<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
						<?php if ($_smarty_tpl->tpl_vars['marka']->value == "urunler") {?>
						<ul class="pagination">
							<li <?php if ($_smarty_tpl->tpl_vars['sayfa']->value == 1) {?>class="active"<?php }?>><a href="1-urunler-uni">1</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['sayfa']->value == 2) {?>class="active"<?php }?>><a href="2-urunler-uni">2</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['sayfa']->value == 3) {?>class="active"<?php }?>><a href="3-urunler-uni">3</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['sayfa']->value == 4) {?>class="active"<?php }?>><a href="4-urunler-uni">4</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['sayfa']->value == 5) {?>class="active"<?php }?>><a href="5-urunler-uni">5</a></li>
							<li><a href="5-urunler-uni">&raquo;</a></li>
						</ul>
						<?php }?>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
?>