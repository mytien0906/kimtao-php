<?php if(!defined('_lib')) die("Error");

$product_danhmuc = List_DanhMucCap1("product_danhmuc","ten$lang as ten,tenkhongdau,type,id","san-pham");
$tintuc_danhmuc = List_DanhMucCap1("news_danhmuc","ten$lang as ten,tenkhongdau,type,id","tin-tuc");
$row_logo = Get_HinhAnh("logo");
$row_ten_cty = Get_HinhAnh("ten_cty");
$slider = List_HinhAnh("slider");
$doitac=List_HinhAnh("doitac");
$mxh_ft = List_MangXaHoi();
$row_about = Get_NoiDung("about");
$row_footer = Get_NoiDung("footer");
$company_contact = Get_NoiDung("lienhe");
$row_fanpage = Get_Fanpage("367","261",$company['fanpage']);
$tinmoi = List_BaiVietNoiBat("tin-tuc");
$hotro = List_HoTroTrucTuyen();
$quangcao = List_HinhAnh("quangcao");
$row_tintuc = List_BaiVietNoiBat("tin-tuc");
$count_tt = count($row_tintuc);
$video = List_Video();

$sanpham_dichvu_danhmuc = List_DanhMucCap1("news_danhmuc","ten$lang as ten,tenkhongdau,type,id","san-pham-dich-vu");
$batdongsan_danhmuc = List_DanhMucCap1("news_danhmuc","ten$lang as ten,tenkhongdau,type,id","bat-dong-san");
$duan_danhmuc = List_DanhMucCap1("news_danhmuc","ten$lang as ten,tenkhongdau,type,id","du-an");

$gioithieu = List_BaiVietNoiBat_Limit("gioi-thieu");

$sanpham_dichvu_2 = List_BaiVietNoiBat_Limit_2("san-pham-dich-vu");

$du_an = List_BaiVietNoiBat_Limit("du-an");

$duan = List_BaiVietNoiBat("du-an");
$qc = Get_HinhAnh("qc");
$chinhsach = List_BaiVietNoiBat("chinh-sach");
$vechungtoi = List_BaiVietNoiBat("ve-chung-toi");
?>