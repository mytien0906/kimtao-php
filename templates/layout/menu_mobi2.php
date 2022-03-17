<?php
	
	$d->reset();
	$sql="select ten$lang as ten,tenkhongdau,id,type from #_product_danhmuc where hienthi=1 order by stt,id desc";
	$d->query($sql);
	$product_danhmuc=$d->result_array();
	
?>
<div class="left_col">
<script>
	$(function() {
		var pull 		= $('.btn_pull');
			menu 		= $('.nav_responsive > ul');
			menuHeight	= menu.height();

		$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});
	});
</script>
<link href="css/css_menu_mobile.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.2.9.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.2.6.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		  jQuery('#accordion').dcAccordion({
			  eventType: 'click',
			  autoClose: true,
			  saveState: true,
			  disableLink: true,
			  hoverDelay: 100,
			  showCount: false,
			  speed: 'fast'
	  });
});
</script>
<div class="nav_responsive">
	<div class="pull"><a href="#" class="btn_pull"><img src="images/nav-icon.png"><span>Menu</span></a></div>
	<ul id="accordion" style="overflow: hidden; display: none;">
		<li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href="index.html"><?=_trangchu?></a></li>
        <li class="line"></li>
        <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?></a></li>
        <li class="line"></li>
        <li><a class="<?php if($_REQUEST['com'] == 'san-pham') echo 'active'; ?>" href="san-pham.html"><?=_sanpham?></a>
            <ul>
                <?php for($i=0;$i<count($product_danhmuc);$i++){ ?>
                <li><a href="<?=$product_danhmuc[$i]['type']?>/<?=$product_danhmuc[$i]['tenkhongdau']?>-<?=$product_danhmuc[$i]['id']?>"><?=$product_danhmuc[$i]['ten']?></a>
                    <ul>
                            <?php	
                                $d->reset();
                                $sql="select ten$lang as ten,tenkhongdau,id from #_product_list where hienthi=1 and id_danhmuc='".$product_danhmuc[$i]['id']."' order by stt,id desc";
                                $d->query($sql);
                                $product_list=$d->result_array();															
                            ?>
                             <?php for($j=0;$j<count($product_list);$j++){ ?>
                                    <li><a href="<?=$product_danhmuc[$i]['type']?>/<?=$product_list[$j]['tenkhongdau']?>-<?=$product_list[$j]['id']?>/"><?=$product_list[$j]['ten']?></a>
                                        
                                    </li>
                             <?php } ?>
                     </ul>
                    </li>
                    <?php } ?>
                </ul>	
        </li>
        <li class="line"></li>
        <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html"><?=_tintuc?></a></li>
        <li class="line"></li>
        <li><a class="<?php if($_REQUEST['com'] == 'video') echo 'active'; ?>" href="video.html">Video</a></li>
        <li class="line"></li>
        <li><a class="<?php if($_REQUEST['com'] == 'album') echo 'active'; ?>" href="album.html">album</a></li>
        <li class="line"></li>
        <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
    </ul>
</div>
</div>