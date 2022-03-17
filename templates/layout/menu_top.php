<div class="h1200">
    <ul class="clear">	
        <li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href=""><?=_trangchu?><i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
        <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?><i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
         <li><a class="<?php if($_REQUEST['com'] == 'san-pham-dich-vu') echo 'active'; ?>" href="san-pham-dich-vu.html"><?=_sanpham?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        <?php if(count($sanpham_dichvu_danhmuc)>0) { ?>
           <div class="submenu">
               <div class="wrap-mnenu clearfix">
                <?php foreach($sanpham_dichvu_danhmuc as $k) { ?>
                   <div class="block-menu">
                      <div class="item-menu">
                          <div class="tieude-menu">
                              <a href="<?=$k['type']?>/<?=$k['tenkhongdau']?>.html" title="<?=$k['ten']?>">
                                <?=$k['ten']?>
                              </a>
                          </div>
                          <?php $baiviet_danhmuc = List_BaiVietTheoDanhMuc(" * ","san-pham-dich-vu",$k['id']); ?>
                          <div class="noidung-menu">
                             <?php if(count($baiviet_danhmuc)>0) { ?>
                                <?php foreach($baiviet_danhmuc as $v) { ?>
                                  <div class="ten-menu">
                                       <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v["ten$lang"]?>">
                                        <?=$v["ten$lang"]?>
                                       </a>
                                  </div>
                                <?php } ?>
                            <?php } ?>
                          </div>
                      </div>
                   </div>
                <?php } ?>
               </div>
           </div>
        <?php } ?>
        </li>
        <li><a class="<?php if($_REQUEST['com'] == 'ket-cau-thep') echo 'active'; ?>" href="ket-cau-thep.html"><?=_ketcauthep?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </li>
         <li><a class="<?php if($_REQUEST['com'] == 'bat-dong-san') echo 'active'; ?>" href="bat-dong-san.html"><?=_batdongsan?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <?php if(count($batdongsan_danhmuc)>0) { ?>
           <div class="submenu">
               <div class="wrap-mnenu clearfix">
                <?php foreach($batdongsan_danhmuc as $k) { ?>
                   <div class="block-menu">
                      <div class="item-menu">
                          <div class="tieude-menu">
                              <a href="<?=$k['type']?>/<?=$k['tenkhongdau']?>.html" title="<?=$k['ten']?>">
                                <?=$k['ten']?>
                              </a>
                          </div>
                          <?php $baiviet_danhmuc_bds = List_BaiVietTheoDanhMuc(" * ","bat-dong-san",$k['id']); ?>
                          <div class="noidung-menu">
                             <?php if(count($baiviet_danhmuc_bds)>0) { ?>
                                <?php foreach($baiviet_danhmuc_bds as $v) { ?>
                                  <div class="ten-menu">
                                       <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v["ten$lang"]?>">
                                        <?=$v["ten$lang"]?>
                                       </a>
                                  </div>
                                <?php } ?>
                            <?php } ?>
                          </div>
                      </div>
                   </div>
                <?php } ?>
               </div>
           </div>
        <?php } ?>
        </li>
         <li><a class="<?php if($_REQUEST['com'] == 'du-an') echo 'active'; ?>" href="du-an.html"><?=_duan?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <?php if(count($duan_danhmuc)>0) { ?>
           <div class="submenu">
               <div class="wrap-mnenu clearfix">
                <?php foreach($duan_danhmuc as $k) { ?>
                   <div class="block-menu">
                      <div class="item-menu">
                          <div class="tieude-menu">
                              <a href="<?=$k['type']?>/<?=$k['tenkhongdau']?>.html" title="<?=$k['ten']?>">
                                <?=$k['ten']?>
                              </a>
                          </div>
                          <?php $baiviet_danhmuc_duan = List_BaiVietTheoDanhMuc(" * ","du-an",$k['id']); ?>
                          <div class="noidung-menu">
                             <?php if(count($baiviet_danhmuc_duan)>0) { ?>
                                <?php foreach($baiviet_danhmuc_duan as $v) { ?>
                                  <div class="ten-menu">
                                       <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v["ten$lang"]?>">
                                        <?=$v["ten$lang"]?>
                                       </a>
                                  </div>
                                <?php } ?>
                            <?php } ?>
                          </div>
                      </div>
                   </div>
                <?php } ?>
               </div>
           </div>
        <?php } ?>
        </li>
        <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html"><?=_tintuc?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
       	</li>
        <li><a class="<?php if($_REQUEST['com'] == 'tuyen-dung') echo 'active'; ?>" href="tuyen-dung.html"><?=_tuyendung?><i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
        <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?><i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
    </ul>
    <div id="search">
        <input type="text" name="keyword" id="keyword" onKeyPress="doEnter(event,'keyword');" value="<?=_timkiemsanpham?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}">
        <i class="fa fa-search" aria-hidden="true" onclick="onSearch(event,'keyword');"></i>
    </div><!---END #search-->
</div>