<div class="h1200"> 
     <div class="dg-d clear"><?=$breadcumb?></div>
    <div class="content">
        <div class="mota_baiviet">
        	<div class="ten_baiviet"><?=$title_cat?></div>
            <div class="info_tintuc"><i class="fa fa-calendar-alt"></i>
                <span class="ngaytao"><?=date('d/m/Y - h:m:s A',$row_detail['ngaytao'])?> | <i class="fa fa-eye"></i>
                    <?=$row_detail['luotxem']?></span>
            </div>
            <div class="mota"><?=$row_detail["mota$lang"]?></div>
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
            <div class="othernews">
                <div class="cactinkhac"><?=_tinlienquan?></div>
                <ul class="khac">
                    <?php foreach($tintuc as $v){ ?>
                        <li><i class="fa fa-angle-double-right"></i>
                            <a href="<?=$com?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
                                <?=$v['ten']?><span>(<?=date('d/m/Y',$v['ngaytao'])?>)</span>
                            </a>
                        </li>
               		<?php }?>
                </ul>
                <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
            </div>
        <?php }?>
    </div>
</div>