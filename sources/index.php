<?php  if(!defined('_source')) die("Error");

	$d->reset();
	$sql = "select toado,ten$lang as ten,diachi$lang as diachi,email,dienthoai,id from #_bando where hienthi=1 ";
	$d->query($sql);
	$bando = $d->result_array();

	$title_cat = _sanphamnoibat;
	
	$where = " type='san-pham' and hienthi=1 and noibat=1 order by stt,id desc";
	
	#Lấy sản phẩm và phân trang
	$d->reset();
	$sql = "SELECT count(id) AS numrows FROM #_product where $where";
	$d->query($sql);	
	$dem = $d->fetch_array();
	
	$totalRows = $dem['numrows'];
	$page = $_GET['p'];
	$pageSize = 12;//Số item cho 1 trang
	$offset = 5;//Số trang hiển thị				
	if ($page == "")$page = 1;
	else $page = $_GET['p'];
	$page--;
	$bg = $pageSize*$page;		
	
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu,type from #_product where $where limit $bg,$pageSize";		
	$d->query($sql);
	$product = $d->result_array();	
	$url_full_link=$_SERVER['REQUEST_URI'];
	if($url_full_link=='/'){
		$url_link = getCurrentPageURL().'index.html';
	}else{
		$url_link = getCurrentPageURL();
	}
	
?>