<?php /* Smarty version 3.1.24, created on 2015-10-07 01:29:22
         compiled from "/home/parfumco/public_html/design/urun-detay.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165483551256144b429b07b4_74890929%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8cd17a1ea3fb4066ab57305cbc137dd31268c5' => 
    array (
      0 => '/home/parfumco/public_html/design/urun-detay.tpl',
      1 => 1444170540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165483551256144b429b07b4_74890929',
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
  'unifunc' => 'content_56144b42daeca6_80991210',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56144b42daeca6_80991210')) {
function content_56144b42daeca6_80991210 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '165483551256144b429b07b4_74890929';
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

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="" data-toggle="tab">Yorumlar</a></li>
							</ul>
						</div>
						<div class="tab-content">

							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12"><?php if ($_smarty_tpl->tpl_vars['urun_id']->value == 1 || $_smarty_tpl->tpl_vars['urun_id']->value == 2 || $_smarty_tpl->tpl_vars['urun_id']->value == 3 || $_smarty_tpl->tpl_vars['urun_id']->value == 7) {?>
									<?php if ($_smarty_tpl->tpl_vars['urun_id']->value == 3 && $_smarty_tpl->tpl_vars['urun_id']->value != 7 && $_smarty_tpl->tpl_vars['urun_id']->value != 1 && $_smarty_tpl->tpl_vars['urun_id']->value != 2) {?>
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Cihat</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>06/10/2015</a></li>
									</ul>
									<p>Çok pahalı kardeş ama deyiyor.Güzel kokusu</p>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['urun_id']->value == 7 && $_smarty_tpl->tpl_vars['urun_id']->value != 3 && $_smarty_tpl->tpl_vars['urun_id']->value != 1 && $_smarty_tpl->tpl_vars['urun_id']->value != 2) {?>
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Melih başkan</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>19:23</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>03/09/2015</a></li>
									</ul>
									<p>Çok uygun fiyat ve kaliteli.</p>
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Soner</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>15:53</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>9/10/2015</a></li>
									</ul>
									<p>uzun süredir kullanıyorum edt olması sebebiyle ciddi bir kalıcılık beklemiyorum. ama son süreçte esans miktarını iyice düşürmüşler. önceden enazından sabahtan öğleye kadar kokuyu ara ara hissediyordum. şuanda sabah evden çıktığım anda kokunun etkisi gidiyor. sıktıktan 1 saat sonra üzerimi kokluyorum kokuyu alamıyorum</p>
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Rumuz yok</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>23:19</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>03/10/2015</a></li>
									</ul>
									<p>çok hafif günlük kullanımda öneriyorum. ailecek kullanıyoruz.</p>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['urun_id']->value == 1 && $_smarty_tpl->tpl_vars['urun_id']->value != 3 && $_smarty_tpl->tpl_vars['urun_id']->value != 7 && $_smarty_tpl->tpl_vars['urun_id']->value != 2) {?>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Aysu</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>20:01</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>09/09/2015</a></li>
										</ul>
										<p>Bence bayan parfümlerinden en iyisi üstüne tanımam.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Nergis</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>17:40</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>20/09/2015</a></li>
										</ul>
										<p>Sipariş verdim orjinal çıkar inşallah...</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>weber</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>18:35</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>01/10/2015</a></li>
										</ul>
										<p>Site çok turuncu olmamış mı.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>arıcı</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>22:18</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>01/10/2015</a></li>
										</ul>
										<p>Ürün bugün geldi.Barkodlu ve orjinal bu fiyata çok iyi.Parfumde baya kalıcı</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>eslem</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>16:01</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>19/09/2015</a></li>
										</ul>
										<p>Çok terettüt ettim sonuçta internet üzerinden alıyorum kokusunu bilmediğim bir ürün yorumlardan yola çıkarak aldım iyiki almışım ilk kullanmada erkek arkadaşım fark etti çok memnun kaldım tşk ederim</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Bayan</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>19:48</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>18/09/2015</a></li>
										</ul>
										<p>kız kardeşim bana hediye olarak almış. Kokusu çok kalıcı ve klasik bir koku ben esmer bir bayan olduğum için tenime uyduğunu düşünüyorum.Hoşuma gitti beğendim ancak bana göre kış kokusu .</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Emre</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>23:50</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>15/09/2015</a></li>
										</ul>
										<p>ürünü daha önceden eşim bir alışveriş merkezinde denemişti çok beğenmiştik tabi fiyatı 2buçuk katıydı burada bu fiyata görünce şok oldu ve hemen aldım. orijinalliği konusunda tereddüt edenler etmesinler kesinlikle... günlerce koku mis gibi kokuyor</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Çok Hoş</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>09:33</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>13/09/2015</a></li>
										</ul>
										<p>Mağazamızın en güzel bayanı ve müdürü tarafında kullanılan, kokusuyla bizi bizden alıp oradan oraya savuran başdöndüren alınası parfümdür kendileri..şiddetle tavsiye edolebilir.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>europa</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>20:01</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>09/09/2015</a></li>
										</ul>
										<p>uzun süre armani kullandıktan sonra bu parfümü aldım.ürün jelatinli orijinal kutusunda geldi.koku olarak fena değil.kışa daha uygun,kalıcılıgı bana göre çok iyi.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Seçkin</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>17:40</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>20/09/2015</a></li>
										</ul>
										<p>ürünü c.tesi istedim p.tesi elimde oldu. gayet kalıcı bir parfüm. saatlerdir kokusu gitmedi. orijinal paketi ile geldi. kokusu da çok güzel.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>ankaralı</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>20:35</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>29/09/2015</a></li>
										</ul>
										<p>Ürünü uygun fiyata görünce hemen sipariş verdim. Ürün orjinal jelatin ambalajında elime ulaştı. Bu fiyata, bu parfümü, başka yerde bulmak mümkün değil.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>ezgi kaya</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>21:18</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>02/10/2015</a></li>
										</ul>
										<p>Ben 4 senedir euphoria yi kullaniyorum. Suanki fiyatin 2 katindan fazla veriyordum. Siparisim gecte olsa elime bugun ulasti ve benim diger kozmetikcilerden aldigim siseyle ayni yani orjinal. Cok buyuk firsat bu kacirmayin derim:)</p>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['urun_id']->value == 2 && $_smarty_tpl->tpl_vars['urun_id']->value != 3 && $_smarty_tpl->tpl_vars['urun_id']->value != 1 && $_smarty_tpl->tpl_vars['urun_id']->value != 7) {?>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Güzellll</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>21:00</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>07/09/2015</a></li>
										</ul>
										<p>süper bi koku... cezbeden büyüleyen yönünün yanında ferah hafif ve kalıcı olması da artılar kazandırıyor... diğer tüm iddealı parfümlerin karşısında durabilecek bir koku.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Ahmo</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>13:07</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>08/09/2015</a></li>
										</ul>
										<p>Yakışırrr.3 günde teslim ettiler iyi gibi</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Fazla kalıcı</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>14:35</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>15/09/2015</a></li>
										</ul>
										<p>Bu kadar kalıcı olcağını beklemiyodum.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>enes</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>19:18</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>18/09/2015</a></li>
										</ul>
										<p>calvin klein gerçekten harika bir koku üretmiş.Normalde farklı ama herkesin hoşuna giden bir koku.Kalıcılığı normal ama daha iyi de olabilirdi</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>can</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>17:01</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>05/10/2015</a></li>
										</ul>
										<p>Site güvenilir mi yani?</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>Bravo</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>18:09</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>05/10/2015</a></li>
										</ul>
										<p>Paketli orjinal kutusunda geldi.Bu fiyata inanılmaz bu site çizgiyi bozmazsa iş yapar bravo.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>coder</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>18:35</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>01/10/2015</a></li>
										</ul>
										<p>Ceoyla görüşmek istiyorum.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>aslı</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>15:50</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>08/10/2015</a></li>
										</ul>
										<p>Sevgilimin doğum günüydü çok iyi fiyat aldım.Çokda güzel kokuyor.Ucuz yollu benim için iyi oldu.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i></a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>17:17</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>09/10/2015</a></li>
										</ul>
										<p>Orjinal beyler sapına kadar test ettim parfumu ilk defa alacaksanız ilk basta hoşunuza gitmeye bilir ama açılınca fena oluyor.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>tolga</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>17:40</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>10/09/2015</a></li>
										</ul>
										<p>Calvin kleinin ürettiği en iyi koku zaten çok satıyormuş.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>kro</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>18:35</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>10/10/2015</a></li>
										</ul>
										<p>Başka parfümlerdede kampanya yapıcakmısınız.</p>
										<ul>
											<li><a href=""><i class="fa fa-user"></i>cem yılmaz</a></li>
											<li><a href=""><i class="fa fa-clock-o"></i>23:54</a></li>
											<li><a href=""><i class="fa fa-calendar-o"></i>10/10/2015</a></li>
										</ul>
										<p>Çok Komik.Şaka şaka sitenizi beğendim güzel sipariş verdim umarım hızlı gelir orjinalliği konusunda şüphem yok.helal kardeşlerim.</p>
									<?php }?>

                                    <br /><br /><?php }?>
									<p><b>Yorum Yazın</b></p>

									<form action="" onsubmit="yorum()" method="post">
										<span>
											<input type="text" placeholder="İsminiz"/>
											<input type="email" placeholder="Email Adresiniz"/>
										</span>
										<textarea name="" ></textarea>
										<button type="submit" class="btn btn-default pull-right">
											Gönder
										</button>
									</form>
								</div>
							</div>

						</div>
					</div>

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