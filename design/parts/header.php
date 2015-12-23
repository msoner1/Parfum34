<?php
/**
 * Created by PhpStorm.
 * User: msoner
 * Date: 24.6.2015
 * Time: 14:18
 */

?>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a><i class="fa fa-envelope"></i> bilgi@parfum34.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="content/images/home/logo.png" alt="parfum34.com logosu" width="139" height="39" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="siparis_takip.php" style="font-size: 15px"  "><i class="fa fa-truck"></i> Sipariş Takibi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" title="parfum34 anasayfası" >Anasayfa</a></li>
                            <li class="dropdown"><a href="1-urunler-uni" <?php if(isset($urun)){echo 'class="active"';} ?> title="Ürünlerimiz">Ürünler<i class="fa fa-angle-down"></i></a><ul role="menu" class="sub-menu">
                                    <li><a href="1-calvin-klein-uni">Calvin Klein</a></li>
                                    <li><a href="1-roberto-cavalli-uni">Roberto Cavalli</a></li>
                                    <li><a href="1-hugo-boss-uni">Hugo Boss</a></li>
                                    <li><a href="1-gucci-uni">Gucci</a></li>
                                    <li><a href="1-burberry-uni">Burberry</a></li>
                                    <li><a href="1-davidoff-uni">Davidoff</a></li>
                                    <li><a href="1-bvlgari-uni">Bvlgari</a></li>
                                </ul>
                            </li>
                            <li><a href="iletisim.php" <?php if(isset($iletisim)){echo 'class="active"';} ?> title="İletişim">İletişim</a></li>
                            <li><a href="blog.php#sss"  title="Sık Sorulan Sorular">S.S.S</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                         <span>100% Memnuniyet Garantisi</span>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
