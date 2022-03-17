<div class="header">
	<a href="#menu_mobi" class="hien_menu"><i class="fa fa-bars"></i> MENU</a>
	
</div> 
<nav id="menu_mobi" style="height:0; overflow:hidden;">
    <ul>	
    	<div id="search_mobi">
            <input type="text" name="keyword2" id="keyword2" onKeyPress="doEnter2(event,'keyword2');" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}">
            <i class="fa fa-search" aria-hidden="true" onclick="onSearch2(event,'keyword2');"></i>
    	</div><!---END #search-->
         <li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href=""><?=_trangchu?></a></li>
        <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?></a></li>
         <li><a class="<?php if($_REQUEST['com'] == 'san-pham-dich-vu') echo 'active'; ?>" href="san-pham-dich-vu.html"><?=_sanpham?></a>
        <?php if(count($sanpham_dichvu_danhmuc)>0) { ?>
          <ul>
          <?php foreach($sanpham_dichvu_danhmuc as $v){ ?>
                <li><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html"><?=$v['ten']?></a> </li>
                <?php } ?>
            </ul>
        <?php } ?>
        </li>
        <li><a class="<?php if($_REQUEST['com'] == 'ket-cau-thep') echo 'active'; ?>" href="ket-cau-thep.html"><?=_ketcauthep?></a>
        </li>
         <li><a class="<?php if($_REQUEST['com'] == 'bat-dong-san') echo 'active'; ?>" href="bat-dong-san.html"><?=_batdongsan?></a>
          <?php if(count($batdongsan_danhmuc)>0) { ?>
            <ul>
              <?php foreach($batdongsan_danhmuc as $v){ ?>
                <li><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a>
               <?php } ?>
            </ul>
        <?php } ?>
        </li>
         <li><a class="<?php if($_REQUEST['com'] == 'du-an') echo 'active'; ?>" href="du-an.html"><?=_duan?></a>
          <?php if(count($duan_danhmuc)>0) { ?>
          <ul>
              <?php foreach($duan_danhmuc as $v){
          ?>
                <li><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a>
               <?php } ?>
            </ul>
        <?php } ?>
        </li>
        <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html"><?=_tintuc?></a>
        </li>
        <li><a class="<?php if($_REQUEST['com'] == 'tuyen-dung') echo 'active'; ?>" href="tuyen-dung.html"><?=_tuyendung?></a></li>
        <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
    </ul>
</nav>