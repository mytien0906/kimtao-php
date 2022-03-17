<?php  if(!defined('_source')) die("Error");

if(isset($_GET['id'])){
	@$id = trim(strip_tags(addslashes($_GET['id'])));
	
	/*--- Chi tiet news ---*/
	$d->reset();
	$sql = "select ten$lang as ten,id,type from #_news where hienthi=1 and tenkhongdau='".$id."'";
	$d->query($sql);
	$kq_search = $d->result_array();
	
	if(count($kq_search)>0){
		
		$template = $template1."_detail";
		//Cập nhật lượt xem
		$sql_lanxem = "UPDATE #_news SET luotxem=luotxem+1  WHERE tenkhongdau ='".$id."'";
		$d->query($sql_lanxem);
		
		//Chi tiết news
		$sql_detail = "select * from #_news where hienthi=1 and tenkhongdau='".$id."' limit 0,1";
		$d->query($sql_detail);
		$row_detail = $d->fetch_array();	
		
		
		$title_cat = $row_detail["ten$lang"];
		$title = $row_detail['title'];	
		$keywords = $row_detail['keywords'];
		$description = $row_detail['description'];
		$checkslider=1;
		
		//link duong dan
		$link_danhmuc = Get_DuongDan("news_danhmuc","id,ten$lang as ten,tenkhongdau,type",$row_detail['id_danhmuc']);
		$link_list = Get_DuongDan("news_list","id,ten$lang as ten,tenkhongdau,type",$row_detail['id_list']);


		$breadcumb ='<ul id="breadcrumb">
                <li><a href=""><span class="fa fa-home"> '._home.'</span></a></li>
               <li><a href="'.$com.'.html">'.$title_link.'</a></li>
              ';

		if($link_danhmuc['ten']!=''){
				$breadcumb .='
               <li><a href="'.$com.'/'.$link_danhmuc['tenkhongdau'].'.html">'.$link_danhmuc['ten'.$lang].'</a></li>
               ';
		}
		if($link_list['ten']!=''){
				$breadcumb .='
                <li><a href="'.$com.'/'.$link_list['tenkhongdau'].'.html">'.$link_list['ten'.$lang].'</a></li>
              ';
		}
		$breadcumb .='<li><a href="'.$com.'/'.$row_detail['tenkhongdau'].'.html">'.$row_detail['ten'.$lang].'</a></li>
		</ul>'
		;

		
		#Thông tin share facebook
		$images_facebook = 'http://'.$config_url.'/'._upload_tintuc_l.$row_detail['thumb'];
		$title_facebook = $row_detail['ten'];
		$description_facebook = trim(strip_tags($row_detail['mota']));
		$url_facebook = getCurrentPageURL();

			//Hình ảnh khác của news
		$sql_hinhthem = "select id,ten$lang as ten,thumb,photo from #_hinhanh where id_hinhanh='".$row_detail['id']."' and type='".$type."' and hienthi=1 order by stt,id desc";
		$d->query($sql_hinhthem);
		$hinhthem = $d->result_array();
		
		
		$d->reset();
	    $sql_tags = "select id,ten from #_tags where  id IN (select id_tag from #_protag where id_pro=".$row_detail['id'].") and type='".$type."' order by id desc";
	    $d->query($sql_tags);
	    $tags_sp = $d->result_array();
		
		//news cùng loại
		
		$where = " type='".$type."'";
		if($row_detail['id_danhmuc']>0){
		$where.=" and id_danhmuc='".$row_detail['id_danhmuc']."' ";
		}
		if($row_detail['id_list']>0){
		$where.=" and id_list='".$row_detail['id_list']."' ";
		}
		$where.=" and tenkhongdau<>'".$id."' and hienthi=1 order by stt,id desc";
		
	}//news
	
	/*--- danh muc cap 1 ---*/
	$d->reset();
	$sql = "select ten$lang as ten,id,type from #_news_danhmuc where hienthi=1 and tenkhongdau='".$id."'";
	$d->query($sql);
	$kq_search = $d->result_array();
	
	if(count($kq_search)>0){
		$template = $template1;
		
		$sql = "select id,ten$lang as ten,title,keywords,description,tenkhongdau from #_news_danhmuc where tenkhongdau='".$id."' limit 0,1";
		$d->query($sql);
		$title_bar = $d->fetch_array();
					
		$title_cat = $title_bar['ten'];
		$title = $title_bar['title'];
		$keywords = $title_bar['keywords'];
		$description = $title_bar['description'];
		
		$where = " type='".$type."' and id_danhmuc='".$title_bar['id']."' and hienthi=1 order by stt,id desc";
		
		//duong dan link

		$breadcumb ='<ul id="breadcrumb">
        	<li><a href=""><span class="fa fa-home"> </span></a></li>
            <li><a href="">'._home.'</a></li>
            <li><a href="'.$com.'.html">'.$title_link.'</a></li>
            <li><a href="'.$com.'/'.$title_bar['tenkhongdau'].'.html">'.$title_bar['ten'.$lang].'</a></li>
          </ul>';
		
	}//news_danhmuc
	
	/*--- danh muc cap 2 ---*/
	$d->reset();
	$sql = "select ten$lang as ten,id,type from #_news_list where hienthi=1 and tenkhongdau='".$id."'";
	$d->query($sql);
	$kq_search = $d->result_array();
	
	if(count($kq_search)>0){
		$template = $template1;
		
		$sql = "select id,ten$lang as ten,title,keywords,description,id_danhmuc,tenkhongdau from #_news_list where tenkhongdau='".$id."' limit 0,1";
		$d->query($sql);
		$title_bar = $d->fetch_array();
		
		$title_cat = $title_bar['ten'];
		$title = $title_bar['title'];
		$keywords = $title_bar['keywords'];
		$description = $title_bar['description'];
	
		$where = " type='".$type."' and id_list='".$title_bar['id']."' and hienthi=1 order by stt,id desc";
		
		//link duong dan
		$link_danhmuc = Get_DuongDan("news_danhmuc","id,ten$lang as ten,tenkhongdau,type",$title_bar['id_danhmuc']);

		
		$breadcumb ='<ul id="breadcrumb">
                <li><a href=""><span class="fa fa-home"> </span></a></li>
                <li><a href="">'._home.'</a></li>
                <li><a href="'.$com.'.html">'.$title_link.'</a></li>
                <li><a href="'.$com.'/'.$link_danhmuc['tenkhongdau'].'.html">'.$link_danhmuc['ten'.$lang].'</a></li>
                <li><a href="'.$com.'/'.$title_bar['tenkhongdau'].'.html">'.$title_bar['ten'.$lang].'</a></li>
              </ul>';
		
		
		
	}//news_list

}else{
	$template = $template1;
	$where = " type='".$type."' and hienthi=1 order by stt,id desc";
	
	//duong dan web
	
		$breadcumb ='<ul id="breadcrumb">
                <li><a href=""><span class="fa fa-home"> '._home.'</span></a></li>
               
                <li><a href="'.$com.''.$link_cat['tenkhongdau'].'.html">'.$title_link.'</a></li>
              </ul>';
}

	#Lấy news và phân trang
	$d->reset();
	$sql = "SELECT count(id) AS numrows FROM #_news where $where";
	$d->query($sql);	
	$dem = $d->fetch_array();
	
	$totalRows = $dem['numrows'];
	$page = $_GET['p'];
	$pageSize = 30;//Số item cho 1 trang
	$offset = 5;//Số trang hiển thị				
	if ($page == "")$page = 1;
	else $page = $_GET['p'];
	$page--;
	$bg = $pageSize*$page;		
	
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,type,mota$lang as mota,ngaytao from #_news where $where limit $bg,$pageSize";		
	$d->query($sql);
	$tintuc = $d->result_array();	
	$url_link = getCurrentPageURL();
	
?>