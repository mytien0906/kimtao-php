<?php	if(!defined('_source')) die("Error");

	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	
	$urlcu = "";
	$urlcu .= (isset($_REQUEST['p'])) ? "&curPage=".addslashes($_REQUEST['p']) : "";

switch($act){
	case "man":
		get_giasearchs();
		$template = "giasearch/giasearchs";
		break;
		
	case "add_giasearch":		
		$template = "giasearch/giasearch_add";
		break;
		
	case "edit_giasearch":
		get_giasearch();
		$template = "giasearch/giasearch_edit";
		break;
		
	case "save_giasearch":
		save_giasearch();
		break;
		
	case "savestt_giasearch":
		savestt_giasearch();
		break;
		
	case "delete_giasearch":
		delete_giasearch();
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

function get_giasearchs(){	
	global $d, $items, $url_link,$totalRows , $pageSize, $offset,$paging,$urlcu;
	
	$sql="SELECT count(id) AS numrows FROM #_giasearch where id<>0";
	$d->query($sql);	
	$dem=$d->fetch_array();
	$totalRows=$dem['numrows'];
	$page=$_GET['p'];
	
	$pageSize=10;
	$offset=10;
						
	if ($page=="")
		$page=1;
	else 
		$page=$_GET['p'];
	$page--;
	$bg=$pageSize*$page;		
	
	$sql = "select * from #_giasearch where id<>0 $where limit $bg,$pageSize";		
	$d->query($sql);
	$items = $d->result_array();	
	$url_link="index.php?com=giasearch&act=man".$urlcu;
}

function get_giasearch(){
	global $d, $item, $list_cat,$urlcu;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Không nhận được dữ liệu", "index.php?com=giasearch&act=man".$urlcu);
	$d->setTable('giasearch');
	$d->setWhere('id', $id);
	$d->select();
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=giasearch&act=man".$urlcu);
	$item = $d->fetch_array();	
}

function save_giasearch(){
	global $d,$urlcu;
	
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=giasearch&act=man".$urlcu);
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
			$data['giatu'] = $_POST['giatu'];
			$data['giaden'] = $_POST['giaden'];	
			$data['ten'] = $_POST['ten'];

			$d->reset();
			$d->setTable('giasearch');
			$d->setWhere('id', $id);
			if(!$d->update($data)) transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=giasearch&act=man".$urlcu);
			redirect("index.php?com=giasearch&act=man".$urlcu);
			
	}else{ 							
			$data['ten'] = $_POST['ten'];	
			$data['giatu'] = $_POST['giatu'];	
			$data['giaden'] = $_POST['giaden'];																
			$d->setTable('giasearch');
			if($d->insert($data))
				redirect("index.php?com=giasearch&act=man".$urlcu);
			else
				transfer("Lưu dữ liệu bị lỗi", "index.php?com=giasearch&act=man".$urlcu);
	}
}
//===========================================================
function delete_giasearch(){
	global $d,$urlcu;
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->setTable('giasearch');
		$d->setWhere('id', $id);
		$d->select();
		if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=giasearch&act=man".$urlcu);
		$row = $d->fetch_array();
		if($d->delete())
			redirect("index.php?com=giasearch&act=man".$urlcu);
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=giasearch&act=man".$urlcu);
	}
}

?>

	
