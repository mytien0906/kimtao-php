<?php	
	error_reporting(0);
	session_start();
	$session=session_id();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang']='';
	}
	$lang=$_SESSION['lang'];	
	require_once _source."lang$lang.php";	
	include_once _lib."config.php";
	include_once _lib."functions.php";	
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	
	header("Content-Type: application/xml; charset=utf-8"); 
	echo '<?xml version="1.0" encoding="UTF-8"?>'; 
	echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'; 
	 
	function urlElement($url, $pri,$mod) {
	echo '<url>'; 
	echo '<loc>'.$url.'</loc>'; 
	echo '<changefreq>weekly</changefreq>';
	echo '<lastmod>'.$mod.'</lastmod>';
	echo '<priority>'.$pri.'</priority>';
	echo '</url>';
	}

	urlElement('http://'.$config_url,'1.0',date(c));
	
	$arrcom = array("gioi-thieu","san-pham-dich-vu","ket-cau-thep","bat-dong-san","du-an","tin-tuc","tuyen-dung","chinh-sach","ve-chung-toi","lien-he");

	foreach ($arrcom as $k => $v) {
		urlElement('http://'.$config_url.'/'.$v.'.html','1.0',date(c));
	}//end $com.html
	
	//table news
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,ngaytao,type from #_news order by id desc ";		
	$d->query($sql);
	$tintuc = $d->result_array();
	
	foreach($tintuc as $v){
		urlElement('http://'.$config_url.'/'.$v['type'].'/'.$v['tenkhongdau'].'.html','0.8',date(c,$v['ngaytao']));
	}//end table news
	
	//table news_danhmuc
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,ngaytao,type from #_news_danhmuc order by id desc ";		
	$d->query($sql);
	$danhmuc_news = $d->result_array();
	
	foreach($danhmuc_news as $v){
		urlElement('http://'.$config_url.'/'.$v['type'].'/'.$v['tenkhongdau'].'.html','0.8',date(c,$v['ngaytao']));
	}//end table news_danhmuc 
	
	//table news_list
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,ngaytao,type from #_news_list order by id desc ";		
	$d->query($sql);
	$danhmuc_news = $d->result_array();
	
	foreach($danhmuc_news as $v){
		urlElement('http://'.$config_url.'/'.$v['type'].'/'.$v['tenkhongdau'].'.html','0.8',date(c,$v['ngaytao']));
	}//end table news_list 
	
	//table_product
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,ngaytao,type from #_product order by id desc ";		
	$d->query($sql);
	$product = $d->result_array();
	
	foreach($product as $v){
		urlElement('http://'.$config_url.'/'.$v['type'].'/'.$v['tenkhongdau'].'.html','0.8',date(c,$v['ngaytao']));
	}//end table_product
	
	//table_product_danhmuc
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,ngaytao,type from #_product_danhmuc order by id desc ";		
	$d->query($sql);
	$product_danhmuc = $d->result_array();
	
	foreach($product_danhmuc as $v){
		urlElement('http://'.$config_url.'/'.$v['type'].'/'.$v['tenkhongdau'].'.html','0.8',date(c,$v['ngaytao']));
	}//end table_product_danhmuc
	
	//table_product_list
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,ngaytao,type from #_product_list order by id desc ";		
	$d->query($sql);
	$product_list = $d->result_array();
	
	foreach($product_list as $v){
		urlElement('http://'.$config_url.'/'.$v['type'].'/'.$v['tenkhongdau'].'.html','0.8',date(c,$v['ngaytao']));
	}//end table_product_list
	
	//table_product_cat
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,ngaytao,type from #_product_cat order by id desc ";		
	$d->query($sql);
	$product_cat = $d->result_array();
	
	foreach($product_cat as $v){
		urlElement('http://'.$config_url.'/'.$v['type'].'/'.$v['tenkhongdau'].'.html','0.8',date(c,$v['ngaytao']));
	}//end table_product_cat
	
	//table_product_item
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,ngaytao,type from #_product_item order by id desc ";		
	$d->query($sql);
	$product_item = $d->result_array();
	
	foreach($product_item as $v){
		urlElement('http://'.$config_url.'/'.$v['type'].'/'.$v['tenkhongdau'].'.html','0.8',date(c,$v['ngaytao']));
	}//end table_product_cat
	
	echo '</urlset>'; 

?>
