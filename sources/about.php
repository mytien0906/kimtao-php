<?php  if(!defined('_source')) die("Error");
	
	#Chi tiết bài viết
	$sql = "select ten$lang as ten,noidung$lang as noidung,title,keywords,description from #_about where type='".$type."' and hienthi=1 limit 0,1";
	$d->query($sql);
	$row_detail = $d->fetch_array();

	$breadcumb ='<ul id="breadcrumb">
                <li><a href=""><span class="fa fa-home"> '._home.'</span></a></li>
               
                <li><a href="'.$com.''.$link_cat['tenkhongdau'].'.html">'.$title_link.'</a></li>
              </ul>';
	
	#Thông tin seo web
	//$title_cat = 'Giới thiệu';		
	$title = $row_detail['title'];
	$keywords = $row_detail['keywords'];
	$description = $row_detail['description'];
	
	#Thông tin share facebook
	$images_facebook = 'http://'.$config_url.'/'._upload_hinhanh_l.$row_detail['photo'];
	$title_facebook = $row_detail['title'];
	$description_facebook = trim(strip_tags($row_detail['description']));
	$url_facebook = getCurrentPageURL();
	
?>