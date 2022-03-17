<script src="audioplayerengine/amazingaudioplayer.js"></script>
<link rel="stylesheet" type="text/css" href="audioplayerengine/initaudioplayer-1.css">
<script src="audioplayerengine/initaudioplayer-1.js"></script>
		
<?php
	$d->reset();
	$sql="select id,ten$lang as ten,photo from #_baihat where hienthi=1 order by stt,id desc";
	$d->query($sql);
	$music=$d->result_array();
?>
<script type="text/javascript">
	$(document).ready(function(e) {
        $('.iconmus').click(function(e) {
            if(!$(this).hasClass('daclick'))
			{
				$('.contro_mus').slideDown(300);
				$(this).addClass('daclick');
			}
			else
			{
				$('.contro_mus').slideUp(300);
				$(this).removeClass('daclick');
			}
        });
    });
</script>
<div id="music">
	<?php /*?><div class="iconmus"><img width="40" src="images/music-icon.png" alt="<?=$company['ten']?>" /></div><?php */?>
    <div class="contro_mus">
    	<div id="amazingaudioplayer-1" style="display:block;position:relative;width:100%;height:auto;margin:0px auto 0px;">
        <ul class="amazingaudioplayer-audios">
			<?php foreach($music as $k){ ?>
            	<li data-artist="" data-title="<?=$k['ten']?>" data-album="<?=$k['ten']?>" data-info="<?=$k['ten']?>" data-image="" data-duration="294">
                <div class="amazingaudioplayer-source" data-src="<?=_upload_khac_l.$k['photo']?>" data-type="audio/mpeg" />
            </li>
            <?php }?>
            
       </ul>
     
    </div>
    </div>
</div>
<style type="text/css">
.amazingaudioplayer-audios{
	display:none;
}
.amazingaudioplayer-text{
	display:none !important;
}
</style>