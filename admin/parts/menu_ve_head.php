<?php

if(isset($_SESSION['name'])){

    $smarty->assign('admin_name',$_SESSION['name']);
    $smarty->assign('admin_level',$_SESSION['level']);

}

else{ session_destroy(); header("Location:/parfum34_admin");

}

$smarty->display('../parts/menu_ve_head.tpl');