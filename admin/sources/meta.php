<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
switch($act){
	case "capnhat":
		get_gioithieu();
		$template = "meta/item_add";
		break;
	case "save":
		save_gioithieu();
		break;
		
	default:
		$template = "index";
}
function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}
function get_gioithieu(){
	global $d, $item;

	$sql = "select * from #_meta limit 0,1";
	$d->query($sql);
	//if($d->num_rows()==0) transfer("Dữ liệu chưa khởi tạo.", "index.php");
	$item = $d->fetch_array();
}

function save_gioithieu(){
	global $d,$config,$row;
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=meta&act=capnhat");
	
	if($photo = upload_image("file", _format_duoihinh,_upload_hinhanh,'images_facebook')){
		$data['photo'] = $photo;
		$data['thumb'] = create_thumb($data['photo'], 400, 240, _upload_hinhanh,'images_facebook',2);
		delete_file(_upload_hinhanh.$data['photo']);
		$d->setTable('meta');			
		$d->select();
		if($d->num_rows()>0){
			$row = $d->fetch_array();
			delete_file(_upload_hinhanh.$row['thumb']);
		}
	}
		
	$data['title'] = $_POST['title'];	
	$data['keywords'] = $_POST['keywords'];
	$data['description'] = $_POST['description'];
	$data['h1'] = $_POST['h1'];
	$data['h2'] = $_POST['h2'];
	$data['h3'] = $_POST['h3'];
	$data['alt'] = $_POST['alt'];
	$data['api_facebook'] = $_POST['api_facebook'];
	
	$d->reset();
	$d->setTable('meta');
	if($d->update($data))
		header("Location:index.php?com=meta&act=capnhat");
	else
		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=meta&act=capnhat");
}

?>