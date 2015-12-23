<?php /* Smarty version 3.1.24, created on 2015-10-07 17:45:34
         compiled from "/home/parfumco/public_html/design/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:917521325615300e932f72_69275908%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c1b65a9f6624ed02cafc36463b5fea66d17bf2' => 
    array (
      0 => '/home/parfumco/public_html/design/index.tpl',
      1 => 1444229125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '917521325615300e932f72_69275908',
  'variables' => 
  array (
    'meta' => 0,
    'header' => 0,
    'siparis' => 0,
    'url' => 0,
    'yanbolum' => 0,
    'urunler' => 0,
    'v' => 0,
    'diesel_urunler' => 0,
    'y' => 0,
    'roberto_urunler' => 0,
    'calvin_urunler' => 0,
    'armani_urunler' => 0,
    'paco_urunler' => 0,
    'yeni_urunler' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5615300eb06ba7_74835865',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5615300eb06ba7_74835865')) {
function content_5615300eb06ba7_74835865 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '917521325615300e932f72_69275908';
echo $_smarty_tpl->tpl_vars['meta']->value;?>

<body>
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['siparis']->value)) {?><h1 align="center"><font color="red"><?php echo $_smarty_tpl->tpl_vars['siparis']->value;?>
</font></h1><?php }?>
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="http://<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
calvin-klein-euphoria-men-100ml-u2" title="Calvin Klein Euphoria(Bay) parfüm" class=""><div class="col-sm-6">
                                    <h1><span>Calvin Klein</span> Euphoria(Bay)</h1>
                                    <h2>Açılışa Özel Sadece 69Tl</h2>
                                    <p>2015 yılının en çok satan parfümü olan Calvin Klein Euphoria kısa bir süre için sadece 69TL Üstelik kapıda güvenli ödeme seçeneği ile. </p>
                                    <button type="button" class="btn btn-default get">Siparis Ver</button>
                                </div></a>
                            <div class="col-sm-6">
                                <img src="content/images/home/ck5.jpg" class="girl img-responsive" alt="" />
                                <img src="content/images/home/pricing.png"  class="pricing" alt="Calvin Klein parfümlerde büyük kampanya sadece 59Tl" />
                            </div>
                        </div>
                        <div class="item">
                            <a href="http://<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
calvin-klein-euphoria-women-100ml-u1" title="Calvin Klein Euphoria(Bayan) parfüm" class=""><div class="col-sm-6">
                                    <h1><span>Calvin Klein</span> Euphoria(Bayan)</h1>
                                    <h2>Açılışa Özel Sadece 69Tl</h2>
                                    <p>Sitemizin açılısına özel Calvin Klein parfümlerde büyük kampanya sadece 69Tl Siparis verin kapınıza gelsin KAPIDA ÖDEYIN. </p>
                                    <button type="button" class="btn btn-default get">Siparis Ver</button>
                                </div></a>
                            <div class="col-sm-6">
                                <img src="content/images/home/ck1.jpg" class="girl img-responsive" alt="" />
                                <img src="content/images/home/pricing.png"  class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Parfum</span>34.com</h1>
                                <h2>Kapıda Güvenli Ödeme</h2>
                                <p>Kapıda güvenli ödeme sistemi sayesinde ürün kapınıza geldiğinde paketi açıp kontrol ettikten sonra ödeme yapabilirsiniz.</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="content/images/home/tesekkur.jpg" class="girl img-responsive" alt="Teşekkür ederiz" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <?php echo $_smarty_tpl->tpl_vars['yanbolum']->value;?>


    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Çok Satanlar</h2>
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
                                    <a href="siparis-<?php echo $_smarty_tpl->tpl_vars['v']->value['urun_id'];?>
-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Hemen Al</a>
                                </div>
                            </div></a>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

        </div><!--features_items-->

        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#diesel" data-toggle="tab">Diesel</a></li>
                    <li><a href="#roberto" data-toggle="tab">Roberto Cavalli</a></li>
                    <li><a href="#calvin" data-toggle="tab">Calvin Klein</a></li>
                    <li><a href="#armani" data-toggle="tab">Giorgio Armani</a></li>
                    <li><a href="#paco" data-toggle="tab">Paco Rabanne</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="diesel" >
                    <?php
$_from = $_smarty_tpl->tpl_vars['diesel_urunler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['y']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
$foreach_y_Sav = $_smarty_tpl->tpl_vars['y'];
?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_url'];?>
-u<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
 parfüm" class=""><div class="productinfo text-center">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_resmi'];?>
" alt="" width="268" height="134" />
                                            <h2>&#8378; <?php echo $_smarty_tpl->tpl_vars['y']->value['urun_fiyati'];?>
</h2>
                                            <p><?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
</p>
                                            <a href="siparis-<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['y'] = $foreach_y_Sav;
}
?>

                </div>

                <div class="tab-pane fade" id="roberto" >
                    <?php
$_from = $_smarty_tpl->tpl_vars['roberto_urunler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['y']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
$foreach_y_Sav = $_smarty_tpl->tpl_vars['y'];
?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_url'];?>
-u<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
 parfüm" class=""><div class="productinfo text-center">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_resmi'];?>
" alt="" width="268" height="134" />
                                            <h2>&#8378; <?php echo $_smarty_tpl->tpl_vars['y']->value['urun_fiyati'];?>
</h2>
                                            <p><?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
</p>
                                            <a href="siparis-<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['y'] = $foreach_y_Sav;
}
?>

                </div>

                <div class="tab-pane fade" id="calvin" >
                    <?php
$_from = $_smarty_tpl->tpl_vars['calvin_urunler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['y']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
$foreach_y_Sav = $_smarty_tpl->tpl_vars['y'];
?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_url'];?>
-u<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
 parfüm" class=""><div class="productinfo text-center">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_resmi'];?>
" alt="" width="268" height="134" />
                                            <h2>&#8378; <?php echo $_smarty_tpl->tpl_vars['y']->value['urun_fiyati'];?>
</h2>
                                            <p><?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
</p>
                                            <a href="siparis-<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['y'] = $foreach_y_Sav;
}
?>

                </div>

                <div class="tab-pane fade" id="armani" >
                    <?php
$_from = $_smarty_tpl->tpl_vars['armani_urunler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['y']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
$foreach_y_Sav = $_smarty_tpl->tpl_vars['y'];
?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_url'];?>
-u<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
 parfüm" class=""><div class="productinfo text-center">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_resmi'];?>
" alt="" width="268" height="134" />
                                            <h2>&#8378; <?php echo $_smarty_tpl->tpl_vars['y']->value['urun_fiyati'];?>
</h2>
                                            <p><?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
</p>
                                            <a href="siparis-<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['y'] = $foreach_y_Sav;
}
?>

                </div>

                <div class="tab-pane fade" id="paco" >
                    <?php
$_from = $_smarty_tpl->tpl_vars['paco_urunler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['y']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
$foreach_y_Sav = $_smarty_tpl->tpl_vars['y'];
?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_url'];?>
-u<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
 parfüm" class=""><div class="productinfo text-center">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_resmi'];?>
" alt="" width="268" height="134" />
                                            <h2>&#8378; <?php echo $_smarty_tpl->tpl_vars['y']->value['urun_fiyati'];?>
</h2>
                                            <p><?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
</p>
                                            <a href="siparis-<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
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
        </div><!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">Yeni Ürünler</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <?php
$_from = $_smarty_tpl->tpl_vars['yeni_urunler']->value;
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
-u<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
 parfüm" class=""><div class="productinfo text-center">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_resmi'];?>
" alt="" width="268" height="134" />
                                                <h2>&#8378; <?php echo $_smarty_tpl->tpl_vars['y']->value['urun_fiyati'];?>
</h2>
                                                <p><?php echo $_smarty_tpl->tpl_vars['y']->value['urun_adi'];?>
</p>
                                                <a href="siparis-<?php echo $_smarty_tpl->tpl_vars['y']->value['urun_id'];?>
-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
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