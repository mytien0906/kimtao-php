<?php
	$d->reset();
	$sql = "select ten$lang as ten,photo,link from #_slider where hienthi=1 and type='slider' order by stt asc";
	$d->query($sql);
	$slider=$d->result_array();
?>
<div id="wowslider-container2">
	<div class="ws_images">
		<ul>
        	<?php foreach($slider as $v){ $i++;?>
			<li>
				<a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten']?>">
					<img src="thumb/1200x400/3/<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten']?>" title="<?=$v['ten']?>" id="wows2_<?=$i?>" />
				</a>
			</li>
            <?php }//?>
		</ul>
	</div>
	<div class="ws_bullets">
		<div>
        	<?php foreach($slider as $v){$i++;?>
			<a href="#" title="full screen slider"><?=$i?></a>
            <?php }//?>
		</div>
	</div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.4</span>
	<div class="ws_shadow"></div>
</div>
