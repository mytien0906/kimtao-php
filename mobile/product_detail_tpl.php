 <div class="h1200">
    <div class="dg-d clearfix"><?=$breadcumb?></div>
     <div class="tieude_giua">
         <?=_thongtinsanpham?>
    </div>
    <div class="box_container">
        <div class="wap_pro clearfix">
            <div class="zoom_slick">
                <a id="Zoom-1" class="MagicZoom" data-options="expandZoomMode: off;" href="<?=_upload_sanpham_l.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>">
    				<img src="<?=_upload_sanpham_l.$row_detail['photo']?>"> 
    			</a>
                <?php $count=count($hinhthem); if($count>0) {?>
                <div class="slick">
                    <a data-zoom-id="Zoom-1" data-image="<?=_upload_sanpham_l.$row_detail['photo']?>" href="<?=_upload_sanpham_l.$row_detail['photo']?>"><img src="thumb/100x100/1/<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['thumb'];else echo 'images/noimage.gif';?>" alt="<?=$row_detail['ten']?>"/></a>
                    <?php foreach($hinhthem as $v){?>
                    <a data-zoom-id="Zoom-1" data-options="zoomMode: magnifier;" data-image="<?=_upload_hinhthem_l.$v['photo']?>" href="<?=_upload_hinhthem_l.$v['photo']?>" title="<?=$row_detail['ten']?>"><img src="<?php if($v['thumb']!=NULL) echo _upload_hinhthem_l.$v['thumb']; else echo 'images/noimage.gif';?>" alt="<?=$v['ten']?>"/></a>
                    <?php } ?>

                </div>
                <?php } ?>
            </div>

            <ul class="product_info">
            	<li class="ten">
                    <?=$row_detail['ten']?>
                </li>
                <?php if($row_detail['masp'] != '') { ?>
                <li><b><?=_masanpham?>:</b>
                    <?=$row_detail['masp']?>
                      
                </li>
                <?php } ?>

                <li><b><i class="fa fa-eye"></i> <?=_luotxem?>:</b> <span><?=$row_detail['luotxem']?></span></li>
                <?php if($row_detail['mota'] != '') { ?>
                <li><b><?=_motangan?>:</b>
                    <?=$row_detail['mota']?>
                </li>
                <?php } ?>
                <?php if($row_detail['size'] != '') { ?>
                <li><b><?=_chonsize?>:</b>
                    <?php 
    						$arr_size = explode(',',$row_detail['size']);
    						foreach($arr_size as $key=>$value)
    						{
    							echo '<span class="size">'.$value.'</span>';
    						}
    					?>
                </li>
                <?php } ?>

                <?php if($row_detail['mausac'] != '') { ?>
                <li class="clearfix"><b style="float:left;"><?=_chonmau?>:</b>
                    <?php 
    						$arr_mausac = explode(',',$row_detail['mausac']);
    						foreach($arr_mausac as $key=>$value)
    						{
    						  echo '<span class="mausac" style="background:'.$value.'">'.$value.'</span>';
    						}
    					?>
                </li>
                <?php } ?>
                <li class="gia">
                Giá:    <?php if($row_detail['gia'] != 0)echo number_format($row_detail['gia'],0, ',', '.').' VND';else echo _lienhe; ?>
                </li>
                <?php if($row_detail['gia']<$row_detail['giacu']){?>
                <li>
                    <div class="txt_giany"><?=_giatruocday?>: <span class="gnt"><?= number_format($row_detail['giacu'],0,'.','.').'đ'?></span>
                        <?php if($row_detail['giamgia'] >0){?><span class="phantram_giam">-<?=intval(100 - (($row_detail['gia']*100)/$row_detail['giacu'])).'%'?></span>
                        <?php }//?>
                    </div>
                </li>
                <li>
                    <div class="txt_tietkiem"><?=_tietkiem?>:
                       <span><?=number_format($row_detail['giacu'] - $row_detail['gia'],0,'.','.').'Đ'?></span>
                    </div>
                </li>
                <?php }//?>
                <li class="clearfix">
                    <div class="soluong_11">
                        <a href="javascript:void()" class="minus a_1"><i class="fa fa-minus" aria-hidden="true"></i></a>
                        <input type="text" value="1" min="1" max="999" name="soluong" class="soluong">
                        <a href="javascript:void()" class="add a_1"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li><a href="javascript:void();" class="dathang mybtn btn-5 btn-5a icon-cart mybtn-cart"><span><?=_dathang?></span></a></li>
                <li>
                    <div class="addthis_native_toolbox"></div>
                </li>
            </ul>
        </div>
        <!--.wap_pro-->

        <div id="tabs">
            <ul id="ultabs" class="clearfix">
                <li>
                    <?=_thongtinsanpham?>
                </li>
                <li>
                    <?=_binhluan?>
                </li>
            </ul>

            <div id="content_tabs">
                <div class="tab">
                    <?=$row_detail['noidung']?>

                        <?php if(!empty($tags_sp)) { ?>
                        <div class="tags"><i class="fa fa-tags"></i> Tags:
                            <?php foreach($tags_sp as $k=>$tags_sp_item) { ?>
                            <a href="tags/<?=changeTitle($tags_sp_item['ten'])?>/<?=$tags_sp_item['id']?>.html" title="<?=$tags_sp_item['ten']?>">
                                <?=$tags_sp_item['ten']?>
                            </a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                </div>

                <div class="tab">
                    <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-numposts="5" data-width="100%"></div>
                </div>
            </div>
        </div>
    </div>

    <?php if(count($product)>0){?>
    <div class="tieude_giua"><?=_sanphamcungloai?></div>
    <div class="khung_chay">
        <div class="content_sp">
        <?php foreach($product as $v){?>
            <div class="item_sp">
                <a class="img hieuung_border" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
                    <img src="<?=_upload_sanpham_l.$v['thumb']?>" alt="<?=$v['ten']?>" />
                    <i class="i_trai"></i>
                    <i class="i_tren"></i>
                    <i class="i_phai"></i>
                    <i class="i_duoi"></i>
                </a>
                <a class="ten" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a>
                <p class="gia"><?=_gia?>: <span class="giaban"> <?php if($v['gia']>0)echo number_format($v['gia'],0, ',', '.').' đ';else echo _lienhe; ?></span></p>
            </div>
        <?php }//?>
        </div>
    </div>
    <div class="clear"></div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
    <?php } ?>

    
</div>