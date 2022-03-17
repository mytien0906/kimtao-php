<div class="h1200">
    <div class="dg-d clear"><?=$breadcumb?></div>
    <div class="tieude_giua">
        <?=$title_cat?>
    </div>
    <div class="wap_box_new clearfix  ">
        <?php foreach($tintuc as $v){ ?>
            <div class="box_news ">
                <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><img src="thumb/280x200/1/<?=_upload_tintuc_l.$v['photo']?>" alt="<?=$v['ten']?>" /></a>
                <h3><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a></h3>
                <p class="new_ngaydang"><i class="fa fa-calendar"></i>
                    <?=date('d/m/Y - h:m A',$v['ngaytao'])?>
                </p>
                <div class="mota">
                    <?=catchuoi($v['mota'],150)?>
                </div>
                <a class="xemthem" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
                	<?=_xemthem?> <i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            <?php } ?>
    </div>
    <div class="pagination">
        <?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?>
    </div>
</div>