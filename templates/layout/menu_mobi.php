<div class="header">
	<a href="#menu_mobi" class="hien_menu"><i class="fa fa-bars"></i> MENU</a>
	<?php /*?><a href="gio-hang.html" class="sp_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php if(count($_SESSION['cart'])>0)echo count($_SESSION['cart']);else echo '0';?></span><sup></sup></a> <?php */?>
    <a class="hotline_mobi" href="tel:<?=$company['dienthoai']?>"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
</div> 
<nav id="menu_mobi" style="height:0; overflow:hidden;">
    <ul>	
    	<div id="search_mobi">
            <input type="text" name="keyword2" id="keyword2" onKeyPress="doEnter2(event,'keyword2');" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}">
            <i class="fa fa-search" aria-hidden="true" onclick="onSearch2(event,'keyword2');"></i>
    	</div><!---END #search-->

		<li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href=""><?=_trangchu?></a></li>
        <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?></a></li>
        <li><a class="<?php if($_REQUEST['com'] == 'san-pham') echo 'active'; ?>" href="san-pham.html"><?=_sanpham?></a>
            <?php if(count($product_danhmuc)>0){?>
            <ul>
                <?php foreach($product_danhmuc as $v){ 
                    $product_list = $mt -> List_DanhMucCap2("product_list","ten$lang as ten,tenkhongdau,type,id","san-pham",$v['id']);
                ?>
                <li><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.h"><?=$v['ten']?></a>
                    <?php if(count($product_list)>0){?>
                    <ul>
                        <?php foreach($product_list as $k){ 
                            $product_cat = $mt -> List_DanhMucCap3("product_cat","ten$lang as ten,tenkhongdau,type,id","san-pham",$k['id']);
                        ?>
                            <li><a href="<?=$k['type']?>/<?=$k['tenkhongdau']?>.ht"><?=$k['ten']?></a>
                                <?php if(count($product_cat)>0){?>
                                    <ul>
                                        <?php foreach($product_cat as $val){ 
                                            $product_item = $mt -> List_DanhMucCap4("product_item","ten$lang as ten,tenkhongdau,type,id","san-pham",$val['id']);
                                        ?>
                                            <li><a href="<?=$val['type']?>/<?=$val['tenkhongdau']?>.htm"><?=$val['ten']?></a>
                                                <?php if(count($product_item)>0){?>
                                                    <ul>
                                                        <?php foreach($product_item as $value){?>
                                                            <li><a href="<?=$value['type']?>/<?=$value['tenkhongdau']?>.htm"><?=$value['ten']?></a></li>
                                                        <?php }?>
                                                    </ul>
                                                <?php }?>
                                            </li>
                                        <?php }//?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php }?>
                </li>
                <?php } ?>
            </ul>
            <?php }?>	
        </li>
        <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html"><?=_tintuc?></a>
            <?php if(count($tintuc_danhmuc)>0){?>
            <ul>
                <?php foreach($tintuc_danhmuc as $v){
                    $tintuc_list = $mt -> List_DanhMucCap2("news_list","ten$lang as ten,tenkhongdau,type,id","tin-tuc",$v['id']);
                ?>
                <li><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.h" title="<?=$v['ten']?>"><?=$v['ten']?></a>
                    <?php if(count($tintuc_list)>0){?>
                    <ul>
                        <?php foreach($tintuc_list as $k){?>
                        <li><a href="<?=$k['type']?>/<?=$k['tenkhongdau']?>.ht" title="<?=$k['ten']?>"><?=$k['ten']?></a></li>
                        <?php }//?>
                    </ul>
                    <?php }?>
                </li>
                <?php }?>
            </ul>
            <?php }?>
        </li>
        <li><a class="<?php if($_REQUEST['com'] == 'video') echo 'active'; ?>" href="video.html">Video</a></li>
        <li><a class="<?php if($_REQUEST['com'] == 'album') echo 'active'; ?>" href="album.html">album</a></li>
        <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
    </ul>
</nav>