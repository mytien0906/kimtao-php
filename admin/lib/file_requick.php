<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);
	
	#Thông tin seo web title + Keyword + Description
	$sql_seo = "select * from #_meta limit 0,1";
	$d->query($sql_seo);
	$seo= $d->fetch_array();	
	
	#Thông tin công ty
	$sql_company = "select *,ten$lang as ten,diachi$lang as diachi from #_company limit 0,1";
	$d->query($sql_company);
	$company= $d->fetch_array();
	
	switch($com)
	{
		case 'login':
			
			$source = "member";
			$template = "index";
			break;
		
		case 'album':
			$type = "album";
			$title = 'Album';
			$title_cat = 'Album';
			$source = "album";
			$template = "album2";
			break;
			
		case 'gioi-thieu':
			$type = "gioi-thieu";
			$title = _gioithieu;
			$title_cat = _gioithieu;
			$title_link = _gioithieu;
			$source = "news";
			$template1 = "news";
			break;

		case 'san-pham-dich-vu':
			$type = "san-pham-dich-vu";
			$title = "sản phẩm dịch vụ";
			$title_cat =_sanpham;
			$title_link = _sanpham;
			$source = "news";
			$template1 = "news";
			break;
		case 'ket-cau-thep':
			$type = "ket-cau-thep";
			$title = _ketcauthep;
			$title_cat =_ketcauthep;
			$title_link = _ketcauthep;
			$source = "news";
			$template1 = "news";
			break;
		case 'bat-dong-san':
			$type = "bat-dong-san";
			$title = _batdongsan;
			$title_cat =_batdongsan;
			$title_link = _batdongsan;
			$source = "news";
			$template1 = "news";
			break;
			
		case 'tin-tuc':
			$type = "tin-tuc";
			$title = _tintuc;
			$title_cat = _tintuc;
			$title_link = _tintuc;
			$source = "news";
			$template1 = "news";
			break;
			
		case 'dich-vu':
			$type = "dich-vu";
			$title = _dichvu;
			$title_cat = _dichvu;
			$title_link = _dichvu;
			$source = "news";
			$template1 = "news";
			break;
			
		case 'tuyen-dung':
			$type = "tuyen-dung";
			$title = _tuyendung;
			$title_cat = _tuyendung;
			$title_link = _tuyendung;
			$source = "news";
			$template1 = "news";
			break;

		case 'chinh-sach':
			$type = "chinh-sach";
			$title = _chinhsach;
			$title_cat = _chinhsach;
			$title_link = _chinhsach;
			$source = "news";
			$template1 = "news";
			break;

		case 've-chung-toi':
			$type = "ve-chung-toi";
			$title = _vechungtoi;
			$title_cat =  _vechungtoi;
			$title_link =  _vechungtoi;
			$source = "news";
			$template1 = "news";
			break;
			
		
			
		case 'du-an':
			$type = "du-an";
			$title = _duan;
			$title_cat = _duan;
			$title_link = _duan;
			$source = "news";
			$template1 = "duan";
			break;
			
		case 'lien-he':
			$type = "lienhe";
			$title = _lienhe;
			$title_cat = _lienhe;
			$title_link = _lienhe;
			$source = "contact";
			$template = "contact";
			break;

		case 'tim-kiem':
			$type = "san-pham";
			$title = _ketquatimkiem;
			$title_cat = _ketquatimkiem;
			$source = "search";
			$template = "news";
			break;
		case 'tags':
			$source = "tags";
			$template= "product";
			break;	
		case 'tag':
			$source = "tag";
			$template = "news";
			break;
							
		case 'san-pham':
			$type = "san-pham";
			$title = _sanpham;
			$title_cat = _sanpham;
			$title_link = _sanpham;
			$source = "product";
			$template1 = "product";
			break;
		case 'san-pham-da-xem':
			$type = "san-pham";
			$title = 'Sản phẩm đã xem';
			$title_cat = 'Sản phẩm đã xem';
			$source = "product";
			$template1 = "product";
			break;
			
		case 'video':
			$title = 'Video Clip';
			$title_cat = "Video Clip";
			$source = "video";
			$template = "video";
			break;
		
		case 'gio-hang':
			$type = "giohang";
			$title = _giohang;
			$title_cat = _giohang;
			$source = "giohang";
			$template = "giohang";
			break;	
			
		case 'thanh-toan':
			$type = "thanhtoan";
			$title = _thanhtoan;
			$title_cat = _thanhtoan;
			$source = "thanhtoan";
			$template = "thanhtoan";
			break;
			
		case 'dang-ky':
			$type = "dangky";
			$title = _dangky;
			$title_cat = _dangky;
			$source = "dangky";
			$template = "dangky";
			break;
			
		case 'dang-nhap':
			$type = "dangnhap";
			$title = _dangnhap;
			$title_cat = _dangnhap;
			$source = "dangnhap";
			$template = "dangnhap";
			break;
		
		case 'quen-mat-khau':
			$type = "quenmatkhau";
			$title = _quenmatkhau;
			$title_cat = _quenmatkhau;
			$source = "quenmatkhau";
			$template = "quenmatkhau";
			break;
			
		case 'thay-doi-thong-tin':
			$type = "thaydoithongtin";
			$title = _thaydoithongtin;
			$title_cat = _thaydoithongtin;
			$source = "thaydoithongtin";
			$template = "thaydoithongtin";
			break;
			
		case 'dang-xuat':
			logout();
			break;
				
		case 'them-user':
			$source = "user";
			$template = "user";
			break;
			
		case 'ngonngu':
			if(isset($_GET['lang']))
			{
				switch($_GET['lang'])
					{
						case '':
							$_SESSION['lang'] = '';
							break;
						case 'en':
							$_SESSION['lang'] = 'en';
							break;
						default: 
							$_SESSION['lang'] = '';
							break;
					}
			}
			else{
				$_SESSION['lang'] = '';
			}
		redirect($_SERVER['HTTP_REFERER']);
		break;	
										
		default: 
			$source = "index";
			$template = "index";
			break;
	}
	
	if($source!="") include _source.$source.".php";	
	if($_REQUEST['com']=='logout')
	{
		session_unregister($login_name);
		header("Location:index.php");
	}

	$arr_animate =array("bounce","flash","pulse","rubberBand","shake","swing","tada","wobble","jello","bounceIn","bounceInDown","bounceInLeft","bounceInRight","bounceInUp","bounceOut","bounceOutDown","bounceOutLeft","bounceOutRight","bounceOutUp","fadeIn","fadeInDown","fadeInDownBig","fadeInLeft","fadeInLeftBig","fadeInRight","fadeInRightBig","fadeInUp","fadeInUpBig","fadeOut","fadeOutDown","fadeOutDownBig","fadeOutLeft","fadeOutLeftBig","fadeOutRight","fadeOutRightBig","fadeOutUp","fadeOutUpBig","flip","flipInX","flipInY","flipOutX","flipOutY");	
?>