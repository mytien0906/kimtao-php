<?php
	$d->reset();
	$sql_slider = "select ten$lang,link,photo from #_slider where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql_slider);
	$result_slider=$d->result_array();
?>

<div id="slider3" style="width:1200px;margin:0 auto;">
    	 


<style>
ul.slider {
		list-style: none;
		padding: 0;
		margin: 0 auto;
		width: 510px;
		height: 400px;
	}
	ul.slider li {
		height: 400px;
		width: 800px;
		background-color: #ccc;
		text-align: center;
		cursor: pointer;
	}
	ul.slider li img {
		width: 100%;
		height:100%;
	}
	ul.slider li.roundabout-in-focus {
		cursor: default;
	}
	ul.slider li span {
		display: block;				
	}
	
	#carbonads-container .carbonad {
		margin: 0 auto;
	}

</style>


<script type="text/javascript" src="js/jquery.roundabout.js"></script>
<script type="text/javascript" src="js/jquery.roundabout-shapes.js"></script>


<script>
$(document).ready(function() {
	$('ul.slider').roundabout({  
		
		 duration: 600,
		 minScale:0.6,
		 minOpacity:1,
		 maxOpacity:1,
		 autoplay:true,
		 autoplayInitialDelay:2000,
		 autoplayDuration:4000,
		 autoplayPauseOnHover:true,
         reflect: true
	});
});
   
</script> 
<ul class="slider">
    
		<?php  for($i=0,$count_slider=count($result_slider);$i<$count_slider;$i++){ ?>
		 
			<li><img src="<?=_upload_hinhanh_l.$result_slider[$i]['photo'] ?>" data-thumb="<?=_upload_hinhanh_l.$result_slider[$i]['photo'] ?>"  /></li>
		
        <?php } ?>    
       
</ul>
</div>
     
   