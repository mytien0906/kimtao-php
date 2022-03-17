<?php 
	session_start();
	$session=session_id();

	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	
	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='';
	}
	$lang=$_SESSION['lang'];
	
		
	require_once _source."lang$lang.php";	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";	
	include_once _lib."class.database.php";
	include_once _lib."functions_user.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";

?>
<body onLoad="initialize2()">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=<?=$API_map?>"></script>
<script type="text/javascript">
        function initialize2()
        {
            var mapOptions = {
                zoom: 14,
                center: new google.maps.LatLng(<?=$company['toado']?>)
            };

            var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

            var myLatLng = new google.maps.LatLng(<?=$company['toado']?>);

            var beachMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
            //icon: 'img/map-marker.gif' // Đường dẫn đến hình icon 
        });

            var infowindow = new google.maps.InfoWindow({
                content: '<div class="map_description"><div class="map_title"><?=$company['ten']?></div><div><?=_diachi?> : <?=$company['diachi']?> <br /> <?=_dienthoai?>: <?=$company['dienthoai']?></div></div>',
                position: myLatLng,
            });

        // On idle, change marker animation to bounce
        google.maps.event.addListener(map, 'idle', function () {
            beachMarker.setAnimation(google.maps.Animation.BOUNCE);
        });
        
        //Sư kiện khi click vào hình ảnh
        google.maps.event.addListener(beachMarker, 'click', function() {
            infowindow.open(map,beachMarker);
        });

        infowindow.open(map,beachMarker);//code chu thich thong tin

    }
</script>
<div id="map_canvas" style="width:100%; height:100%"></div>
</body>	
<?php die();?>

	