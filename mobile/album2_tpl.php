<div class="tieude_giua"><?=$title_cat?></div>
<div class="khung_chay">
    <div class="content_sp" id="lightgallery">
    <?php foreach($album as $v){?>
        <div class="item_sp" data-download-url="<?=_upload_hinhanh_l.$v['photo']?>" data-src="<?=_upload_hinhanh_l.$v['photo']?>" data-sub-html="<?=$v['ten']?>">
            <a class="img hieuung_border" href="" title="<?=$v['ten']?>">
                <img src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten']?>" />
                <i class="i_trai"></i>
                <i class="i_tren"></i>
                <i class="i_phai"></i>
                <i class="i_duoi"></i>
            </a>
            <a class="ten" href="" title="<?=$v['ten']?>"><?=$v['ten']?></a>
        </div>
    <?php }//?>
    </div>
</div>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>