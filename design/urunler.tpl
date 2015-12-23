{$meta}
<body>
{$header}
	<section id="advertisement">
		<div class="container">
			<img src="content/images/shop/advertisement.jpg" alt="parfum34 sıfır risk sistemi" />
		</div>
	</section>
	
	<section>
		{$yanbolum}
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">{if $marka ne "urunler"}{$marka} Marka{/if} Ürünler</h2>

						{foreach from=$urunler item=v}
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<a href="{$v.urun_url}-u{$v.urun_id}" title="{$v.urun_adi} parfüm" class=""><div class="single-products">
											<div class="productinfo text-center">
												<img src="{$v.urun_resmi}" alt="" />
												<h2>&#8378; {$v.urun_fiyati}</h2>
												<p>{$v.urun_adi}</p>
												<a href="{$v.urun_url}-u{$v.urun_id}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Hemen Al</a>
											</div>
										</div></a>
								</div>
							</div>
						{/foreach}
						{if $marka eq "urunler"}
						<ul class="pagination">
							<li {if $sayfa eq 1}class="active"{/if}><a href="1-urunler-uni">1</a></li>
							<li {if $sayfa eq 2}class="active"{/if}><a href="2-urunler-uni">2</a></li>
							<li {if $sayfa eq 3}class="active"{/if}><a href="3-urunler-uni">3</a></li>
							<li {if $sayfa eq 4}class="active"{/if}><a href="4-urunler-uni">4</a></li>
							<li {if $sayfa eq 5}class="active"{/if}><a href="5-urunler-uni">5</a></li>
							<li {if $sayfa eq 6}class="active"{/if}><a href="6-urunler-uni">6</a></li>
							<li {if $sayfa eq 7}class="active"{/if}><a href="7-urunler-uni">7</a></li>
							<li><a href="7-urunler-uni">&raquo;</a></li>
						</ul>
						{/if}
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

{$footer}
</body>
</html>