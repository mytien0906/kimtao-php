<?php if(!defined('_lib')) die("Error");
function List_Video(){
	global $d,$row,$lang;
	$sql = "select ten$lang as ten,link from #_video where hienthi=1 order by stt asc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_Video
function Get_DuongDan($table, $option, $id){
	global $d,$row,$lang;
	$sql = "select ".$option." from #_".$table." where id='".$id."'";
	$d->query($sql);
	$row = $d->fetch_array();
	return $row;
}//function Get_DuongDan
function List_HoTroTrucTuyen(){
	global $d,$row,$lang;
	$sql = "select ten$lang as ten,dienthoai,email,yahoo,skype,facebook from #_yahoo where hienthi=1 order by stt asc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_HoTroTrucTuyen
function List_BaiVietNoiBat($type){
	global $d,$row,$lang;
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,type,mota$lang as mota,ngaytao,photo from #_news where hienthi=1 and type='".$type."' and noibat=1 order by stt,id desc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_TinTucNoiBat
function List_SanPhamNoiBat($type){
	global $d,$row,$lang;
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,type,mota$lang as mota,ngaytao,photo from #_product where hienthi=1 and type='".$type."' and noibat=1 order by stt,id desc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_TinTucNoiBat
function List_SanPhamTheoDanhMuc($option,$type,$id){
	global $d,$row;
	$sql = "select ".$option." from #_product where hienthi=1 and type='".$type."' and id_danhmuc=".$id." order by stt,id desc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_SanPhamTheoDanhMuc
function Get_Fanpage($w,$h,$link){
	global $d,$row;
	$row = "<div class='fb-page' data-href=".$link." data-tabs='timeline' data-width=".$w." data-height=".$h." data-small-header='false' data-adapt-container-width='true' data-hide-cover='false' data-show-facepile='true'><blockquote cite=".$link." class='fb-xfbml-parse-ignore'><a href=".$link.">Facebook</a></blockquote></div>";
	return $row;
}//function Get_NoiDung
function Get_NoiDung($type){
	global $d,$row,$lang;
	$sql = "select noidung$lang as noidung,mota$lang as mota,ten$lang as ten,photo from #_about where type='".$type."'";
	$d->query($sql);
	$row = $d->fetch_array();
	return $row;
}//function Get_NoiDung
function List_MangXaHoi(){
	global $d,$row,$lang;
	$sql = "select ten$lang as ten,link,photo from #_lkweb where hienthi=1 order by stt asc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_MangXaHoi
function List_HinhAnh($type){
	global $d,$row,$lang;
	$sql = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='".$type."' order by stt asc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_HinhAnh
function Get_HinhAnh($type){
	global $d,$row,$lang;
	$sql = "select photo$lang as photo,link from #_background where hienthi=1 and type='".$type."'";
	$d->query($sql);
	$row = $d->fetch_array();
	return $row;
}//function Get_HinhAnh
function List_DanhMucCap1($table, $op_table, $type){
	global $d,$row;
	$sql = "select ".$op_table." from table_".$table." where hienthi=1 and type='".$type."' order by stt asc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_DanhMucCap1
function List_DanhMucCap2($table, $op_table, $type, $idDanhMuc){
	settype($idDanhMuc,"int");
	global $d,$row;
	$sql = "select ".$op_table." from table_".$table." where hienthi=1 and type='".$type."' and id_danhmuc=".$idDanhMuc." order by stt asc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_DanhMucCap2
function List_DanhMucCap3($table, $op_table, $type, $idList){
	settype($idList,"int");
	global $d,$row;
	$sql = "select ".$op_table." from table_".$table." where hienthi=1 and type='".$type."' and id_list=".$idList." order by stt asc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_DanhMucCap3
function List_DanhMucCap4($table, $op_table, $type, $idCat){
	settype($idCat,"int");
	global $d,$row;
	$sql = "select ".$op_table." from table_".$table." where hienthi=1 and type='".$type."' and id_Cat=".$idCat." order by stt asc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_DanhMucCap3




//noibat
function List_BaiVietTheoDanhMuc($option,$type,$id){
	global $d,$row;
	$sql = "select ".$option." from #_news where hienthi=1 and type='".$type."' and id_danhmuc=".$id." order by stt,id desc";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_SanPhamTheoDanhMuc
function List_BaiVietNoiBat_Limit($type){
	global $d,$row,$lang;
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,type,mota$lang as mota,ngaytao,photo from #_news where hienthi=1 and type='".$type."' and noibat=1 order by stt,id desc limit 0,1";
	$d->query($sql);
	$row = $d->fetch_array();
	return $row;
}//function List_TinTucNoiBat

function List_BaiVietNoiBat_Limit_2($type){
	global $d,$row,$lang;
	$sql = "select id,ten$lang as ten,tenkhongdau,thumb,type,mota$lang as mota,ngaytao,photo from #_news where hienthi=1 and type='".$type."' and noibat=1 order by stt,id desc limit 0,3";
	$d->query($sql);
	$row = $d->result_array();
	return $row;
}//function List_TinTucNoiBat


?>