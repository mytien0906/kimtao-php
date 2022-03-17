<div class="h1200">
 <div class="marquee" id="mycrawler2">
	<?php foreach($doitac as $v){ ?>
    	<a href="<?=$v['link']?>" title="<?=$v['link']?>" target="_blank"><img src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?php if($v['ten']!='') echo $v['ten'];else echo $company['ten']?>" /></a>
    <?php } ?>
</div>
</div>