<div class="tieude-duan">
	<?=_duantieubieu?>
</div>
<div class="wrap-duan clearfix fix">
	<?php foreach($duan as $v) { ?>
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
<div class="tieude-duan mg40">
	<?=_tintucnoibat?>
</div>
<div class="h1200">
	<div class="wrap-gioithieu clearfix fix product_run">
		<?php foreach($tinmoi as $v) { ?>
		<div class="block-gioithieu">
			<div class="item-gioithieu">
				<div class="img-gioithieu hover_sang3 ">
					 <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><img src="thumb/380x236/1/<?=_upload_tintuc_l.$v['photo']?>" alt="<?=$v['ten']?>" /></a>
				</div>
				<div class="nd-tintuc">
					<div class="ten-tintuc">
						 <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
						 	<?=catchuoi($v['ten'],150)?>
						 </a>
					</div>
					
					<div class="mota-gioithieu1">
						<?=catchuoi($v['mota'],150)?>
					</div>
					<div class="xemthem-gioithieu1">
						 <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
						 	<?=_xemthem?>
						 </a>
					</div>
				</div>
				<div class="ngaythang">
					<p class="ngay">
						<?=date('d',$v['ngaytao'])?> 
					</p>
					<p>
						Th<?=date('m',$v['ngaytao'])?>/<?=date('Y',$v['ngaytao'])?>  
					</p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>