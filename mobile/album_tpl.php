<div class="tieude_giua"><?=$title_cat?></div>
<div class="Collage">
	<?php for($i=0;$i<count($album);$i++){?>		
    <div class="Image_Wrapper">
    	<div class="hover_sang">
        <a rel="group" data-fancybox="gallery" href="<?=_upload_hinhanh_l.$album[$i]['photo']?>"><img src="<?=_upload_hinhanh_l.$album[$i]['photo']?>" alt="" /></a>
        </div>
    </div>
    <?php }//?>
</div>