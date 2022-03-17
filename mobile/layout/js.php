<script  src="js/jquery.min.js"></script>
<?php if($source!='index'){?>
<script  src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d3c996345f1d03" async defer></script>
<?php } ?>
<div id="fb-root"></div>
<script>!function(e,n,t){var c,o=e.getElementsByTagName(n)[0];e.getElementById(t)||(c=e.createElement(n),c.id=t,c.async=!0,c.src="//connect.facebook.net/<?php if($lang=='en')echo 'en_EN';else echo 'vi_VN' ?>/sdk.js#xfbml=1&version=v2.4<?php if($seo['api_facebook']!='') echo '&appId='.$seo['api_facebook']?>",o.parentNode.insertBefore(c,o))}(document,"script","facebook-jssdk");</script>

<!-- addthis - anh hải -->
<!--  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d3c996345f1d03" async="async"></script>
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5afe3d073e4a630011ba6df2&product=sticky-share-buttons' async='async'></script> -->
<?php if($_GET['com']=="index" || $_GET['com']=="" ) { ?> 
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/js_jssor_slider_caption.js"></script>
<?php } ?>
<script src="js/my_script.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js" ></script>
<script src="js/slick.min.js"></script>
<script src="js/ImageScroller.js"></script>

<script src='js/jquery.cookie.js'></script>
<script src='js/jquery.hoverIntent.minified.js'></script>
<script src='js/jquery.dcjqaccordion.2.7.min.js'></script>

<!-- ajax tooltip -->
<script src="Toolstip/ajax.js" type="text/javascript"></script>
<script src="Toolstip/ajax-dynamic-content.js" type="text/javascript"></script>
<script src="Toolstip/home.js" type="text/javascript"></script>
<link href="Toolstip/tootstip.css" rel="stylesheet" type="text/css" />


<script >
	$(document).ready(function(e) {
        $('img').each(function(index, element) {
			if(!$(this).attr('alt') || $(this).attr('alt')=='')
			{
				$(this).attr('alt','<?=$seo['alt']?>');
			}
        });
    });
</script>
<script> 
	 function doEnter(evt) {
		 var key;
		 if (evt.keyCode == 13 || evt.which == 13) {
			 onSearch(evt);
		 }
	 }
	
	 function onSearch(evt) {
	
		 var keyword = document.getElementById("keyword").value;
		 if (keyword == '' || keyword == '<?=_nhaptukhoatimkiem?>...') {
			 alert('<?=_chuanhaptukhoa?>');
		 } else {
			 location.href = "tim-kiem.html&keyword=" + keyword;
			 loadPage(document.location);
		 }
	 }	
</script>
<?php
if($config['schema']=='product'){ 
echo $schema = '<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "'.$seo['title'].'",
  "image": "http://'.$config_url.'/'._upload_hinhanh_l.$seo['thumb'].'",
  "brand": {
    "@type": "Thing",
    "name": "'.$seo['title'].'"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.4",
    "ratingCount": "89900"
  }
}
</script>
';
}else{
echo $schema = '<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://google.com/article"
  },
  "headline": "'.$seo['title'].'",
  "image": {
    "@type": "ImageObject",
    "url": "http://'.$config_url.'/'._upload_hinhanh_l.$seo['thumb'].'",
    "height": 800,
    "width": 800
  },
  "datePublished": "'.date('c',$config['date_create']).'",
  "dateModified": "2015-02-05T09:20:00+08:00",
  "author": {
    "@type": "Person",
    "name": "'.$seo['title'].'"
  },
   "publisher": {
    "@type": "Organization",
    "name": "'.$seo['title'].'",
    "logo": {
      "@type": "ImageObject",
      "url": "'.$config_url.'/'._upload_hinhanh_l.$seo['thumb'].'",
      "width": 600,
      "height": 60
    }
  },
  "description": "'.strip_tags($seo['description']).'"
}
</script>
';
}
?>
<script src="js/fancybox-3.0/jquery.fancybox.min.js?v=1494131338"></script>
<script>
	$(document).ready(function(){
		$(".fancybox").fancybox();
		$("a.fcb_map_footer").fancybox({
			type:"iframe",
		});
		$("#tip5").fancybox({
			'scrolling'		: 'no',
			'titleShow'		: false,
			'onClosed'		: function() {
				$("#login_error").hide();
			}
		});
	})
</script>
<script src="js/hiei.js"></script>
<script>
marqueeInit({
	uniqueid: 'mycrawler2',
	style: {
	
		'width': '100% !important'
	},
	inc: 5, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast:1,
	neutral: 150,
	savedirection: true,
	random: true
});
</script>  
<script>
	$(document).ready(function () {
		$("#menu ul li").hover(function () {
			$(this).find('.submenu').css({
				visibility: "visible",
				display: "none"
			}).slideDown(500);
		}, function () {
			$(this).find('.submenu').css({
				visibility: "hidden"
			});
		});
		$("#menu ul li").hover(function () {
			$(this).find('>a').addClass('active2');
		}, function () {
			$(this).find('>a').removeClass('active2');
		});
	});
</script>

<script> 
	function doEnter2(evt) {
		var key;
		if (evt.keyCode == 13 || evt.which == 13) {
			onSearch2(evt);
		}
	}
	
	function onSearch2(evt) {
		var keyword2 = document.getElementById("keyword2").value;
		if (keyword2 == '' || keyword2 == '<?=_nhaptukhoatimkiem?>...') {
			alert('<?=_chuanhaptukhoa?>');
		} else {
			location.href = "tim-kiem.html&keyword=" + keyword2;
			loadPage(document.location);
		}
	}		
</script>   
<script src="js/jquery.mmenu.min.all.js"></script>
<script>
	$(function () {
		$('.hien_menu').click(function () {
			$('nav#menu_mobi').css({
				height: "auto"
			});
		});
		$('nav#menu_mobi').mmenu({
			extensions: ['effect-slide-menu', 'pageshadow'],
			searchfield: true,
			counters: true,
			navbar: {
				title: 'Menu'
			},
			navbars: [{
				position: 'top',
				content: ['searchfield']
			}, {
				position: 'top',
				content: ['prev', 'title', 'close']
			}, {
				position: 'bottom',
				content: ['<a>Online : <?php $count=count_online();echo $tong_xem=$count['dangxem'];?></a>', '<a>Total : <?php $count=count_online();echo $tong_xem=$count['daxem'];?></a>'
				]
			}]
		});
	});
</script>


<?php if($com=='lien-he'){?>


<script>
	$(document).ready(function(e) {
		$('.click_ajax').click(function(){
			if(isEmpty($('#ten_lienhe').val(), "<?=_nhaphoten?>"))
			{
				$('#ten_lienhe').focus();
				return false;
			}
			if(isEmpty($('#diachi_lienhe').val(), "<?=_nhapdiachi?>"))
			{
				$('#diachi_lienhe').focus();
				return false;
			}
			if(isEmpty($('#dienthoai_lienhe').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai_lienhe').focus();
				return false;
			}
			if(isPhone($('#dienthoai_lienhe').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#dienthoai_lienhe').focus();
				return false;
			}
			if(isEmpty($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmail($('#email_lienhe').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_lienhe').focus();
				return false;
			}
			if(isEmpty($('#tieude_lienhe').val(), "<?=_nhapchude?>"))
			{
				$('#tieude_lienhe').focus();
				return false;
			}
			if(isEmpty($('#noidung_lienhe').val(), "<?=_nhapnoidung?>"))
			{
				$('#noidung_lienhe').focus();
				return false;
			}
			if(isEmpty($('#capcha').val(), "<?=_nhapmabaove?>"))
			{
				$('#capcha').focus();
				return false;
			}
			document.frm.submit();
		});    
    });
</script>
<?php }?>



<!-- js left -->
<script >
	$(document).ready(function(e) {
		$(window).scroll(function(){
			if(!$('#video').hasClass('load_video'))
			{
				$('#video').addClass('load_video');
				$('.load_video').load( "ajax/video.php");
			}
		 });
	});
</script>
<!-- end js left-->



<?php /*?><script src="js/plugins-scroll.js"></script>
<script src="js/wow.min.js"></script>
<script>
 	new WOW().init();
</script><?php */?>

<?php /*?>Tooltip hình ảnh<?php */?>
<?php /*?><script src="js/ImageTooltip.js"></script><?php */?>
<?php /*?>Tooltip hình ảnh<?php */?>

<?php /*?>Tooltip có nội dung <?php */?>
<?php /*?><script src="js/Toolstip/ajax.js"></script>
<script src="js/Toolstip/ajax-dynamic-content.js" ></script>
<script src="js/Toolstip/home.js" ></script><?php */?>
<?php /*?> Tooltip có nội dung<?php */?>

<?php /*?><script src="js/jquery.lazyload.pack.js"></script>
<script >
  $(document).ready(function() {
      $(".item img").lazyload({
        //placeholder : "images/load.gif",
        effect : "fadeIn",
      }); 
  });
</script><?php */?>
<?php /*?>Code gữ thanh menu trên cùng  <?php */?>
<script>
	$(document).ready(function(){
		$(window).bind("scroll", function() {
			var cach_top = $(window).scrollTop(); // ví trí hiện tại theo chiều dọc của thanh scroll
			var heaigt_header = $('#menu').height();

			if(cach_top >= heaigt_header){
				if(!$('#menu').hasClass('fix_head fadeInDown animated')){
					$('#menu').addClass('fix_head fadeInDown animated');
				}
			}else{
				$('#menu').removeClass('fix_head fadeInDown animated');
			}
		});
	});
 </script>
<?php /*?>Code gữ thanh menu trên cùng<?php */?>

<?php /*?>lockfixed <?php */?>
<?php /*?><script src="js/jquery.lockfixed.min.js"></script>
<script >
	$(window).load(function(e) {
		(function($) {
				var left_h=$('#left').height();
				var main_h=$('#main').height();
				if(main_h>left_h) 
				{
					$.lockfixed("#scroll-left",{offset: {top: 10, bottom: 400}});
				}
		})(jQuery);
	});
</script><?php */?>
<?php /*?>lockfixed<?php */?>

<?php /*?>Cấm click chuột phải <?php */?>
<?php /*?><script >
	var message="Đây là bản quyền thuộc về Phòng khám sản phụ khoa PHƯỚC NGUYÊN";
	function clickIE() {
	if (document.all) {(message);return false;}
	}
	function clickNS(e) {
	if (document.layers||(document.getElementById&&!document.all)) {
		if (e.which==2||e.which==3) {alert(message);return false;}}}
		if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")
</script>
<script >
	function disableselect(e){
		return false 
	}
	function reEnable(){ 
		return true 
	} 
	//if IE4+
	document.onselectstart=new Function ("return false")
	//if NS6
	if (window.sidebar){
		document.onmousedown=disableselect 
		document.onclick=reEnable
	} 
</script><?php */?>
<?php /*?>Cấm click chuột phải<?php */?>

<?php /*?><!--Chạy đến vị trí mới --><?php */?>
<?php /*?><script  src ="js/jquery.scrollTo.js"></script>
<script  >
	$(window).load(function() {
		//$('html, body').animate({scrollTop:500},500);
		$('body').scrollTo('#wapper',1000);
	}); 
</script><?php */?>
<?php /*?> Chạy đến vị trí mới<?php */?>

 <?php /*?>code dang nhap google <?php */?>
<?php /*?><meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="383611830602-c3tirfrh1fba82unpsl50ded8uv29k29.apps.googleusercontent.com">
<script  src="js/platform.js"></script><?php */?>
<?php /*?> end code them <?php */?>





<script >
$(document).ready(function(){
	$('.product_run').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  autoplay:true,  //Tự động chạy
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  draggable:true,
	   arrows:false,
	  centerMode:false,  //item nằm giữa
	  responsive: [
		{
		  breakpoint: 668,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true
		  }
		},
		{
		  breakpoint: 481,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 321,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});
});
</script>


<script >
$(document).ready(function(){
	$('.product_run1').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  autoplay:true,  //Tự động chạy
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  draggable:true,
	  arrows:true,
	  centerMode:false,  //item nằm giữa
	  responsive: [
		{
		  breakpoint: 668,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true
		  }
		},
		{
		  breakpoint: 481,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 321,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});
});
</script>

<script >
    $(document).ready(function(){
		$('.slick2').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: false,
			  asNavFor: '.slick'			 
		});
		$('.slick').slick({
			  slidesToShow: 6,
			  slidesToScroll: 1,
			  asNavFor: '.slick2',
			  dots: false,
			  centerMode: false,
			  focusOnSelect: true
		});
		 return false;
    });
</script>





<script type="text/javascript">
	$(document).ready(function(){
		$("#reset_capcha").click(function() {
			$("#hinh_captcha").attr("src", "sources/captcha.php?"+Math.random());
			return false;
		});
	});
</script>



<?php /*?><script > 
function refrClock() {
    var d = new Date();
    var s = d.getSeconds();
    var m = d.getMinutes();
    var h = d.getHours();
    var day = d.getDay();
    var date = d.getDate();
    var month = d.getMonth();
    var year = d.getFullYear();
    var days = new Array("Chủ nhật", "Thứ hai", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
    var months = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
    var am_pm;
    if (s < 10) {
        s = "0" + s
    }
    if (m < 10) {
        m = "0" + m
    }
    if (h > 12)
    {
        h -= 12;
        AM_PM = "PM"
    } else {
        AM_PM = "AM"
    }
    if (h < 10) {
        h = "0" + h
    }
    document.getElementById("clock").innerHTML = days[day] + " Ngày " + date + "/" + months[month] + "/" + year + " Bây giờ là " + " [" + h + ":" + m + ":" + s + "] " + AM_PM;
    setTimeout("refrClock()", 1000);
}
refrClock();
</script><?php */?>
<?php if($template=='index1'){?>

<script>
	$(document).ready(function(e) {
		$('.btn_gui').click(function(){
			if(isEmpty($('#hovaten').val(), "<?=_nhaphoten?>"))
			{
				$('#hovaten').focus();
				return false;
			}
			if(isEmpty($('#sodt').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#sodt').focus();
				return false;
			}
			if(isPhone($('#sodt').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#sodt').focus();
				return false;
			}
			if(isEmpty($('#email_2').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_2').focus();
				return false;
			}
			if(isEmail($('#email_2').val(), "<?=_emailkhonghople?>"))
			{
				$('#email_2').focus();
				return false;
			}
			if(isEmpty($('#txt_input').val(), "<?=_nhapnoidung?>"))
			{
				$('#txt_input').focus();
				return false;
			}
			document.frm_contact.submit();
		});    
    });
</script>

<script>
		   var map;
		   var infowindow;
		   var marker= new Array();
		   var old_id= 0;
		   var infoWindowArray= new Array();
		   var infowindow_array= new Array();
		   		function initialize_1(){
			   var defaultLatLng = new google.maps.LatLng(<?=$bando[0]['toado']?>);
			   var myOptions= {
				   zoom: 16,
				   center: defaultLatLng,
				   scrollwheel : true,
				   mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("map_canvas1"), myOptions);map.setCenter(defaultLatLng);	
				
				<?php foreach($bando as $v){ ?>
							
			   var arrLatLng = new google.maps.LatLng(<?=$v['toado']?>);
			   
			   infoWindowArray[<?=$v['id']?>] = '<div class="map_description"><div class="map_title"><?=$v['ten']?></div><div><?=_diachi?> : <?=$v['diachi']?> <br /> <?=_dienthoai?>: <?=$v['dienthoai']?></div></div>';
			   loadMarker(arrLatLng, infoWindowArray[<?=$v['id']?>], <?=$v['id']?>);
			
				<?php } ?>
			   
			   moveToMaker(7895);}function loadMarker(myLocation, myInfoWindow, id){marker[id] = new google.maps.Marker({position: myLocation, map: map, visible:true});
			   var popup = myInfoWindow;infowindow_array[id] = new google.maps.InfoWindow({ content: popup});google.maps.event.addListener(marker[id], 'mouseover', function() {if (id == old_id) return;if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;});google.maps.event.addListener(infowindow_array[id], 'closeclick', function() {old_id = 0;});}function moveToMaker(id){var location = marker[id].position;map.setCenter(location);if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;}</script>
<?php }?>

<?php if($com=='album'){?>
<script>
	$(document).ready(function(){
		$('#lightgallery').lightGallery({
		share:false,
		fulldownload: 'http://sachinchoolur.github.io/lightGallery/docs/api.html'
		});
	});
</script>
<script src="js/lightGallery/dist/js/lightgallery-all.js"></script>

<script src="js/collageplus/jquery.collagePlus.min.js"></script>
<script src="js/collageplus/jquery.removeWhitespace.min.js"></script>
<script src="js/collageplus/jquery.collageCaption.min.js"></script>

<script type="text/javascript">
    $(window).load(function () {
        $(document).ready(function(){
            collage();
            $('.Collage').collageCaption();
        });
    });
    function collage() {
        $('.Collage').removeWhitespace().collagePlus(
            {
                'fadeSpeed'     : 2000,
                'targetHeight'  : 200
            }
        );
    };
    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        $('.Collage .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });

</script>
<?php }?>
<script type="text/javascript">
	$(document).ready(function(e) {
        $('.tieude_chat').click(function(){
			if($('.chat_facebook').css('right')=='0px')
			{
				$('.chat_facebook').animate({bottom:-300},500).animate({right:-110},300);
			}
			else
			{
				$('.chat_facebook').animate({right:0},300).animate({bottom:0},500);
			}
			$.ajax({
				url:'ajax/tao_session.php',
				success:function(kq){
					console.log(kq);
				}
			});
		});
    });
</script>

