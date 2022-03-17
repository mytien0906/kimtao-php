<div class="logo"> <a href="#" target="_blank" onclick="return false;"><img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>
    
    <li class="categories_li <?php if($_GET['type']=='gioi-thieu' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_gt"><a href="" title="" class="exp"><span>Giới thiệu</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý giới thiệu","","gioi-thieu")?>
        </ul>
      </li>

        <li class="categories_li <?php if($_GET['type']=='san-pham-dich-vu' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_spdv"><a href="" title="" class="exp"><span>sản phẩm, dịch vụ</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man_danhmuc"),array("act_exec"=>"man_danhmuc,edit_danhmuc,delete_danhmuc,add_danhmuc"),"Danh mục cấp 1","","san-pham-dich-vu")?>
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý sản phẩm dịch vụ","","san-pham-dich-vu")?>
        </ul>
      </li>

        <li class="categories_li <?php if($_GET['type']=='ket-cau-thep' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_kc"><a href="" title="" class="exp"><span>kết cấu thép</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý kết cấu thép","","ket-cau-thep")?>
        </ul>
      </li>

        <li class="categories_li <?php if($_GET['type']=='bat-dong-san' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_bds"><a href="" title="" class="exp"><span>bất động sản</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man_danhmuc"),array("act_exec"=>"man_danhmuc,edit_danhmuc,delete_danhmuc,add_danhmuc"),"Danh mục cấp 1","","bat-dong-san")?>
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý bất động sản","","bat-dong-san")?>
        </ul>
      </li>


        <li class="categories_li <?php if($_GET['type']=='du-an' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_da"><a href="" title="" class="exp"><span>dự án</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man_danhmuc"),array("act_exec"=>"man_danhmuc,edit_danhmuc,delete_danhmuc,add_danhmuc"),"Danh mục cấp 1","","du-an")?>
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý dự án","","du-an")?>
        </ul>
      </li>


  <li class="categories_li <?php if($_GET['type']=='tin-tuc' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Tin tức</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý tin tức","","tin-tuc")?>
        </ul>
      </li>

        <li class="categories_li <?php if($_GET['type']=='tuyen-dung' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_td"><a href="" title="" class="exp"><span>tuyển dụng</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý tuyển dụng","","tuyen-dung")?>
        </ul>
      </li>

      <li class="categories_li <?php if($_GET['type']=='chinh-sach' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_cs"><a href="" title="" class="exp"><span>chính sách</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý chính sách","","chinh-sach")?>
        </ul>
      </li>


      <li class="categories_li <?php if($_GET['type']=='ve-chung-toi' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_vct"><a href="" title="" class="exp"><span>về chúng tôi</span><strong></strong></a>
        <ul class="sub">
      <?=$atool->generateMenuType("news",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Quản lý về chúng tôi","","ve-chung-toi")?>
        </ul>
      </li>

  
   <li class="categories_li <?php if($_GET['com']=='about' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    <ul class="sub">
		
		<?=$atool->generateMenuType("video",array("man_exec"=>"man"),array("act_exec"=>"man,edit,delete,add"),"Video","","about")?>
		<?=$atool->generateMenuType("about",array("man_exec"=>"capnhat"),array("act_exec"=>"capnhat"),"Cập nhật liên hệ","","lienhe")?>
		<?=$atool->generateMenuType("about",array("man_exec"=>"capnhat"),array("act_exec"=>"capnhat"),"Cập nhật footer","","footer")?>
    </ul>
  </li>


    
      
   
   
      <li class="categories_li gallery_li <?php if($_GET['com']=='anhnen' || $_GET['com']=='background' || $_GET['com']=='slider' || $_GET['com']=='letruot') echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>Banner - Quảng cáo</span><strong></strong></a>
     <ul class="sub">
	
    <?=$atool->generateMenuType("background",array("man_exec"=>"capnhat"),array("act_exec"=>"capnhat"),"Cập nhật logo","","logo")?>
  <?=$atool->generateMenuType("background",array("man_exec"=>"capnhat"),array("act_exec"=>"capnhat"),"Cập nhật tên công ty","","ten_cty")?>
		<?=$atool->generateMenuType("slider",array("man_exec"=>"man_photo"),array("act_exec"=>"man_photo,edit_photo,delete_photo,add_photo"),"Cập nhật slider","","slider")?>
		<?=$atool->generateMenuType("slider",array("man_exec"=>"man_photo"),array("act_exec"=>"man_photo,edit_photo,delete_photo,add_photo"),"Quản lý đối tác","","doitac")?>
    <?=$atool->generateMenuType("background",array("man_exec"=>"capnhat"),array("act_exec"=>"capnhat"),"Cập nhật banner quảng cáo","","qc")?>
     </ul>
     </li>

  
     <li class="categories_li setting_li <?php if($_GET['com']=='company' || $_GET['com']=='meta' || $_GET['com']=='about' || $_GET['com']=='user') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp"><span>Nội dung khác</span><strong></strong></a>
    <ul class="sub">
		<?=$atool->generateMenu("company",array("man_exec"=>"capnhat"),array("act_exec"=>"capnhat"),"Cập nhật thông tin công ty")?>
		<?=$atool->generateMenu("meta",array("man_exec"=>"capnhat"),array("act_exec"=>"capnhat"),"Cập nhật thông tin SEO website")?>
		<?=$atool->generateMenu("user",array("man_exec"=>"admin_edit"),array("act_exec"=>"admin_edit"),"Quản lý Tài Khoản")?>
    </ul>
  </li>
</ul>



