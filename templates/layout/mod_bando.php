<?php
	$d->reset();
	$sql = "select toado,ten$lang as ten,diachi$lang as diachi,email,dienthoai,id from #_bando where hienthi=1 ";
	$d->query($sql);
	$bando = $d->result_array();
?>
<div class="content_chinhanh">
    <div class="h1200 clearfix">
	<?php foreach($bando as $v){ ?>
    	<div class="item_chinhanh">	
        	<a href="javascript:();" onclick="moveToMaker(<?=$v['id']?>)" >
        		  <div class="item-bando"> <?=$v['ten']?></div>
            </a>
        </div>
    <?php } ?>
    </div>
</div>
<div id="map_canvas1"></div>

