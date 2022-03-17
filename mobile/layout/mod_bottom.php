<div class="h1200">
<div class="mod_bottom clearfix">
	<div class="mod_video">
        <p class="tieude_titnuc">Video clip</p>
        <div class="khunghinhanh">
            <script>
                function youtube_parser(url) {
					var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
					var match = url.match(regExp);
					return (match && match[7].length == 11) ? match[7] : false;
				}
            </script>
    
            <?php foreach ($video as $vid) {?>
    
            <a class="fancybox" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?=getYoutubeIdFromUrl($vid['link'])?>" style="display: inline-block; position: relative; line-height:0;">
            <img src="images/play.png" alt="Play video" style="position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;">
            <img src="http://img.youtube.com/vi/<?=getYoutubeIdFromUrl($vid['link'])?>/0.jpg" style="width: 396px !important; height: 270px !important;">
            </a>
            <?php break; }?>
            <div class="khung_chay">
                <div class="hinhanhphai">
                    <?php for($k=1,$count_vid=count($video); $k < $count_vid; $k++) {?>
                    <a class="fancybox" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?=getYoutubeIdFromUrl($video[$k]['link'])?>" style="display: inline-block; position: relative; line-height:0">
                    <img src="images/play.png" alt="Play video" style="position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;transform:scale(0.5);">
                    <img src="http://img.youtube.com/vi/<?=getYoutubeIdFromUrl($video[$k]['link'])?>/0.jpg" style="float: left; width: 124px !important; height: 90px !important; box-sizing:border-box; margin:0 5px;">
                    </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content_titnuc">
        <p class="tieude_titnuc"><?=_tintuc?></p>
        <div class="tintuc_1">
            <a class="img_tt1" href="<?=$row_tintuc[$count_tt-1]['type']?>/<?=$row_tintuc[$count_tt-1]['tenkhongdau']?>.html" title="<?=$row_tintuc[$count_tt-1]['ten']?>"><img src="thumb/360x198/1/<?=_upload_tintuc_l.$row_tintuc[$count_tt-1]['photo']?>" alt="<?=$row_tintuc[$count_tt-1]['ten']?>" title="<?=$row_tintuc[$count_tt-1]['ten']?>" /></a>
            <a class="ten_tt1" href="<?=$row_tintuc[$count_tt-1]['type']?>/<?=$row_tintuc[$count_tt-1]['tenkhongdau']?>.html" title="<?=$row_tintuc[$count_tt-1]['ten']?>"><?=$row_tintuc[$count_tt-1]['ten']?></a>
            <p class="mota_tt1"><?=catchuoi($row_tintuc[$count_tt-1]['mota'],200)?></p>
            <a class="xemthem_tt1" href="<?=$row_tintuc[$count_tt-1]['type']?>/<?=$row_tintuc[$count_tt-1]['tenkhongdau']?>.html" title="<?=$row_tintuc[$count_tt-1]['ten']?>"><?=_xemthem?></a>
        </div>
        <div class="tintuc_conlai">
        <?php for($i=($count_tt-2);$i>=0;$i--){?>
            <div class="item_ttcl clearfix">
                <a class="img_ttcl" href="<?=$row_tintuc[$i]['type']?>/<?=$row_tintuc[$i]['tenkhongdau']?>.html" title="<?=$row_tintuc[$i]['ten']?>"><img src="thumb/150x110/1/<?=_upload_tintuc_l.$row_tintuc[$i]['photo']?>" alt="<?=$row_tintuc[$i]['ten']?>" title="<?=$row_tintuc[$i]['ten']?>" /></a>
                <a class="ten_ttcl" href="<?=$row_tintuc[$i]['type']?>/<?=$row_tintuc[$i]['tenkhongdau']?>.html" title="<?=$row_tintuc[$i]['ten']?>"><?=$row_tintuc[$i]['ten']?></a>
                <p class="mota_ttcl"><?=catchuoi($row_tintuc[$i]['mota'],150)?></p>
            </div>
        <?php }//?>
        </div><!-- tintuc_conlai -->
    </div>
</div>
</div>