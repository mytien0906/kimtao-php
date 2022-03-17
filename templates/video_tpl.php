<div class="tieude_giua"><span><?=$title_cat?></span></div>
<div class="link_seo"><span><?=$linkseo?></span></div>
<div class="khung_chay">
<div class="content_video content_sp">
	<?php foreach($product as $v)
		{ 
		preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $v['link'], $matches);;
		$id_video =	$matches[1];
	?>
        <div class="item_video">
            <a class="xem_video img_video" href="<?=$id_video?>" title="<?=$v['ten']?>">
            <img src="http://img.youtube.com/vi/<?=$id_video?>/0.jpg" alt="<?=$v['ten']?>" /></a>
            <h3><a class="xem_video" href="<?=$id_video?>" title="<?=$v['ten']?>"><?=$v['ten']?></a></h3>
        </div><!---END .item-->
    <?php } ?>
</div><!---END .wap_item-->
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div>