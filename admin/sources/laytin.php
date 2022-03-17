<?php	if(!defined('_source')) die("Error");
switch($act){
	case "add":		
		$template = "laytin/item_add";
		break;
	case "save":
		save_man();
		break;
	default:
		$template = "index";
}

function save_man(){
	
	global $d;
	// print_r($_GET);
	if($_GET['listid']){
		
		$listid = explode(",",$_GET['listid']); 

		if($_GET['url_bds'] && $_GET['url_bds']!=''){
			$url_page = $_GET['url_bds'];
			$url_web = 'https://batdongsan.com.vn';
			//$arr = domXML($url_page);
			$arr = getContent($url_page);
			$html = str_get_html($arr);
			$tins = $html->find('div.tintuc-row1');
			
			for ($i=0 ; $i<count($listid) ; $i++){
							
				$ida = (int)$listid[$i];
				
				$tag_a = $tins[$ida]->find('a.link_blue',0);//truy cao vao the a
				$a_href = $tag_a->href;//lay href cua tin
				$link = $url_web.$a_href;
				
				$ten = $tag_a->innertext;//lay ten tin
				$title = $ten;
				$tenkhongdau = changeTitle($ten);
				$mota = $tins[$ida]->find('p',0)->innertext;//lay mo ta
				
				//noi dung 
			 	$result1 = getContent($link);
				$html1 = str_get_html($result1);
				
				$noidung = $html1->find('#divContents',0);

				$img = $tins[$ida]->find('img',0);
				$linkimg = $img->src;
				if($linkimg){
					$etc = @end(explode('.', $linkimg));
					save_image($linkimg,_upload_tintuc.$tenkhongdau.'.'.$etc);
				}
				$photo = $tenkhongdau.'.'.$etc;
				$thumb = $tenkhongdau.'.'.$etc;
				$ngaytao = time();
				$hienthi = 1;
				$type = $_REQUEST['type'];
				$sql = "INSERT INTO  table_news (noidung,ten,ngaytao,mota,hienthi,type,tenkhongdau,photo,thumb,title) VALUES ('$noidung','$ten','$ngaytao','$mota','$hienthi','$type','$tenkhongdau','$photo','$thumb','$title')";
				mysql_query($sql);
			}
		}
		transfer('Láy tin hoàn tất',"index.php?com=laytin&act=add");
	}
}
?>