{$meta}
<body>
{$header}
{if isset($siparis)}<h1 align="center"><font color="red">{$siparis}</font></h1>{/if}
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
                            <a href="http://{$url}calvin-klein-euphoria-men-100ml-u2" title="Calvin Klein Euphoria(Bay) parfüm" class=""><div class="col-sm-6">
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
                            <a href="http://{$url}calvin-klein-euphoria-women-100ml-u1" title="Calvin Klein Euphoria(Bayan) parfüm" class=""><div class="col-sm-6">
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
    {$yanbolum}

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Çok Satanlar</h2>
            {foreach from=$urunler item=v}
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <a href="{$v.urun_url}-u{$v.urun_id}" title="{$v.urun_adi} parfüm" class=""><div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{$v.urun_resmi}" alt="" />
                                    <h2>&#8378; {$v.urun_fiyati}</h2>
                                    <p>{$v.urun_adi}</p>
                                    <a href="siparis-{$v.urun_id}-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Hemen Al</a>
                                </div>
                            </div></a>
                    </div>
                </div>
            {/foreach}

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
                    {foreach from=$diesel_urunler item=y}
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="{$y.urun_url}-u{$y.urun_id}" title="{$y.urun_adi} parfüm" class=""><div class="productinfo text-center">
                                            <img src="{$y.urun_resmi}" alt="" width="268" height="134" />
                                            <h2>&#8378; {$y.urun_fiyati}</h2>
                                            <p>{$y.urun_adi}</p>
                                            <a href="siparis-{$y.urun_id}-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                </div>

                <div class="tab-pane fade" id="roberto" >
                    {foreach from=$roberto_urunler item=y}
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="{$y.urun_url}-u{$y.urun_id}" title="{$y.urun_adi} parfüm" class=""><div class="productinfo text-center">
                                            <img src="{$y.urun_resmi}" alt="" width="268" height="134" />
                                            <h2>&#8378; {$y.urun_fiyati}</h2>
                                            <p>{$y.urun_adi}</p>
                                            <a href="siparis-{$y.urun_id}-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                </div>

                <div class="tab-pane fade" id="calvin" >
                    {foreach from=$calvin_urunler item=y}
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="{$y.urun_url}-u{$y.urun_id}" title="{$y.urun_adi} parfüm" class=""><div class="productinfo text-center">
                                            <img src="{$y.urun_resmi}" alt="" width="268" height="134" />
                                            <h2>&#8378; {$y.urun_fiyati}</h2>
                                            <p>{$y.urun_adi}</p>
                                            <a href="siparis-{$y.urun_id}-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                </div>

                <div class="tab-pane fade" id="armani" >
                    {foreach from=$armani_urunler item=y}
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="{$y.urun_url}-u{$y.urun_id}" title="{$y.urun_adi} parfüm" class=""><div class="productinfo text-center">
                                            <img src="{$y.urun_resmi}" alt="" width="268" height="134" />
                                            <h2>&#8378; {$y.urun_fiyati}</h2>
                                            <p>{$y.urun_adi}</p>
                                            <a href="siparis-{$y.urun_id}-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                </div>

                <div class="tab-pane fade" id="paco" >
                    {foreach from=$paco_urunler item=y}
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <a href="{$y.urun_url}-u{$y.urun_id}" title="{$y.urun_adi} parfüm" class=""><div class="productinfo text-center">
                                            <img src="{$y.urun_resmi}" alt="" width="268" height="134" />
                                            <h2>&#8378; {$y.urun_fiyati}</h2>
                                            <p>{$y.urun_adi}</p>
                                            <a href="siparis-{$y.urun_id}-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    {/foreach}

                </div>
            </div>
        </div><!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">Yeni Ürünler</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        {foreach from=$yeni_urunler item=y}
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <a href="{$y.urun_url}-u{$y.urun_id}" title="{$y.urun_adi} parfüm" class=""><div class="productinfo text-center">
                                                <img src="{$y.urun_resmi}" alt="" width="268" height="134" />
                                                <h2>&#8378; {$y.urun_fiyati}</h2>
                                                <p>{$y.urun_adi}</p>
                                                <a href="siparis-{$y.urun_id}-1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sipariş Ver</a>
                                            </div></a>
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>

            </div>
        </div><!--/recommended_items-->

    </div>
    </div>
    </div>
</section>
{$footer}
</body>
</html>