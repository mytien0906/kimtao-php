<link rel="stylesheet" type="text/css" href="js/Perspective-Carousel/build/carousel.min.css">
   <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script src="js/Perspective-Carousel/build/carousel.min.js"></script>
        <script>
            $(document).ready(function() {
                Carousel.init({
                    target: $('.carousel')
                });
            });
        </script>


          <div class="carousel">
                <ul class="carousel-wrapper">
                    <?php foreach($album_tc as $v){?>
                    <li class="carousel-box">
                        <a data-fancybox="gallery1" class="fancybox" rel="works"  title="hình bằng cấp chứng nhận" href="<?=_upload_hinhanh_l.$v['photo']?>">
                              <img src="thumb/270x373/1/<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten']?>" title="<?=$v['ten']?>" />
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>