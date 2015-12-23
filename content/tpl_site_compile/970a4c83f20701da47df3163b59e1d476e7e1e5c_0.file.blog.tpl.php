<?php /* Smarty version 3.1.24, created on 2015-10-07 22:12:32
         compiled from "/home/parfumco/public_html/design/blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:136757372256156ea066e673_18736777%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '970a4c83f20701da47df3163b59e1d476e7e1e5c' => 
    array (
      0 => '/home/parfumco/public_html/design/blog.tpl',
      1 => 1444245132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136757372256156ea066e673_18736777',
  'variables' => 
  array (
    'meta' => 0,
    'header' => 0,
    'yanbolum' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56156ea0b83f24_70897494',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56156ea0b83f24_70897494')) {
function content_56156ea0b83f24_70897494 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '136757372256156ea066e673_18736777';
echo $_smarty_tpl->tpl_vars['meta']->value;?>

<body>
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<section>
    <?php echo $_smarty_tpl->tpl_vars['yanbolum']->value;?>

            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Parfum34 Blog</h2>
                    <div class="single-blog-post">
                        <h3>Sadece Parfum</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i>parfum34.com</li>
                                <li><i class="fa fa-clock-o"></i>13.50</li>
                                <li><i class="fa fa-calendar"></i> 15 Temmuz, 2015</li>
                            </ul>
                        </div>
                            <img src="content/images/blog/blog-one.jpg" alt="parfumler" width="100%" height="420">
                        <h2 id="sss"><font color="#FE980F">Sık Sorulan Sorular</font></h2>
                        <p>
                            <b>1- Sitenizdeki parfümler orjinal mi?</b><br><br> Elbette.Sipariş ettiğiniz ürün elinize ulaştığında bu konu ile ilgili en ufak bir şüphe bile duymayacaksınız</p> <br>

                        <p>
                            <b>2- Urun kaç gunde elime ulaşır?</b><br><br> Eğer urun siparişinizi saat 16.00'a kadar verdiyseniz aynı gün kargoya veriyoruz.</p> <br>

                        <p>
                            <b>3- Kapıda kredi kartı ile ödeyebilir miyim?</b><br><br> Malesef şu anlık pos anlaşmamız olmadığından sadece nakit ödeyebilirsiniz.Çok yakında kredi kartı ile de dağıtım yapacağız.</p> <br>

                        <p>
                            <b>4- Aldığım ürünü nasıl iade ederim?</b><br><br> Parfumeri ürünleri kişisel kullanım ve kozmetik ürünü statüsünde olduğundan paketi ve kutusu açılmış olan ürünün iadesi yapılamamaktadır.Fakat ürünün paketini açmadıysanız iletişim sayfamızdan bizimle irtibata geçip kolayca iade edebilirsiniz.</p> <br>
                        </p>
                        <h2 id="bilgi"><font color="#FE980F">Parfum34 Hakkında</font></h2>
                        <p>
                           Parfum34.com kurulduğu ilk günden itibaren müşteri memnuniyetini esas almaktadır.Bir çok firmadan destek alınarak kurulmuş olan firmamız şuanlık gelişme sürecinde olmasına rağmen 3.000'i aşkın ürün satmayı başarmıştır. </p> <br>

                        <p>
                            Parfum34'un bu başarısının altında elbetteki müşterilerimizin yaptıkları mutlu geri dönüşler yatmaktadır.Yapılacak yatırımlarla tüm dünyaya yayılmayı hedefliyoruz.Bu hedefte başarılı olacağımıza inanıyoruz.</p> <br>


                        <h2 id="ortaklik"><font color="#FE980F">Ortaklık Programı</font></h2>
                        <p>
                            Eğer sizinde bir parfumeri dükkanınız varsa ürünlerinizi sitemiz üzerinden pazarlayabiliriz.Sınırlı sayıda kişi ile yapılacak bu program ile belirli bir kitleye ulaşamayan ürünlerinizi müşterilere ulaştırarak satışlarınızı artırabilirsiniz.Acele edin ve iletişim sayfamızdan bizimle irtibata geçin.</p> <br>


                    </div>
                </div><!--/blog-post-area-->
            </div>
        </div>
    </div>
</section>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>
</html><?php }
}
?>