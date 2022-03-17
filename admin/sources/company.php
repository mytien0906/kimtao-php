<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "capnhat":
		get_gioithieu();
		$template = "company/item_add";
		break;
	case "save":
		save_gioithieu();
		break;
		
	default:
		$template = "index";
}

function get_gioithieu(){
	global $d, $item;
	$sql = "select * from #_company limit 0,1";
	$d->query($sql);
	//if($d->num_rows()==0) transfer("Dữ liệu chưa khởi tạo.", "index.php");
	$item = $d->fetch_array();
}
function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}
function save_gioithieu(){
	global $d,$config;
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=company&act=capnhat");
	
	foreach ($config['lang'] as $key => $value) {
			$data['ten'.$key] = $_POST['ten'.$key];	
			$data['diachi'.$key] = $_POST['diachi'.$key];		
	}
	if($_POST['Latitude']!=0 and $_POST['Longitude']!=0){
			$toado=$_POST['Latitude'].','.$_POST['Longitude'];
			$data['toado'] = $toado;
		}
	$file_name = $_FILES['favicon']['name'];

	if($favicon = upload_image("favicon", _format_duoihinh,_upload_hinhanh,$file_name)){
			$data['favicon'] = $favicon;
			$data['faviconthumb'] = create_thumb($data['favicon'], 32, 32, _upload_hinhanh,$file_name,2);
			$d->setTable('company');			
			$d->select();
			if($d->num_rows()>0){
				$row = $d->fetch_array();
				delete_file(_upload_hinhanh.$row['favicon']);
				delete_file(_upload_hinhanh.$row['faviconthumb']);
			}
	}
	if($sitemap = upload_image("sitemap", "xml|XML","../","sitemap")){
			$data['sitemap'] = $sitemap;
	}

	$data['dienthoai'] = $_POST['dienthoai'];
	$data['email'] = $_POST['email'];
	$data['website'] = $_POST['website'];
	$data['fax'] = $_POST['fax'];	
	$data['skype'] = $_POST['skype'];	
	$data['fanpage'] = $_POST['fanpage'];
	$data['facebook'] = $_POST['facebook'];	
	$data['tiwtter'] = $_POST['tiwtter'];
	$data['google'] = $_POST['google'];	
	$data['instagram'] = $_POST['instagram'];	
	$data['youtube'] = $_POST['youtube'];
	$data['codethem'] = magic_quote($_POST['codethem']);	
	$data['code_header'] = magic_quote($_POST['code_header']);	
	$data['hotline'] = $_POST['hotline'];
	
	$data['iframe_map'] = magic_quote($_POST['iframe_map']);	

	
	$d->reset();
	$d->setTable('company');
	if($d->update($data))
		transfer("Cập nhật dữ liệu Thành Công", "index.php?com=company&act=capnhat");
	else
		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=company&act=capnhat");
}

?>