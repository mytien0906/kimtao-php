<?php
	error_reporting(0);
	session_start();
	$session=session_id();

	//@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	
	include_once _lib."Mobile_Detect.php";
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	if($deviceType == 'phone'){
		@define ( '_template' , './mobile/');
		
	}else{
		@define ( '_template' , './templates/');
	}

	if(!isset($_SESSION['lang']) || $_SESSION['lang']=='vi' ){
		$_SESSION['lang']='';
	}
	$lang=$_SESSION['lang'];
	require_once _source."lang$lang.php";
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."function_web.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _lib."functions_user.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";
	include_once _source."public_sql.php";
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){$pid=$_REQUEST['productid'];addtocart($pid,1);redirect("gio-hang.html");}
?>
<?php if($deviceType =='phone') { ?>
	<?php include "index_mobile.php"?>
<?php } else { ?>
	<?php include "index_desktop.php"?>
<?php }?>