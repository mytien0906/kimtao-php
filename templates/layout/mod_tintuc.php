<?php 
function get_thu($date)
{
    global $lang;



    $get_date = date('l',$date);
if($lang==''){
    switch ($get_date) {
        case 'Monday':
            $result_date = 'Thứ Hai';
            break;
        case 'Tuesday':
            $result_date = 'Thứ Ba';
            break;
        case 'Wednesday':
            $result_date = 'Thứ Tư';
            break;
        case 'Thursday':
            $result_date = 'Thứ Năm';
            break;
        case 'Friday':
            $result_date = 'Thứ Sáu';
            break;
        case 'Saturday':
            $result_date = 'Thứ Bảy';
            break;
        case 'Sunday':
            $result_date = 'Chủ nhật';
            break;
        default:
            $result_date = '';
            break;
    }
}else{
                switch ($get_date) {
        case 'Monday':
            $result_date = 'Monday';
            break;
        case 'Tuesday':
            $result_date = 'Tuesday';
            break;
        case 'Wednesday':
            $result_date = 'Wednesday';
            break;
        case 'Thursday':
            $result_date = 'Thursday';
            break;
        case 'Friday':
            $result_date = 'Friday';
            break;
        case 'Saturday':
            $result_date = 'Saturday';
            break;
        case 'Sunday':
            $result_date = 'Sunday';
            break;
        default:
            $result_date = '';
            break;
    }
            }
    return $result_date;
}


?>

<div class="h1200 clearfix">
    <div class="tintuc">
        <div class="tieude-tintuc">
            tin tức
        </div>
        <div class="wrap-tintuc clearfix">
            <div id="tinmoi">
                <?php foreach($tinmoi as $v) { ?>
                <div class="block-tintuc cleafix">
                    <div class="img-tintuc">
                         <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>"><img src="thumb/100x100/1/<?=_upload_tintuc_l.$v['photo']?>" alt="<?=$v['ten']?>" /></a>
                    </div>
                    <div class="nd-tintuc">
                        <div class="ten-tintuc">
                             <a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>.html" title="<?=$v['ten']?>">
                                 <?=catchuoi($v['ten'],150)?>
                             </a>
                        </div>
                        <div class="mota-tintuc">
                            <?=catchuoi($v['mota'],130)?>
                        </div>
                    </div>
                    <div class="ngaythang">
                        <p class="p1">
                            <?=get_thu($v['ngaytao'])?>
                        </p>
                         <p class="p2">
                           <?=date('d/m/Y',$v['ngaytao'])?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="video">
         <div class="tieude-video">
            video clip
        </div>
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
            <img src="http://img.youtube.com/vi/<?=getYoutubeIdFromUrl($vid['link'])?>/0.jpg" style="width: 100% !important; height: 328px !important;">
            </a>
            <?php break; }?>
            <div class="khung_chay">
                <div class="hinhanhphai">
                    <?php for($k=1,$count_vid=count($video); $k < $count_vid; $k++) {?>
                    <a class="fancybox" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?=getYoutubeIdFromUrl($video[$k]['link'])?>" style="display: inline-block; position: relative; line-height:0">
                    <img src="images/play.png" alt="Play video" style="position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;transform:scale(0.5);">
                    <img src="http://img.youtube.com/vi/<?=getYoutubeIdFromUrl($video[$k]['link'])?>/0.jpg" style="float: left; width: 124px !important; height: 100px !important; box-sizing:border-box; margin:0 5px;">
                    </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    div#mod_bottom
{
    margin-top: 40px;
}
div.tintuc
{
    float: left;
    width: 65.3%;
}
div.video
{
    float: right;
    width: 33%;
}
div.tieude-tintuc
{
    color: #333;
    text-transform: uppercase;
    font-family: 'UTMDuepuntozeroBold';
    font-size: 22px;
    position: relative;
    margin-bottom: 30px;
}
div.tieude-tintuc:before
{
    position: absolute;
    content: "";
    top: 10px;
    right: 0;
    background: url(images/img/bf-tintuc.png);
    width: 697px;
    height: 15px;

}
div.tieude-video
{
    color: #333;
    text-transform: uppercase;
    font-family: 'UTMDuepuntozeroBold';
    font-size: 22px;
    position: relative;
    margin-bottom: 30px;
}
div.tieude-video:before
{
    position: absolute;
    content: "";
    top: 10px;
    right: 0;
    background: url(images/img/bf-video.png);
    width: 287px;
    height: 16px;
}
div.wrap-tintuc
{
    position: relative;
}
div.wrap-tintuc:before
{
    position: absolute;
    content: "";
    left: 15%;
    top: 0;
    border-left: 1px solid #73b21a;
    height: 96%;
}
div.block-tintuc
{
    float: right;
    width: 80% !important;
    padding: 2%;
    border: 1px solid #e1e1e1 !important;
    box-shadow: inset 0px 0px 5px 0px rgba(0,0,0,0.3);
    position: relative;
    margin-bottom: 20px;
}
div.block-tintuc:before
{
    position: absolute;
    left: -7.3%;
    top: 43%;
    background: url(images/img/bf-tt.png);
    width: 11px;
    height: 11px;
    content: "";
}
div.img-tintuc img
{
    border-radius: 50%;

}
div.img-tintuc
{
    margin-right: 10px;
    float: left;
}
div.ten-tintuc a
{
    color: #333333;
     font-family: 'Roboto-Bold';
     font-size: 14px;
}
div.mota-tintuc
{
     font-family: 'Roboto-Regular';
      font-size: 14px;
      margin-top: 5px;
}
div.ten-tintuc a:hover
{
    color: #ff0000;
}
div.ngaythang
{
    position: absolute;
    left: -24%;
    top: 30%;
    font-family: 'OpenSansRegular';
}
div.ngaythang p.p1
{
    color: #d30000;
    text-align: center;
    font-size: 15px;
}
div.ngaythang p.p2
{
    color: #333333;
    font-size: 15px;
}
a.fancybox
{
    width: 100%;
}
.hinhanhphai {
    margin-top: 10px;
    width: calc(100% + 6.5px);
    margin-left: -6.5px;
    margin-right: -6.5px;
}
</style>