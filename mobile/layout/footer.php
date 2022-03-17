<div class="h1200 clearfix">
    <div class="footer_1">
        <div class="tieude-footer-cty">
            <img src="images/img/logo-ft.png" alt="footer">
            <?=$company['ten']?>
        </div>
        <div class=""><?=$row_footer['noidung']?></div>
    </div>
    <div class="footer_2">
        <div class="tieude-ft">
            <?=_chinhsach?>
        </div>  
        <div class="bd-ft">
            <img src="images/img/bd-ft.png" alt="footer">
        </div> 
        <?php foreach($chinhsach as $v) { ?>
        <div class="block-cs">
            <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
                <?=$v['ten']?>
            </a>
        </div>
        <?php } ?>
          <div class="block-cs">
            <a href="lien-he.html" title="<?=_lienhe?>">
               <?=_lienhe?>
            </a>
        </div>
    </div>
    <div class="footer_3">
        <div class="tieude-ft">
            <?=_vechungtoi?>
        </div>  
        <div class="bd-ft">
            <img src="images/img/bd-ft.png" alt="footer">
        </div> 
        <?php foreach($vechungtoi as $v) { ?>
        <div class="block-cs">
            <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
                <?=$v['ten']?>
            </a>
        </div>
        <?php } ?>
          
    </div>
     <div class="footer_4">
        <div class="tieude-ft">
          <?=_thongketruycap?>
        </div>  
        <div class="bd-ft">
            <img src="images/img/bd-ft.png" alt="footer">
        </div> 
        <div class="wrap-tk">
            <div class="block-tk clearfix">
                <span><?=_dangonline?>: </span>  <span class="tk1"><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span>
            </div>
             <div class="block-tk clearfix">
                <span><?=_ngayhomnay?>: </span>  <span class="tk1"><?=$homnay;?></span>
            </div>
             <div class="block-tk clearfix">
                <span><?=_thongketuan?>: </span>  <span class="tk1"><?=$trongtuan;?></span>
            </div>
             <div class="block-tk clearfix">
                <span><?=_tongtruycap?>: </span>  <span class="tk1"><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span>
            </div>
        </div>
      
          
    </div>
</div>