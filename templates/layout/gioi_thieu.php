<div class="h1200">
	<div class="tieude-gioithieu">
		<a href="<?=$gioithieu['type']?>/<?=$gioithieu['tenkhongdau']?>.html" title="<?=$gioithieu['ten']?>">
			<?=$gioithieu['ten']?>
		</a>
	</div>
	<div class="mota-gioithieu">
		<?=catchuoi($gioithieu['mota'],800)?>
	</div>
	<div class="xemthem-gioithieu">
		<a href="<?=$gioithieu['type']?>/<?=$gioithieu['tenkhongdau']?>.html" title="<?=$gioithieu['ten']?>">
			<?=_xemthem?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
		</a>
	</div>
	<div class="wrap-gioithieu clearfix fix">
		<?php foreach($sanpham_dichvu_2 as $v) { ?>
		<div class="block-gioithieu">
			<div class="item-gioithieu">
				<div class="img-gioithieu hover_sang3 ">
					 <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><img src="thumb/380x236/1/<?=_upload_tintuc_l.$v['photo']?>" alt="<?=$v['ten']?>" /></a>
				</div>
				<div class="nd-gioithieu">
					<div class="ten-gioithieu">
						 <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
						 	<?=$v['ten']?>
						 </a>
					</div>
					<!-- <div class="bd-gioithieu">
						<img src="images/img/bd-gioithieu.png" alt="giới thiệu">
					</div>
					<div class="mota-gioithieu1">
						<?=catchuoi($v['mota'],150)?>
					</div> -->
					<div class="xemthem-gioithieu1">
						 <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
						 	<?=_xemthem?>
						 </a>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="block-gioithieu">
			<div class="item-gioithieu">
				<div class="img-gioithieu hover_sang3 ">
					 <a href="<?=$du_an['type']?>/<?=$du_an['tenkhongdau']?>.html" title="<?=$du_an['ten']?>"><img src="thumb/380x236/1/<?=_upload_tintuc_l.$du_an['photo']?>" alt="<?=$du_an['ten']?>" /></a>
				</div>
				<div class="nd-gioithieu">
					<div class="ten-gioithieu">
						 <a href="<?=$du_an['type']?>/<?=$du_an['tenkhongdau']?>.html" title="<?=$du_an['ten']?>">
						 	<?=$du_an['ten']?>
						 </a>
					</div>
					<!-- <div class="bd-gioithieu">
						<img src="images/img/bd-gioithieu.png" alt="giới thiệu">
					</div>
					<div class="mota-gioithieu1">
						<?=catchuoi($du_an['mota'],150)?>
					</div> -->
					<div class="xemthem-gioithieu1">
						 <a href="<?=$du_an['type']?>/<?=$du_an['tenkhongdau']?>.html" title="<?=$du_an['ten']?>">
						 	<?=_xemthem?>
						 </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>