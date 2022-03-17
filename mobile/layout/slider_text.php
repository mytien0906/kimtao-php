<?php

	$d->reset();
	$sql_slider = "select ten$lang as ten,link,photo,mota$lang as mota from #_slider where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql_slider);
	$slider=$d->result_array();
	
?>
<link href="css/css_jssor_slider.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/js_jssor_slider_caption.js"></script>

<div id="slider1_container" style="position: relative;width: 1366px; height: 480px;;margin:0 auto;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move;width: 1366px; height: 480px;overflow: hidden;">
        <?php foreach($slider as $v){ ?>
        <div>
        	<a href="<?=$v['link']?>" target="_blank">
            <img u="image" src="<?php if($v['photo']!='')echo _upload_hinhanh_l.$v['photo'];else echo 'images/noimage.png' ?>" alt="<?=$v['ten']?>" />
            <div u=caption t="*" class="captionOrange caption-box">
                <div class="mota-caption"><?=$v['mota']?></div>
            </div>
            </a>
        </div>
        <?php } ?>                
    </div>
    <!-- Trigger -->
             
    <!-- Arrow Left -->
    <span u="arrowleft" class="jssora05l" style="top:40%;"></span>
    <!-- Arrow Right -->
    <span u="arrowright" class="jssora05r" style="top:40%;"></span>
</div><!-- Jssor Slider End -->