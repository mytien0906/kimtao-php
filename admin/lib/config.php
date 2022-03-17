<?php if(!defined('_lib')) die("Error");

	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	$config_url=$_SERVER["SERVER_NAME"].'';
	
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'root';
	$config['database']['password'] = '';
	$config['database']['database'] = 'kimtaovn_data';
	$config['database']['refix'] = 'table_';
	
	$ip_host = '120.72.119.7';
	$mail_host = 'contact@kimtao.vn';
	$pass_mail = 'qmth5vxMk';
	
	$API_map ='AIzaSyAHzKmK5__1PWKAUUEkgxN5YiMzAXiLTEM';

	$config['lang']=array(''=>'Tiếng Việt','en'=>'Tiếng Anh');#Danh sách ngôn ngữ hỗ trợ
	
	$config['author']['name'] = 'Lê Minh Đức';
	$config['author']['email'] = 'ducle95.nina@gmail.com';
	$config['author']['timefinish'] = '';
	
	//cấu hình thông tin do google cung cấp
	$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
	$site_key    = '6LfZA2UUAAAAAHHHA_7YKgrEUDXqhx-9cSYdPLMu';
	$secret_key  = '6LfZA2UUAAAAAK62f1QgqWc1gwG8qA6GQkj95gIx';
	
	// product or article
	$config['schema'] = 'product';
	$config['date_create'] = time();
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');

?>