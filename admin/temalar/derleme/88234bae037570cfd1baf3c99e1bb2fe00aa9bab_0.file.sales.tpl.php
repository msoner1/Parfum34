<?php /* Smarty version 3.1.24, created on 2015-10-07 20:52:09
         compiled from "./temalar/sales.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:36970572356155bc900cdf5_83264285%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88234bae037570cfd1baf3c99e1bb2fe00aa9bab' => 
    array (
      0 => './temalar/sales.tpl',
      1 => 1444240321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36970572356155bc900cdf5_83264285',
  'variables' => 
  array (
    'sayfa_baslik' => 0,
    'islem_yapilmayanlar' => 0,
    'siparisler' => 0,
    'v' => 0,
    'fatura_kesilecekler' => 0,
    'kargoya_verilecekler' => 0,
    'iptal' => 0,
    'basarili' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56155bc93a2cd3_88807604',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56155bc93a2cd3_88807604')) {
function content_56155bc93a2cd3_88807604 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '36970572356155bc900cdf5_83264285';
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $_smarty_tpl->tpl_vars['sayfa_baslik']->value;?>

                </h1>
            </div>
        </div>

        <div id="row">
            <table class="table table-hover table-bordered table-responsive">
                <?php if (isset($_smarty_tpl->tpl_vars['islem_yapilmayanlar']->value)) {?>
                <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th><th>İşlem Yap</th></tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['siparisler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_adsoyad'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 2) {?>Calvin Klein Euphoria For Men(100ml)<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 1) {?>Calvin Klein Euphoria Women(100ml)<?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'];
}?><br/>adeti:<?php echo $_smarty_tpl->tpl_vars['v']->value['notu'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_telefon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['adres'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_zamani'];?>
</td><td><a href="?btn_fatura_kes=<?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
"><button class="btn btn-success">Fatura Kes</button></a><a href="?btn_iptal=<?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
"><button class="btn btn-danger">İptal</button></a></td></tr>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                </tbody>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['fatura_kesilecekler']->value)) {?>
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th><th>İşlem Yap</th></tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['siparisler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_adsoyad'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 2) {?>Calvin Klein Euphoria For Men(100ml)<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 1) {?>Calvin Klein Euphoria Women(100ml)<?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'];
}?><br/>adeti:<?php echo $_smarty_tpl->tpl_vars['v']->value['notu'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_telefon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['adres'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_zamani'];?>
</td><td><a href="?btn_kargoya_gonder=<?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
"><button class="btn btn-primary">Kargoya Gönder</button></a></td></tr>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    </tbody>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['kargoya_verilecekler']->value)) {?>
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th><th>İşlem Yap</th></tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['siparisler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_adsoyad'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 2) {?>Calvin Klein Euphoria For Men(100ml)<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 1) {?>Calvin Klein Euphoria Women(100ml)<?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'];
}?><br/>adeti:<?php echo $_smarty_tpl->tpl_vars['v']->value['notu'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_telefon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['adres'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_zamani'];?>
</td><td><button class="btn btn-primary" id="kargo" name="<?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
" onclick="barkod()">Kargoya Verildi</button></a></td></tr>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    </tbody>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['iptal']->value)) {?>
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th></tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['siparisler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_adsoyad'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 2) {?>Calvin Klein Euphoria For Men(100ml)<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 1) {?>Calvin Klein Euphoria Women(100ml)<?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'];
}?><br/>adeti:<?php echo $_smarty_tpl->tpl_vars['v']->value['notu'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_telefon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['adres'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_zamani'];?>
</td></tr>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    </tbody>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['basarili']->value)) {?>
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Aldığı Ürün</th><th>Telefon/E-mail</th><th>Adres</th><th>Tarih</th></tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['siparisler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_adsoyad'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 2) {?>Calvin Klein Euphoria For Men(100ml)<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'] == 1) {?>Calvin Klein Euphoria Women(100ml)<?php } else {
echo $_smarty_tpl->tpl_vars['v']->value['aldigi_urun_id'];
}?><br/>adeti:<?php echo $_smarty_tpl->tpl_vars['v']->value['notu'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['musteri_telefon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['adres'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['siparis_zamani'];?>
</td></tr>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    </tbody>
                <?php }?>
            </table>
        </div>

    </div>
</div>
<?php }
}
?>