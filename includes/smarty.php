<?php

require('libs/Smarty.class.php');
$tpl = new Smarty;

$tpl->setTemplateDir("design/");
$tpl->setCompileDir("content/tpl_site_compile");
$tpl->setConfigDir("content/tpl_site_config");
$tpl->setCacheDir("content/tpl_site_cache/");

$tpl->compile_check = true;//TPL_COMPILE_CHECK

?>


