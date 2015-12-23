<?php /* Smarty version 3.1.24, created on 2015-07-01 16:42:40
         compiled from "D:/Apache/www/test/outletparfumcu.com/design/urun-detay.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175745593ee50563fc4_13417291%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59360f4504ea3635d512df1faf7da334b5f22e39' => 
    array (
      0 => 'D:/Apache/www/test/outletparfumcu.com/design/urun-detay.tpl',
      1 => 1435758149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175745593ee50563fc4_13417291',
  'variables' => 
  array (
    'meta' => 0,
    'header' => 0,
    'yanbolum' => 0,
    'urun_resmi' => 0,
    'urun_id' => 0,
    'urun_adi' => 0,
    'urun_fiyati' => 0,
    'urun_marka' => 0,
    'onerilen_urunler' => 0,
    'y' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5593ee5064ea10_36892716',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5593ee5064ea10_36892716')) {
function content_5593ee5064ea10_36892716 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '175745593ee50563fc4_13417291';
echo $_smarty_tpl->tpl_vars['meta']->value;?>


<body>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

	<section>
		<?php echo $_smarty_tpl->tpl_vars['yanbolum']->value;?>

				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<a href="<?php echo $_smarty_tpl->tpl_vars['urun_resmi']->value;?>
" rel="lightbox"><img src="<?php echo $_smarty_tpl->tpl_vars['urun_resmi']->value;?>
" alt="" /></a>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">

										</div>

									</div>

							</div>

						</div>
						<div class="col-sm-7">

							<?php echo '<script'; ?>
 type="text/javascript">
								$(document).ready(function(){
									$("#adet").bind("input", function(){
										var adet =$("#adet").val();
										var id=<?php echo $_smarty_tpl->tpl_vars['urun_id']->value;?>
;
										$("#adet_s").html("<a href='siparis-"+id+"-"+adet+"' id='adet_s'><button type='button' class='btn btn-fefault cart'> <i class='fa fa-shopping-cart'></i> Hemen Al! </button></a>");

									});
								});
							<?php echo '</script'; ?>
>

							<div class="product-information"><!--/product-information-->
								<img src="content/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $_smarty_tpl->tpl_vars['urun_adi']->value;?>
</h2>
								<p>Web ID: 2015<?php echo $_smarty_tpl->tpl_vars['urun_id']->value;?>
</p>
								<img src="content/images/product-details/rating.png" alt="" />
								<span>
									<span>TL  &#8378;<?php echo $_smarty_tpl->tpl_vars['urun_fiyati']->value;?>
</span>
									<label>Adet:</label>
									<input type="text" value="1" name="adet" id="adet" maxlength="1" />
									<a href="siparis-<?php echo $_smarty_tpl->tpl_vars['urun_id']->value;?>
-1" id="adet_s"><button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Hemen Al!
									</button></a>
								</span>
								<p><b>Stok Durumu:</b> Stokta Var</p>
								<p><b>Kampanyalar:</b> Ücretsiz Kargo, Kapıda Ödeme</p>
								<p><b>Marka:</b> <?php echo $_smarty_tpl->tpl_vars['urun_marka']->value;?>
</p>
								<img src="content/images/product-details/kapida.png"  alt="" width="150" height="60" />
								<img src="content/images/product-details/kargo.png"  alt="" width="150" height="60" />
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->


					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Önerilen Ürünler</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<?php
$_from = $_smarty_tpl->tpl_vars['onerilen_urunler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['y']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
$foreach_y_Sav = $_smarty_tpl->tpl_vars['y'];
?>
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<a href="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_url'];?>
" class=""><div class="productinfo text-center">
															<img src="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_resmi'];?>
" alt="" width="268" height="134" />
															<h2>&#8378; <?php echo $_smarty_tpl->tpl_vars['y']->value['urun_fiyati'];?>
</h2>
															<p><?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
</p>
															<a href="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_url'];?>
-u<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
														</div></a>
												</div>
											</div>
										</div>
									<?php
$_smarty_tpl->tpl_vars['y'] = $foreach_y_Sav;
}
?>
								</div>
							</div>
							<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
?>