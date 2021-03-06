<?php	if(!defined('_source')) die("Error");

	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

	$urlcu = "";
	$urlcu .= (isset($_REQUEST['id_danhmuc'])) ? "&id_danhmuc=".addslashes($_REQUEST['id_danhmuc']) : "";
	$urlcu .= (isset($_REQUEST['type'])) ? "&type=".addslashes($_REQUEST['type']) : "";
	$urlcu .= (isset($_REQUEST['p'])) ? "&p=".addslashes($_REQUEST['p']) : "";

//===========================================================
switch($act){
	case "man":
		get_items();
		$template = "news/items";
		break;
	case "add":
		$template = "news/item_add";
		break;
	case "edit":		
		get_item();		
		$template = "news/item_add";
		break;
	case "save":
		save_item();
		break;
	case "savestt":
		savestt_item();
		break;
	case "delete":
		delete_item();
		break;		
//===========================================================	
	case "man_danhmuc":
		get_danhmucs();
		$template = "news/danhmucs";
		break;
	case "add_danhmuc":
		$template = "news/danhmuc_add";
		break;
	case "edit_danhmuc":
		get_danhmuc();
		$template = "news/danhmuc_add";
		break;
	case "save_danhmuc":
		save_danhmuc();
		break;
	case "savestt_danhmuc":
		savestt_danhmuc();
		break;
	case "delete_danhmuc":
		delete_danhmuc();
		break;
//===========================================================	
	case "man_list":
		get_lists();
		$template = "news/lists";
		break;
	case "add_list":
		$template = "news/lists_add";
		break;
	case "edit_list":
		get_list();
		$template = "news/lists_add";
		break;
	case "save_list":
		save_list();
		break;
	case "savestt_list":
		savestt_list();
		break;
	case "delete_list":
		delete_list();
		break;
						
	default:
		$template = "index";
}
//===========================================================
function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}
//===========================================================
function get_items(){
	global $d, $items, $url_link,$totalRows , $pageSize, $offset,$paging,$urlcu;

	if($_REQUEST['type']!='')
	{
		$where.=" and type='".$_REQUEST['type']."'";
	}
	if($_REQUEST['id_danhmuc']!='')
	{
		$where.=" and id_danhmuc = '".$_REQUEST['id_danhmuc']."'";
	}
	if($_REQUEST['id_list']!='')
	{
		$where.=" and id_list = '".$_REQUEST['id_list']."'";
	}
	if($_REQUEST['key']!='')
	{
		$where.=" and ten like '%".$_REQUEST['key']."%'";
	}
	$where.=" order by stt,id desc";

	$sql="SELECT count(id) AS numrows FROM #_news where id<>0 $where";
	$d->query($sql);	
	$dem=$d->fetch_array();
	$totalRows=$dem['numrows'];
	$page=$_GET['p'];
	
	$pageSize=20;
	$offset=10;
						
	if ($page=="")
		$page=1;
	else 
		$page=$_GET['p'];
	$page--;
	$bg=$pageSize*$page;		
	
	$sql = "select * from #_news where id<>0 $where limit $bg,$pageSize";		
	$d->query($sql);
	$items = $d->result_array();	
	$url_link="index.php?com=news&act=man".$urlcu;
}
//===========================================================
function get_item(){
	global $d, $item,$urlcu;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Kh??ng nh???n ???????c d??? li???u", "index.php?com=news&act=man".$urlcu);
	
	$sql = "select * from #_news where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("D??? li???u kh??ng c?? th???c", "index.php?com=news&act=man".$urlcu);
	$item = $d->fetch_array();
}
//===========================================================
function save_item(){
	global $d,$config,$urlcu;
	$file_name = $_FILES['file']['name'];
	if(empty($_POST)) transfer("Kh??ng nh???n ???????c d??? li???u", "index.php?com=news&act=man".$urlcu);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
		$id =  themdau($_POST['id']);		
		if($photo = upload_image("file", _format_duoihinh ,_upload_tintuc,$file_name)){
			$data['photo'] = $photo;
			$data['thumb'] = create_thumb($data['photo'], 280, 280, _upload_tintuc,$file_name,1);
			//delete_file(_upload_tintuc.$data['photo']);	
			$d->setTable('news');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tintuc.$row['photo']);
				delete_file(_upload_tintuc.$row['thumb']);
			}
		}
		$data['id_danhmuc'] = (int)$_POST['id_danhmuc'];
		$data['id_list'] = (int)$_POST['id_list'];
		$data['tenkhongdau'] = changeTitle($_POST['ten']);
		$data['type'] = $_POST['type'];
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['noibat'] = isset($_POST['noibat']) ? 1 : 0;
		$data['tag'] = $_POST['tag'];
		$data['ngaysua'] = time();		
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		foreach ($config['lang'] as $key => $value) {
			$data['ten'.$key] = $_POST['ten'.$key];
			$data['nganhnghe'.$key] = $_POST['nganhnghe'.$key];
			$data['vitri'.$key] = $_POST['vitri'.$key];
			$data['chudautu'.$key] = $_POST['chudautu'.$key];
			$data['tongthau'.$key] = $_POST['tongthau'.$key];
			$data['quymo'.$key] = $_POST['quymo'.$key];
			$data['mota'.$key] = magic_quote($_POST['mota'.$key]);
			$data['noidung'.$key] = magic_quote($_POST['noidung'.$key]);			
		}
		$d->setTable('news');
		$d->setWhere('id', $id);
		if($d->update($data))
		{	
		mysql_query("DELETE FROM table_protag where id_pro = '$id'");
			if(trim($_POST['tag'])!=''){
			  $arrTags = explode(",", $_POST['tag']);
			  $type=$_POST['type'];
			  foreach ($arrTags as $tag)
			  {
				 $tag = trim($tag);
				 if($tag!=""){
				 //L???y id c???a tag c?? t??n l?? $tag, n???u ko c?? th?? th??m m???i
				 $d->reset();
				 $sql= "select id from table_tags where ten='".$tag."' and type='$type'";
				 $d->query($sql);
				 $kiemtratag = $d->result_array();
	  			 
				 if (count($kiemtratag)!=0)
				 {
					  $idTag = $kiemtratag[0]['id'];
				 }
				 else
				 {
					  mysql_query("insert into table_tags(ten,type) values ('$tag','$type')");
					  $idTag = mysql_insert_id();
				 }
			  
				  //Insert d??? li???u v??o table Articles_Tags
				  mysql_query("insert into table_protag(id_pro,id_tag) values ($id, $idTag)");
				  }
			  }
			}
			if(isset($_FILES['files'])) {
				 $arr_chuoi = str_replace('"','',$_POST['jfiler-items-exclude-files-0']);
				 $arr_chuoi = str_replace('[','',$arr_chuoi);
				 $arr_chuoi = str_replace(']','',$arr_chuoi);
				 $arr_file_del = explode(',',$arr_chuoi);
	             for($i=0;$i<count($_FILES['files']['name']);$i++){
	            	if($_FILES['files']['name'][$i]!=''){
						if(!in_array(($_FILES['files']['name'][$i]),$arr_file_del,true))
						{
							//dump(in_array(($_FILES['files']['name'][$i]),$arr));
							$file['name'] = $_FILES['files']['name'][$i];
							$file['type'] = $_FILES['files']['type'][$i];
							$file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
							$file['error'] = $_FILES['files']['error'][$i];
							$file['size'] = $_FILES['files']['size'][$i];
							$file_name = images_name($_FILES['files']['name'][$i]);
							$photo = upload_photos($file, _format_duoihinh, _upload_hinhthem,$file_name);
							$data1['photo'] = $photo;
							$data1['thumb'] = create_thumb($data1['photo'], 100, 100, _upload_hinhthem,$file_name,1);	
							$data1['stt'] = $_POST['stthinh'][$i];
							$data1['type'] = $_POST['type'];
							$data1['id_hinhanh'] = $id;
							$data1['hienthi'] = 1;
							$d->setTable('hinhanh');
							$d->insert($data1);
						}
					}
				}
	        }	
			redirect("index.php?com=news&act=man".$urlcu);
		}
		else
			transfer("C???p nh???t d??? li???u b??? l???i", "index.php?com=news&act=man".$urlcu);
	}else{
		
		if($photo = upload_image("file", _format_duoihinh ,_upload_tintuc,$file_name)){
			$data['photo'] = $photo;
			$data['thumb'] = create_thumb($data['photo'], 280, 280, _upload_tintuc,$file_name,1);	
			//delete_file(_upload_tintuc.$data['photo']);		
		}
		$data['id_danhmuc'] = (int)$_POST['id_danhmuc'];
		$data['id_list'] = (int)$_POST['id_list'];
		$data['tenkhongdau'] = changeTitle($_POST['ten']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['noibat'] = isset($_POST['noibat']) ? 1 : 0;
		$data['ngaytao'] = time();
		$data['title'] = $_POST['title'];
		$data['tag'] = $_POST['tag'];
		$data['type'] = $_POST['type'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		foreach ($config['lang'] as $key => $value) {
			$data['ten'.$key] = $_POST['ten'.$key];
			$data['nganhnghe'.$key] = $_POST['nganhnghe'.$key];
			$data['vitri'.$key] = $_POST['vitri'.$key];
			$data['chudautu'.$key] = $_POST['chudautu'.$key];
			$data['tongthau'.$key] = $_POST['tongthau'.$key];
			$data['quymo'.$key] = $_POST['quymo'.$key];
			$data['mota'.$key] = magic_quote($_POST['mota'.$key]);
			$data['noidung'.$key] = magic_quote($_POST['noidung'.$key]);			
		}
		
		$d->setTable('news');
		if($d->insert($data))
		{
				 $id=mysql_insert_id();
			 $type=$_POST['type'];
			mysql_query("DELETE FROM table_protag where id_pro = '$id'");
			if(trim($_POST['tag'])!=''){
			  $arrTags = explode(",", $_POST['tag']);
			  foreach ($arrTags as $tag)
			  {
				 $tag = trim($tag);
				 if($tag!=""){
				 //L???y id c???a tag c?? t??n l?? $tag, n???u ko c?? th?? th??m m???i
				 $d->reset();
				 $sql= "select id from table_tags where ten='".$tag."' and type='$type'";
				 $d->query($sql);
				 $kiemtratag = $d->result_array();
	  			 
				 if (count($kiemtratag)!=0)
				 {
					  $idTag = $kiemtratag[0]['id'];
				 }
				 else
				 {
					  mysql_query("insert into table_tags(ten,type) values ('$tag','$type')");
					  $idTag = mysql_insert_id();
				 }
			  
				  //Insert d??? li???u v??o table Articles_Tags
				  mysql_query("insert into table_protag(id_pro,id_tag) values ($id, $idTag)");
				  }
			  }
			}
				 if (isset($_FILES['files'])) {
				 $arr_chuoi = str_replace('"','',$_POST['jfiler-items-exclude-files-0']);
				 $arr_chuoi = str_replace('[','',$arr_chuoi);
				 $arr_chuoi = str_replace(']','',$arr_chuoi);
				 $arr_file_del = explode(',',$arr_chuoi);
	             for($i=0;$i<count($_FILES['files']['name']);$i++){
	            	if($_FILES['files']['name'][$i]!=''){
						if(!in_array(($_FILES['files']['name'][$i]),$arr_file_del,true))
						{
							//dump(in_array(($_FILES['files']['name'][$i]),$arr));
							$file['name'] = $_FILES['files']['name'][$i];
							$file['type'] = $_FILES['files']['type'][$i];
							$file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
							$file['error'] = $_FILES['files']['error'][$i];
							$file['size'] = $_FILES['files']['size'][$i];
							$file_name = images_name($_FILES['files']['name'][$i]);
							$photo = upload_photos($file, _format_duoihinh, _upload_hinhthem,$file_name);
							$data1['photo'] = $photo;
							$data1['thumb'] = create_thumb($data1['photo'], 100, 100, _upload_hinhthem,$file_name,1);	
							$data1['stt'] = $_POST['stthinh'][$i];
							$data1['type'] = $_POST['type'];
							$data1['id_hinhanh'] = $id;
							$data1['hienthi'] = 1;
							$d->setTable('hinhanh');
							$d->insert($data1);
						}
					}
				}
	        }
			
			redirect("index.php?com=news&act=man".$urlcu);
		}
		else
			transfer("L??u d??? li???u b??? l???i", "index.php?com=news&act=man".$urlcu);
	}
}
//===========================================================

function delete_item(){
	global $d,$urlcu;	
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);		
		$d->reset();
		$sql = "select * from #_news where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_tintuc.$row['photo']);
				delete_file(_upload_tintuc.$row['thumb']);
			}
			$sql = "delete from #_news where id='".$id."'";
			$d->query($sql);
		}
		
		if($d->query($sql)){
			/*-- Xoa anh va tag lien quan --*/
			$d->reset();
			$sql = "delete from #_tags where id in (select id_tag from #_protag where id_pro=".$id.") ";
			$d->query($sql);
			
			$d->reset();
			$sql = "delete from #_protag where id_pro='".$id."'";
			$d->query($sql);
			
			$d->reset();
			$sql = "select id,thumb, photo from #_hinhanh where id_hinhanh='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_hinhthem.$row['photo']);
					delete_file(_upload_hinhthem.$row['thumb']);			
				}
			}
			$sql = "delete from #_hinhanh where id_hinhanh='".$id."'";
			$d->query($sql);
			/* -- end xoa --*/
			redirect("index.php?com=news&act=man&type=".$_GET['type']."");
		}
		else
			transfer("X??a d??? li???u b??? l???i", "index.php?com=news&act=man".$urlcu);
	}elseif (isset($_GET['listid'])==true){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
		$sql = "select * from #_news where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_tintuc.$row['photo']);
				delete_file(_upload_tintuc.$row['thumb']);
			}
			$sql = "delete from #_news where id='".$id."'";
			$d->query($sql);
			
			/*-- Xoa anh va tag lien quan --*/
			$d->reset();
			$sql = "delete from #_tags where id in (select id_tag from #_protag where id_pro=".$id.") ";
			$d->query($sql);
			
			$d->reset();
			$sql = "delete from #_protag where id_pro='".$id."'";
			$d->query($sql);
			
			$d->reset();
			$sql = "select id,thumb, photo from #_hinhanh where id_hinhanh='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
				while($row = $d->fetch_array()){
					delete_file(_upload_hinhthem.$row['photo']);
					delete_file(_upload_hinhthem.$row['thumb']);			
				}
			}
			$sql = "delete from #_hinhanh where id_hinhanh='".$id."'";
			$d->query($sql);
			/* -- end xoa --*/
		}
			
		} 
		redirect("index.php?com=news&act=man".$urlcu);
	}
}

//===========================================================
function get_danhmucs(){
	global $d, $items, $url_link,$totalRows , $pageSize, $offset,$paging,$urlcu;
	if($_REQUEST['type']!='')
	{
		$where.=" and type='".$_REQUEST['type']."'";
	}
	if($_REQUEST['key']!='')
	{
		$where.=" and ten like '%".$_REQUEST['key']."%'";
	}
	$where.=" order by stt,id desc";	
	
	
	$sql="SELECT count(id) AS numrows FROM #_news_danhmuc where id<>0 $where";
	$d->query($sql);	
	$dem=$d->fetch_array();
	$totalRows=$dem['numrows'];
	$page=$_GET['p'];
	
	$pageSize=20;
	$offset=10;
						
	if ($page=="")
		$page=1;
	else 
		$page=$_GET['p'];
	$page--;
	$bg=$pageSize*$page;		
	
	$sql = "select * from #_news_danhmuc where id<>0 $where limit $bg,$pageSize";		
	$d->query($sql);
	$items = $d->result_array();	
	$url_link="index.php?com=news&act=man_danhmuc".$urlcu;
}

//===========================================================
function get_danhmuc(){
	global $d, $item,$urlcu;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Kh??ng nh???n ???????c d??? li???u", "index.php?com=news&act=man_danhmuc".$urlcu);
	
	$sql = "select * from #_news_danhmuc where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("D??? li???u kh??ng c?? th???c", "index.php?com=news&act=man_danhmuc".$urlcu);
	$item = $d->fetch_array();
}
//===========================================================
function save_danhmuc(){
	global $d,$config,$urlcu;
	$file_name_item=$_FILES['file']['name'].fns_Rand_digit(0,9,4);
	if(empty($_POST)) transfer("Kh??ng nh???n ???????c d??? li???u", "index.php?com=news&act=man_danhmuc".$urlcu);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){		
		$id =  themdau($_POST['id']);		
		if($photo = upload_image("file", _format_duoihinh ,_upload_tintuc,$file_name)){
			$data['photo'] = $photo;	
			$d->setTable('news_danhmuc');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tintuc.$row['photo']);
			}
		}
		$data['ten'] = $_POST['ten'];
		$data['tenkhongdau'] = changeTitle($_POST['ten']);
		$data['stt'] = $_POST['stt'];	
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['noibat'] = isset($_POST['noibat']) ? 1 : 0;		
		$data['ngaysua'] = time();			
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		foreach ($config['lang'] as $key => $value) {
			$data['ten'.$key] = $_POST['ten'.$key];
			$data['mota'.$key] = magic_quote($_POST['mota'.$key]);
			$data['noidung'.$key] = magic_quote($_POST['noidung'.$key]);			
		}			
		$d->setTable('news_danhmuc');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=news&act=man_danhmuc".$urlcu);
		else
			transfer("C???p nh???t d??? li???u b??? l???i", "index.php?com=news&act=man_danhmuc".$urlcu);
	}else{
		if($photo = upload_image("file", _format_duoihinh ,_upload_tintuc,$file_name)){
			$data['photo'] = $photo;
		}
		$data['tenkhongdau'] = changeTitle($_POST['ten']);
		$data['stt'] = $_POST['stt'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['noibat'] = isset($_POST['noibat']) ? 1 : 0;			
		$data['ngaytao'] =time();	
		$data['title'] = $_POST['title'];
		$data['type'] = $_POST['type'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		foreach ($config['lang'] as $key => $value) {
			$data['ten'.$key] = $_POST['ten'.$key];
			$data['mota'.$key] = magic_quote($_POST['mota'.$key]);
			$data['noidung'.$key] = magic_quote($_POST['noidung'.$key]);			
		}		
		$d->setTable('news_danhmuc');
		if($d->insert($data))
			redirect("index.php?com=news&act=man_danhmuc".$urlcu);
		else
			transfer("L??u d??? li???u b??? l???i", "index.php?com=news&act=man_danhmuc".$urlcu);
	}
}

//===========================================================

function delete_danhmuc(){
	global $d,$urlcu;
	if(isset($_GET['id']))
	{
		$id =  themdau($_GET['id']);		
		$d->reset();		
		//X??a danh m???c
		$sql = "delete from #_news_danhmuc where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0)
		{
			while($row = $d->fetch_array())
			{
				delete_file(_upload_tintuc.$row['photo']);
			}
			$sql = "delete from #_news_danhmuc where id='".$id."'";
			$d->query($sql);
		}
		
		//X??a s???n ph???m thu???c lo???i ????
		$sql = "select id,thumb,photo from #_news where id_danhmuc='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0)
		{
			while($row = $d->fetch_array())
			{
				delete_file(_upload_tintuc.$row['photo']);
				delete_file(_upload_tintuc.$row['thumb']);
			}
			$sql = "delete from #_news where id_danhmuc='".$id."'";
			$d->query($sql);
		}

		if($d->query($sql))
			redirect("index.php?com=news&act=man_danhmuc".$urlcu);
		else
			transfer("X??a d??? li???u b??? l???i", "index.php?com=news&act=man_danhmuc".$urlcu);
	}
	elseif (isset($_GET['listid'])==true)
	{
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();							
				
				$sql = "delete from #_news_danhmuc where id='".$id."'";
				$d->query($sql);
				if($d->num_rows()>0)
				{
					while($row = $d->fetch_array())
					{
						delete_file(_upload_tintuc.$row['photo']);
					}
					$sql = "delete from #_news_danhmuc where id='".$id."'";
					$d->query($sql);
				}
				
				$sql = "select id,thumb,photo from #_news where id_danhmuc='".$id."'";
				$d->query($sql);
				if($d->num_rows()>0)
				{
					while($row = $d->fetch_array())
					{
						delete_file(_upload_tintuc.$row['photo']);
						delete_file(_upload_tintuc.$row['thumb']);
					}
					$sql = "delete from #_news where id_danhmuc='".$id."'";
					$d->query($sql);
				}

		} 
		redirect("index.php?com=news&act=man_danhmuc".$urlcu);
		}
		else transfer("Kh??ng nh???n ???????c d??? li???u", "index.php?com=news&act=man_danhmuc".$urlcu);
}
//========= list=========
function get_lists(){
	global $d, $items, $paging;
	
	if($_REQUEST['hienthi']!='')
	{
		$id_up = $_REQUEST['hienthi'];
		$sql_sp = "SELECT id,hienthi FROM table_news_list where id='".$id_up."' ";
		$d->query($sql_sp);
		$lists= $d->result_array();
		$hienthi=$lists[0]['hienthi'];
	if($hienthi==0)
	{
		$sqlUPDATE_ORDER = "UPDATE table_news_list SET hienthi =1 WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
		$sqlUPDATE_ORDER = "UPDATE table_news_list SET hienthi =0  WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}	
	}
	//===========================================================
	if($_REQUEST['noibat']!='')
	{
		$id_up = $_REQUEST['noibat'];
		$sql_sp = "SELECT id,noibat FROM table_news_list where id='".$id_up."' ";
		$d->query($sql_sp);
		$lists= $d->result_array();
		$noibat=$lists[0]['noibat'];
	if($noibat==0)
	{
		$sqlUPDATE_ORDER = "UPDATE table_news_list SET noibat =1 WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}
	else
	{
		$sqlUPDATE_ORDER = "UPDATE table_news_list SET noibat =0  WHERE  id = ".$id_up."";
		$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");
	}	
	}
	
	$sql = "select * from #_news_list where id<>0 ";
	if($_REQUEST['key']!='')
	{
		$sql.=" and ten like '%".$_REQUEST['key']."%'";
	}
	$sql.=" and type='".$_REQUEST['type']."'order by stt,id desc";
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=news&act=man_list";
	$maxR=20;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

//===========================================================
function get_list(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Kh??ng nh???n ???????c d??? li???u", $duongdan);
	
	$sql = "select * from #_news_list where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("D??? li???u kh??ng c?? th???c", $duongdan);
	$item = $d->fetch_array();
}
//===========================================================
function save_list(){
	global $d;
	$file_name_item=$_FILES['file']['name'].fns_Rand_digit(0,9,4);
	if(empty($_POST)) transfer("Kh??ng nh???n ???????c d??? li???u", $duongdan);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){		
		$id =  themdau($_POST['id']);		
		if($photo = upload_image("file", _format_duoihinh ,_upload_tintuc,$file_name)){
			$data['photo'] = $photo;	
			$d->setTable('news_item');
			$d->setWhere('id', $id);
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_tintuc.$row['photo']);
			}
		}
		$data['ten'] = $_POST['ten'];
		$data['tenen'] = $_POST['tenen'];
		$data['type'] = $_REQUEST['type'];
		$data['tenkhongdau'] = changeTitle($_POST['ten']);
		$data['id_danhmuc'] = (int)$_POST['id_danhmuc'];
		$data['stt'] = $_POST['stt'];	
		$data['noidung'] = $_POST['noidung'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['noibat'] = isset($_POST['noibat']) ? 1 : 0;		
		$data['ngaysua'] = time();	
		
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		
		$d->setTable('news_list');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=news&act=man_list&curPage=".$_REQUEST['curPage']."&type=".$_REQUEST['type']."");
		else
			transfer("C???p nh???t d??? li???u b??? l???i", $duongdan);
	}else{
		if($photo = upload_image("file", _format_duoihinh ,_upload_tintuc,$file_name)){
			$data['photo'] = $photo;
		}
		$data['ten'] = $_POST['ten'];
		$data['tenen'] = $_POST['tenen'];
		$data['type'] = $_REQUEST['type'];
		$data['tenkhongdau'] = changeTitle($_POST['ten']);
		$data['id_danhmuc'] = (int)$_POST['id_danhmuc'];
		$data['stt'] = $_POST['stt'];
		$data['noidung'] = $_POST['noidung'];
		$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
		$data['noibat'] = isset($_POST['noibat']) ? 1 : 0;			
		$data['ngaytao'] =time();	
		
		$data['title'] = $_POST['title'];
		$data['keywords'] = $_POST['keywords'];
		$data['description'] = $_POST['description'];
		
		$d->setTable('news_list');
		if($d->insert($data))
			redirect("index.php?com=news&act=man_list&curPage=".$_REQUEST['curPage']."&type=".$_REQUEST['type']."");
		else
			transfer("L??u d??? li???u b??? l???i", $duongdan);
	}
}
//===========================================================
function savestt_list(){
	global $d;
	if(empty($_POST)) transfer("Kh??ng nh???n ???????c d??? li???u", $duongdan);
	
	for($i=0; $i<20; $i++)
	{
		$id = $_POST['sttan'.$i];
		if($id!='')
		{
			$data['stt'] = $_POST['stt'.$i];
			$d->reset();
			$d->setTable('news_list');
			$d->setWhere('id', $id);
			if(!$d->update($data)) transfer("C???p nh???t d??? li???u b??? l???i", $duongdan);	
		}
	}
	redirect("index.php?com=news&act=man_list&curPage=".$_REQUEST['curPage']);
}
//===========================================================

function delete_list(){
	global $d;
	if(isset($_GET['id']))
	{
		$id =  themdau($_GET['id']);		
		$d->reset();		
		//X??a danh m???c
		$sql = "delete from #_news_list where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0)
		{
			while($row = $d->fetch_array())
			{
				delete_file(_upload_tintuc.$row['photo']);
			}
			$sql = "delete from #_news_list where id='".$id."'";
			$d->query($sql);
		}
		
		//X??a s???n ph???m thu???c lo???i ????
		$sql = "select id,thumb,photo from #_news where id_danhmuc='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0)
		{
			while($row = $d->fetch_array())
			{
				delete_file(_upload_tintuc.$row['photo']);
				delete_file(_upload_tintuc.$row['thumb']);
			}
			$sql = "delete from #_news where id_list='".$id."'";
			$d->query($sql);
		}

		if($d->query($sql))
			redirect("index.php?com=news&act=man_list&curPage=".$_REQUEST['curPage']."");
		else
			transfer("X??a d??? li???u b??? l???i", $duongdan);
	}
	elseif (isset($_GET['listid'])==true)
	{
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();							
				
				$sql = "delete from #_news_list where id='".$id."'";
				$d->query($sql);
				if($d->num_rows()>0)
				{
					while($row = $d->fetch_array())
					{
						delete_file(_upload_tintuc.$row['photo']);
					}
					$sql = "delete from #_news_list where id='".$id."'";
					$d->query($sql);
				}
				
				$sql = "select id,thumb,photo from #_news where id_danhmuc='".$id."'";
				$d->query($sql);
				if($d->num_rows()>0)
				{
					while($row = $d->fetch_array())
					{
						delete_file(_upload_tintuc.$row['photo']);
						delete_file(_upload_tintuc.$row['thumb']);
					}
					$sql = "delete from #_news where id_danhmuc='".$id."'";
					$d->query($sql);
				}

		} 
		redirect("index.php?com=news&act=man_list&curPage=".$_REQUEST['curPage']."");
		}
		else transfer("Kh??ng nh???n ???????c d??? li???u", $duongdan);
}
//========== end list ==========
?>
