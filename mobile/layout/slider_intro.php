<?php
	$d->reset();
	$sql_slider = "select ten$lang as ten,link,photo,mota$lang as mota,mota1$lang as mota1 from #_slider where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql_slider);
	$slider=$d->result_array();
?>
<link href="slider_intro/style_slider.css" type="text/css" rel="stylesheet" />
<link href="slider_intro/owl.carousel.css" type="text/css" rel="stylesheet" />
<script src="slider_intro/owl.carousel.js" type="text/javascript" ></script>
<!-- Begin slider -->
<div class="slider-default bannerslider">
	<div class="hrv-banner-container">
		<div class="hrvslider">
			<ul class="slides">
				
				<?php foreach($slider as $v){?>
				<li>
					<a href="/collections/all">
						<img class="img-responsive" src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten']?>" />
					</a>
					<div id="hrv-banner-caption1" class="hrv-caption hrv-banner-caption">
						<div class="container">
							<div class="hrv-caption-inner">
								<div class="hrv-banner-content slider-1 text-center">
										<h2 class="hrv-title2 " >
									<div class="coll-index-title">
										<div class="liner-continer">
											<span class="left-line"></span> 
											<span class="title">
												<?=$v['ten']?>
												<span class="title-separator">
													<span>
													</span>
												</span>
											</span> 
											<span class="right-line"></span> 
										</div>
									</div>


									</h2>						
									<h3 class="hrv-title3"><?=$v['mota']?></h3>			
									<div class="hrv-banner-des">
										<p><?=$v['mota1']?></p>
									</div>								
									<a href="<?=$v['link']?>" class="hrv-url">Xem ngay</a>
								</div>	
							</div>
						</div>
					</div>			
				</li>
				<?php }//?>

			</ul>
		</div>
	</div>
</div>
<!-- End slider -->

<script>
$(document).ready(function(){
	if ( $('.slides li').size() > 0 ) {
		$(".hrv-banner-container .slides").owlCarousel({
			singleItem: true,
			autoPlay : 5000,
			items : 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [980,1],
			itemsTablet: [768,1],
			itemsMobile : [479,1],
			slideSpeed : 500,
			paginationSpeed : 500,
			rewindSpeed : 500,
			addClassActive: true,
			navigation : true,
			stopOnHover : true,
			pagination : false,
			scrollPerPage:true,
			afterMove: nextslide,
			afterInit: nextslide,
		});
		function nextslide() {
			$(".hrv-banner-container .owl-item .hrv-banner-caption").css('display','none');
			$(".hrv-banner-container .owl-item .hrv-banner-caption").removeClass('hrv-caption')
			$(".hrv-banner-container .owl-item.active .hrv-banner-caption").css('display','block');

			var heading = $('.hrv-banner-container .owl-item.active .hrv-banner-caption').clone().removeClass();
			$('.hrv-banner-container .owl-item.active .hrv-banner-caption').remove();
			$('.hrv-banner-container .owl-item.active>li').append(heading);
			$('.hrv-banner-container .owl-item.active>li>div').addClass('hrv-banner-caption hrv-caption');
		}

	}
})

</script>
