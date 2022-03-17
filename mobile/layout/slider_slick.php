<?php
	$d->reset();
	$sql = "select ten,photo,link from #_slider order by stt,id desc";
	$d->query($sql);
	$slider=$d->result_array();
	
?>

<script type="text/javascript">
    $(document).ready(function(){
      $('.slider_web').slick({
		  	lazyLoad: 'ondemand',
        	infinite: true,//Hiển thì 2 mũi tên
			accessibility:true,
			//vertical:true,Chay dọc
			//fade: true,//Hiệu ứng fade của slider
		  	slidesToShow: 1,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true
      });
    });
</script>

<div class="slider_web">
	<?php  for($i=0;$i<count($slider);$i++){ ?>
    	<a href="<?=$slider[$i]['link']?>" title="<?=$slider[$i]['ten']?>" target="_blank"><img src="<?=_upload_hinhanh_l.$slider[$i]['photo'] ?>" data-thumb="<?=_upload_hinhanh_l.$slider[$i]['photo'] ?>" alt="<?=$slider[$i]['ten']?>" title="<?=$slider[$i]['ten']?>" /></a>
    <?php } ?>
</div>