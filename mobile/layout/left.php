<div class="tieude"><?=_danhmucsanpham?></div>
<div id="danhmuc" class="danhmuc">
	<?php if(count($product_danhmuc)>0){?>
    	<ul id="accordion-1">
			<?php foreach($product_danhmuc as $v){ 
				$product_list =  List_DanhMucCap2("product_list","ten$lang as ten,tenkhongdau,type,id","san-pham",$v['id']);
			?>
            <li><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html"><?=$v['ten']?></a>
            	<?php if(count($product_list)>0){?>
                <ul>
                	<?php foreach($product_list as $k){ 
						$product_cat =  List_DanhMucCap3("product_cat","ten$lang as ten,tenkhongdau,type,id","san-pham",$k['id']);
					?>
                     	<li><a href="<?=$k['type']?>/<?=$k['tenkhongdau']?>.html"><?=$k['ten']?></a>
                        	<?php if(count($product_cat)>0){?>
                                <ul>
									<?php foreach($product_cat as $val){ 
										$product_item =  List_DanhMucCap4("product_item","ten$lang as ten,tenkhongdau,type,id","san-pham",$val['id']);
									?>
                                        <li><a href="<?=$val['type']?>/<?=$val['tenkhongdau']?>.html"><?=$val['ten']?></a>
                                        	<?php if(count($product_item)>0){?>
                                            	<ul>
                                                	<?php foreach($product_item as $value){?>
                                                    	<li><a href="<?=$value['type']?>/<?=$value['tenkhongdau']?>.html"><?=$value['ten']?></a></li>
                                                    <?php }?>
                                                </ul>
                                            <?php }?>
                                        </li>
                                    <?php }//?>
                                </ul>
                            <?php }?>
                        </li>
                	<?php } ?>
            	</ul>
                <?php }?>
            </li>
            <?php } ?>
        </ul>
        <?php }?>
    </ul>
</div><!---END #danhmuc-->

<div class="tieude">Tỷ giá</div>
<div id="tygia" class="danhmuc">
	<iframe id="fr33" style="border: none;" src="//www.tygia.com/api2.php?auto=1&amp;change=0&amp;flag=1&amp;column=2&amp;titlecolor=333333&amp;upcolor=008800&amp;downcolor=aa0000&amp;textcolor=333333&amp;gbcolor=ffffff&amp;title=0&amp;chart=0&amp;gold=1&amp;rate=1&amp;ngoaite=USD,JPY,EUR,GBP,AUD&amp;expand=0&amp;color=B4D0D0&amp;nganhang=VIETCOM&amp;fontsize=80&amp;css=%23SJC_N_ng{display:%20table-row%20!important;}%23wgold{display:none}" width="100%" height="250"></iframe>
</div>

<div class="tieude">VIDEO CLIP</div>
<div id="video" class="danhmuc"></div>

<div class="tieude"><?=_hotrotructuyen?></div>
<div id="hotro" class="danhmuc">
	<div class="phone"><?=$company['dienthoai']?></div>
    <?php foreach($hotro as $v){?>
    	<div class="item_hotro">
        	<span class="hotro_ten"><?=$v['ten']?></span>
            <a href="https://m.me/<?=$v['facebook']?>" target="_blank"><img src="images/icon_mes.png" alt="<?=$seo['alt']?>" title="<?=$seo['alt']?>" height="30" /></a>
            <a href="skype:<?=$v['skype']?>?chat"><img src="images/icon_skype.png" alt="<?=$seo['alt']?>" title="<?=$seo['alt']?>" /></a>
            <a href="http://zalo.me/<?=$v['dienthoai']?>"><img src="images/icon_zalo.jpg" alt="<?=$seo['alt']?>" title="<?=$seo['alt']?>" /></a>
            <div class="clear"></div>
            <p>Điện thoại: <?=$v['dienthoai']?></p>
            <p>Email: <?=$v['email']?></p>
            <div class="clear"></div>
        </div>
    <?php } ?>
</div><!---END #danhmuc-->

<div class="tieude"><?=_tintucnoibat?></div>
<div id="tinmoi" class="danhmuc">
	<?php foreach($tinmoi as $v){ ?>
        <div class="item_ttnb clear">
            <a class="img" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html"><img src="thumb/100x80/1/<?=_upload_tintuc_l.$v['thumb']?>" alt="<?=$v['ten']?>" title="<?=$v['ten']?>" /></a>
            <a class="ten" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><?=$v['ten']?></a>
            <p class="mota"><?=strip_tags(catchuoi($v['mota'],50))?></p>
        </div>
    <?php } ?>
</div>

<div class="tieude"><?=_quangcao?></div>
<div id="quangcao" class="danhmuc">
	<?php foreach($quangcao as $v){?> 	  
    	<a href="<?=$v['link']?>"><img src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?php if($v['ten']!='') echo $v['ten'];else echo $company['ten']?>" /></a>
    <?php }// ?>    
</div>

<div id="listbaihat"><?php //include _template."layout/audio.php";?></div>