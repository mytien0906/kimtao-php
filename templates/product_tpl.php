<div class="h1200">
    <div class="dg-d clear"><?=$breadcumb?></div>
    <div class="tieude_giua"><?=$title_cat?></div>
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
</div>