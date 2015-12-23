<?php /* Smarty version 3.1.24, created on 2015-10-05 18:00:22
         compiled from "./temalar/default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71979877556129086735639_29963551%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad8557cdf3e097143220f1275c455fbd0e021ee' => 
    array (
      0 => './temalar/default.tpl',
      1 => 1444057162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71979877556129086735639_29963551',
  'variables' => 
  array (
    'sayfa_baslik' => 0,
    'mesajlar' => 0,
    'v' => 0,
    'son_hareketler' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56129086774053_52313434',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56129086774053_52313434')) {
function content_56129086774053_52313434 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71979877556129086735639_29963551';
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
                <?php if (isset($_smarty_tpl->tpl_vars['mesajlar']->value)) {?>
                    <thead>
                    <tr><th width="80">ID</th><th>İsim Soyisim</th><th>Email</th><th>Mesaj</th></tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['mesajlar']->value;
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
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['isim'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td><td>Konu : <?php echo $_smarty_tpl->tpl_vars['v']->value['konu'];?>
<br/>Mesaj:<?php echo $_smarty_tpl->tpl_vars['v']->value['mesaj'];?>
</td></tr>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    </tbody>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['son_hareketler']->value)) {?>
                    <thead>
                    <tr><th width="80">ID</th><th>Hareket</th></tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['son_hareketler']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['hareket'];?>
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