<?php
include_once("action/smarty_inc.php");
include_once("action/lang.class.php");
include_once("action/mysql.class.php");
include_once("action/public_info.php");
include_once("action/page.class.php");

//ͼƬ

$imagelist = getRows("boya_config where comm_type='AD_Images'", $db ," id,comm_code as url,comm_value,comm_flag ");
$smarty->assign("imagelist",$imagelist);



$smarty->display("lxwm.html");
?>
