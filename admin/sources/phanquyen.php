<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$urldanhmuc ="";
$urldanhmuc.= (isset($_REQUEST['id_list'])) ? "&id_list=".addslashes($_REQUEST['id_list']) : "";
$urldanhmuc.= (isset($_REQUEST['id_cat'])) ? "&id_cat=".addslashes($_REQUEST['id_cat']) : "";
$urldanhmuc.= (isset($_REQUEST['id_item'])) ? "&id_item=".addslashes($_REQUEST['id_item']) : "";

$id=$_REQUEST['id'];

	switch($act){
	case 'load_per':
		initEditRle();
		break;
	case 'add-role':
		initAddRle();
		break;
	case 'delete_per':
		
		initDelRle();
	
		break;
	case 'add_user_to_per':
		
		addUserToPer();
	
		break;
		
		
	case "load":
		loadPermission();
		break;
	case "man":
		get_items();
		$template = "phanquyen/items";
		break;
	case "add":		
		$template = "phanquyen/item_add";
		break;
	case "edit":		
		get_item();
		$template = "phanquyen/item_add";
		break;
	case "save":
		save_item();
		break;
	case "delete":
		delete_item();
		break;
}
function initEditRle(){
	$id =  $_POST['id'];
	global $d;
	if(!$_POST['action']){
		$d->query("select * from #_permission where id = ".$id);
		echo json_encode($d->fetch_array());
		die;
	}

}
function initDelRle(){
	global $d;
	$d->query("delete  from #_user_permission where per_id = ".$_POST['id']);
	$d->query("delete from #_permission where id =".$_POST['id']);
	die;
}
function addUserToPer(){
	 
	$data['has_man'] = $_POST['view'];
	$data['has_add'] = $_POST['add'];
	$data['has_edit'] = $_POST['edit'];
	$data['has_delete'] = $_POST['delete'];
	$data['has_act'] = $_POST['act_exec'];
	$id_per = $_POST['id_per'];
	$id_user = $_POST['id_user'];
	$data['user_id'] = $id_user;
	$data['per_id'] = $id_per;
	global $d;
	
	$d->reset();
	$sql="select * from #_permission where id='".$id_per."'";
	$d->query($sql);
	$rs_per=$d->fetch_array();
	
	$d->reset();
	$d->query("select * from #_user_permission where user_id = ".$id_user." and per_id = ".$id_per);
	$stt = false;
	if($d->num_rows()==1){
		$r = $d->fetch_array();
		$d->setTable("user_permission");
		$d->setWhere("id",$r['id']);
		
		$stt = $d->update($data);
	}else{
		$d->setTable("user_permission");
		$stt = $d->insert($data);
	
	}
	echo json_encode(array("stt"=>$stt,"data"=>$data,"rs_per"=>$rs_per,"post"=>$_POST,"sql"=>"select * from #_user_permission where user_id = ".$id_user." and per_id = ".$id_per));
	die;
}
function  loadPermission(){

	
	global $d;
	$d->query("select * from #_permission");
	$per = $d->result_array();
	$d->query("select * from #_user_permission where user_id = ".$_POST['id']);
	$per_user = $d->result_array();
	include _template."phanquyen/load_per.php";
	die;

}
function initAddRle(){
	
	if(isAjaxRequest()){
		$post = $_POST['role'];
		$stt = 0;
		global $d;
		if($_POST['id']){
			$d->setTable("permission");
			$d->setWhere("id",$_POST['id']);
			$stt = $d->update($post);
			
		}else{
			$d->query("select * from #_permission where com='".$post['com']."' and add_exec='".$post['add_exec']."' and delete_exec='".$post['delete_exec']."' and edit_exec='".$post['edit_exec']."'");
		
		
		
			if(!$d->num_rows()){
				$d->setTable("permission");
				$stt = $d->insert($post);
				
			}
			
			
		}
			echo json_encode(array("stt"=>$stt,"post"=>$_POST));
				die;

}
}



#====================================
function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}

function get_items(){
	global $d, $items, $paging,$urldanhmuc;
	
	
	$sql = "select * from #_permission";		
	$d->query($sql);
	$items = $d->result_array();
	
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=phanquyen&act=man".$urldanhmuc;
	$maxR=20;
	$maxP=20;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}

function get_item(){
	global $d, $item,$ds_tags;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=phanquyen&act=man");	
	$sql = "select * from #_permission where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=phanquyen&act=man");
	$item = $d->fetch_array();	
}

function save_item(){
	global $d;
	$file_name=fns_Rand_digit(0,9,12);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=phanquyen&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	
	
	if($id){
		$id =  themdau($_POST['id']);
		$data['ten'] = $_POST['ten'];
		$data['com'] = $_POST['biencom'];	
		$data['them'] = isset($_POST['them']) ? 1 : 0;
		$data['sua'] = isset($_POST['sua']) ? 1 : 0;
		$data['xoa'] = isset($_POST['xoa']) ? 1 : 0;
		$data['full'] = isset($_POST['full']) ? 1 : 0;
		$data['none'] = isset($_POST['none']) ? 1 : 0;
		$d->setTable('phanquyen');
		$d->setWhere('id', $id);
		if($d->update($data))
			redirect("index.php?com=phanquyen&act=man&curPage=".$_REQUEST['curPage']."");
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=phanquyen&act=man");
	}else{
		$data['ten'] = $_POST['ten'];
		$data['com'] = $_POST['biencom'];	
		$data['them'] = isset($_POST['them']) ? 1 : 0;
		$data['sua'] = isset($_POST['sua']) ? 1 : 0;
		$data['xoa'] = isset($_POST['xoa']) ? 1 : 0;
		$data['full'] = isset($_POST['full']) ? 1 : 0;
		$data['none'] = isset($_POST['none']) ? 1 : 0;
		$d->setTable('phanquyen');
		if($d->insert($data))
		{			
			redirect("index.php?com=phanquyen&act=man");
		}
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=phanquyen&act=man");
	}
}

function delete_item(){
	global $d;
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		
		$d->reset();
		$sql = "select * from #_permission where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_permission.$row['photo']);
				delete_file(_upload_permission.$row['thumb']);
			}
			$sql = "delete from #_permission where id='".$id."'";
			$d->query($sql);
		}
		
		if($d->query($sql))
			redirect("index.php?com=phanquyen&act=man");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=phanquyen&act=man");
	}elseif (isset($_GET['listid'])==true){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
		$sql = "select * from #_permission where id='".$id."'";
		$d->query($sql);
		if($d->num_rows()>0){
			while($row = $d->fetch_array()){
				delete_file(_upload_permission.$row['photo']);
				delete_file(_upload_permission.$row['thumb']);
			}
			$sql = "delete from #_permission where id='".$id."'";
			$d->query($sql);
		}
			
		} redirect("index.php?com=phanquyen&act=man");} else transfer("Không nhận được dữ liệu", "index.php?com=phanquyen&act=man");
}
?>