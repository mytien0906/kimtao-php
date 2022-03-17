<?php
	$d->reset();
	$sql = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql);
	$slide=$d->result_array();
	
?>
<style>
.ws_playpause {display:none;}</style>
<link rel="stylesheet" type="text/css" href="engine1/style.css" />

<div id="wowslider-container1">

<div class="ws_images">
   	<ul>
       <?php for($i=0;$i<count($slide);$i++){?>
<li><a href="<?=$slide[$i]['link']?>"><img src="<?=_upload_hinhanh_l.$slide[$i]['photo']?>" alt="" title="" id="wows1_<?=$i?>"/></a></li>
           <?php }?>
</ul>
  </div>
  <div class="ws_bullets"><div>
<?php for($i=0;$i<count($slide);$i++){?>	
       <a href="#" title="slide"><?=$i?></a>
<?php }?>
   </div></div>
   <div class="ws_shadow"></div>
</div>	



<div class="clear"></div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
