<div class="tuanloc"></div>
<!-- Noel css include -->
<link href="js/noel/noel.css" rel="stylesheet" type="text/css" />
<!-- Noel js include -->
<script type="text/javascript" src="js/noel/noel.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
		setInterval(chay, 100);
		var vitri = 0;
		var vitri2 = -620;
		var manghinh = $(window).width();
	
		function chay() {
			vitri = vitri + 100;
			vitri2 = vitri2 + 10;
			if (vitri2 > manghinh) {
				vitri2 = -620;
			}
			$('.tuanloc').css({
				'background': 'url(js/noel/tuanloc.png) 0px ' + vitri + 'px',
				'left': +vitri2 + 'px'
			});
		}
	});
</script>