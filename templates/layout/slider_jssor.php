<div id="slider1_container" class="sl_a">
    <div u="slides" class="sl_a">
        <?php foreach($slider as $v){ ?>
        <div>
            <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten']?>">
            	<img src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten']?>" title="<?=$v['ten']?>" />
            </a>
        </div>
        <?php } ?>                
    </div>
    <span u="arrowleft" class="jssora05l"></span>
    <span u="arrowright" class="jssora05r"></span>
</div>
<style>.sl_a{position: relative;width: 1366px; height: 580px; cursor: move;overflow: hidden;}</style>