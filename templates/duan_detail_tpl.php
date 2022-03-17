<div class="h1200"> 
     <div class="dg-d clear"><?=$breadcumb?></div>
    <div class="content">
        <div class="mota_baiviet">
        	<div class="ten_baiviet_duan"><?=$title_cat?></div>
            <div class="info_tintuc"><i class="fa fa-calendar-alt"></i>
                <span class="ngaytao"><?=date('d/m/Y - h:m:s A',$row_detail['ngaytao'])?> | <i class="fa fa-eye"></i>
                    <?=$row_detail['luotxem']?></span>
            </div>
            <div class="mota"><?=$row_detail["mota$lang"]?></div>
        </div>
        <div class="hinhthem_duan">
            <div class="slick2">
                <?php foreach($hinhthem as $v) { ?>
                <div class="hinhthem1">
                    <img src="thumb/1200x500/1/<?=_upload_hinhthem_l.$v['photo']?>" alt="<?=$v['ten']?>" title="<?=$v['ten']?>" />
                </div>
                <?php } ?>
            </div>
            <div class="slick wrap-hinhthem2">
                <?php foreach($hinhthem as $v) { ?>
                <div class="hinhthem2">
                    <img src="<?=_upload_hinhthem_l.$v['photo']?>" alt="<?=$v['ten']?>" title="<?=$v['ten']?>" />
                </div>
                <?php } ?>
            </div>
         
        </div>
        <div class="thongtin_duan">
            <?php if($row_detail['nganhnghe']!="") { ?>
            <div class="block-thongtin clearfix">
                <span class="tt1">Ngành Nghề:</span> <span class="tt2"><?=$row_detail['nganhnghe']?></span>
             </div>
            <?php } ?>
            <?php if($row_detail['nganhnghe']!="") { ?>
             <div class="block-thongtin clearfix">
                <span class="tt1">Vị Trí:</span> <span class="tt2"><?=$row_detail['vitri']?></span>
            </div>
             <?php } ?>
            <?php if($row_detail['nganhnghe']!="") { ?>
             <div class="block-thongtin clearfix">
                <span class="tt1">Chủ Đầu Tư:</span> <span class="tt2"><?=$row_detail['chudautu']?></span>
            </div>
             <?php } ?>
            <?php if($row_detail['nganhnghe']!="") { ?>
             <div class="block-thongtin clearfix">
                <span class="tt1">Tổng Thầu:</span> <span class="tt2"><?=$row_detail['tongthau']?></span>
            </div>
             <?php } ?>
            <?php if($row_detail['nganhnghe']!="") { ?>
             <div class="block-thongtin clearfix">
                <span class="tt1">Quy Mô:</span> <span class="tt2"><?=$row_detail['quymo']?></span>
            </div>
             <?php } ?>
        </div>

        <div class="content_text">
            <?=$row_detail["noidung$lang"]?>
        </div>
     
    	<?php if(!empty($tags_sp)) { ?>
            <div class="tags"><i class="fa fa-tags"></i> Tags:
                <?php foreach($tags_sp as $k=>$tags_sp_item) { ?>
                <a href="tag/<?=changeTitle($tags_sp_item['ten'])?>/<?=$tags_sp_item['id']?>.html" title="<?=$tags_sp_item['ten']?>"><?=$tags_sp_item['ten']?></a>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="addthis_native_toolbox"></div>

        <?php if(count($tintuc) > 0) { ?>
            <div class="tinlienquan"><?=_tinlienquan?></div>
           <div class="wrap-duan clearfix fix product_run1">
                <?php foreach($tintuc as $v) { ?>
                <div class="block-duan">
                    <div class="item-duan hover_sang3">
                        <div class="img-duan">
                             <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><img src="thumb/380x236/1/<?=_upload_tintuc_l.$v['photo']?>" alt="<?=$v['ten']?>" /></a>
                        </div>
                        <div class="ten-duan">
                            <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
                                <?=$v['ten']?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        <?php }?>
    </div>
</div>