<?php
echo  md5('$nina@'.'admin'.'@#$fd_!34^');

?>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box
}
.langs ul {
padding: 0;
    list-style: none;
    position: relative;
    top: 15px;
    float: left;
    margin-left: 18px;
}
.langs ul li{
	display:inline-block;
	margin:0 5px;
}
.iframe_map iframe {
	width:100% !important;
	height:390px !important;
}
.hover_sang1{position:relative; overflow:hidden;}
.hover_sang1:before{position: absolute;top: 0;left: 0;width: 100%;height: 100%;background: rgba(255,255,255,0.5);content: '';z-index:10;-webkit-transition: -webkit-transform 0.6s;transition: transform 0.6s;-webkit-transform: scale3d(2.2,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-120%,0);
transform: scale3d(2.2,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-120%,0);}
.hover_sang1:hover:before {webkit-transform: scale3d(2.2,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,120%,0);transform: scale3d(2.2,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,120%,0);}
.hover_sang3{ overflow:hidden; position:relative;}
.hover_sang3:before {position: absolute;content: '';width: 100%;height: 100%;top: 0;left: 0;z-index: 1;-webkit-transition: all 0.6s ease-in-out;transition: all 0.6s ease-in-out;-moz-transition: all 0.6s ease-in-out;-ms-transition: all 0.6s ease-in-out;-o-transition: all 0.6s ease-in-out;
}
.hover_sang3:after {position: absolute;content: '';width: 100%;height: 100%;top: 0;left: 0;-webkit-transition: all 0.6s ease-in-out;transition: all 0.6s ease-in-out;-moz-transition: all 0.6s ease-in-out;-ms-transition: all 0.6s ease-in-out;-o-transition: all 0.6s ease-in-out;}
.hover_sang3:hover:before {right: 50%;left: 50%;width: 0;background: rgba(255, 255, 255, 0.5);}
.hover_sang3:hover:after {height: 0;top: 50%;bottom: 50%;background: rgba(255, 255, 255, 0.5);}

.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
	min-width: 100% !important
}

.fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style] {
	width: 100% !important
}

.fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] {
	width: 100% !important
}

.video_popup {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden
}

.video_popup iframe, .video_popup object, .video_popup embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%
}

#clickvideo {
	width: 100%;
	padding: 4px 0;
	margin: 3px 0%;
	border: 1px solid #DDD;
	box-sizing: border-box
}

.addthis_native_toolbox {
	margin: 10px 0px;
	width: 100%;
	clear: both;
	max-height: 50px
}

#toptop {
	width: 46px;
	height: 46px;
	position: fixed;
	bottom: 30px;
	right: 20px;
	text-indent: -99999px;
	cursor: pointer;
	background: url(images/back_to_top.png) top center no-repeat;
	transition: 0.5s;
	z-index: 200
}

#footer1 {
	z-index: 1000;
	position: fixed;
	bottom: 0;
	width: 100%;
	left: 0;
	display: none;
}

#footer1 img {
	vertical-align: middle
}

#footer1 a {
	color: #fff
}

.blink_me {
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 1s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: infinite;
	-moz-animation-name: blinker;
	-moz-animation-duration: 1s;
	-moz-animation-timing-function: linear;
	-moz-animation-iteration-count: infinite;
	animation-name: blinker;
	animation-duration: 1s;
	animation-timing-function: linear;
	animation-iteration-count: infinite
}

@-moz-keyframes blinker {
	0% {
		opacity: 1.0
	}

	50% {
		opacity: 0.0
	}

	100% {
		opacity: 1.0
	}

}

@-webkit-keyframes blinker {
	0% {
		opacity: 1.0
	}

	50% {
		opacity: 0.0
	}

	100% {
		opacity: 1.0
	}

}

@keyframes blinker {
	0% {
		opacity: 1.0
	}

	50% {
		opacity: 0.0
	}

	100% {
		opacity: 1.0
	}

}

.table_goidien {
	width: 100%;
	text-align: center;
	margin: auto;
	background: #000;
	border-top: 1px solid #CCC
}

.the_an {
	position: absolute;
	top: -1000px
}

.tags {
}

.tags a {
	display: inline-block;
	border-radius: 5px;
	background: #f0f0f0;
	color: #6e6e6e;
	padding: 3px 5px;
	margin-bottom: 2px
}

.tags a:hover {
	background: #fe6d4c;
	color: #fff
}

.clearfix:after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0
}

* html .clear {
	zoom: 1
}

*:first-child+html .clear {
	zoom: 1
}

img {
	max-width: 100% !important;
	vertical-align: middle
}

div.bando img {
	max-width: none !important
}

.fix_head {
	position: fixed !important;
	top: 0;
	width: 100%;
	z-index: 99;
	left: 0;
}

a {
	text-decoration: none
}

#google_language_translator {
	position: absolute;
	bottom: 0;
	right: 0;
}

.khung_chay {
	overflow: hidden;
}

/* <!-- hieu ung trang guong --> */
.hieuung{margin-bottom:10px;position:relative;overflow:hidden;opacity:0.9;transition:all 0.5s;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;-ms-transition:all 0.5s}.hieuung img{}.hieuung:after{position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,0.5);content:'';-webkit-transition:-webkit-transform 0.6s;transition:transform 0.6s;-webkit-transform:scale3d(2.2,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);transform:scale3d(2.2,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0)}.hieuung:hover:after{webkit-transform:scale3d(2.2,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);transform:scale3d(2.2,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0)}.hieuung:hover{opacity:1}
/*--- end ---*/
/*-- hieu ung border nhieu mau --*/
.hieuung_border .i_trai{position:absolute;height:0px;width:1px;left:0px;top:0px;background:-webkit-linear-gradient(bottom,red,orange,yellow,green,blue,indigo,violet);background:-o-linear-gradient(bottom,red,orange,yellow,green,blue,indigo,violet);background:-moz-linear-gradient(bottom,red,orange,yellow,green,blue,indigo,violet);background:linear-gradient(to top, red,orange,yellow,green,blue,indigo,violet);transition:all 0.5s ease}.hieuung_border .i_phai{position:absolute;height:0px;width:1px;right:0px;bottom:0px;background:-webkit-linear-gradient(top,red,orange,yellow,green,blue,indigo,violet);background:-o-linear-gradient(top,red,orange,yellow,green,blue,indigo,violet);background:-moz-linear-gradient(top,red,orange,yellow,green,blue,indigo,violet);background:linear-gradient(to bottom, red,orange,yellow,green,blue,indigo,violet);transition:all 0.5s ease}.hieuung_border .i_tren{position:absolute;height:1px;width:0px;right:0px;top:0px;background:-webkit-linear-gradient(left,red,orange,yellow,green,blue,indigo,violet);background:-o-linear-gradient(left,red,orange,yellow,green,blue,indigo,violet);background:-moz-linear-gradient(left,red,orange,yellow,green,blue,indigo,violet);background:linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);transition:all 0.5s ease}.hieuung_border .i_duoi{position:absolute;height:1px;width:0px;left:0px;bottom:0px;background:-webkit-linear-gradient(right,red,orange,yellow,green,blue,indigo,violet);background:-o-linear-gradient(right,red,orange,yellow,green,blue,indigo,violet);background:-moz-linear-gradient(right,red,orange,yellow,green,blue,indigo,violet);background:linear-gradient(to left, red,orange,yellow,green,blue,indigo,violet);transition:all 0.5s ease}.hieuung_border:hover .i_trai{height:100%;bottom:0px;top:inherit}.hieuung_border:hover .i_tren{width:100%;left:0px}.hieuung_border:hover .i_phai{height:100%;top:0px;bottom:inherit}.hieuung_border:hover .i_duoi{width:100%;right:0px;left:inherit}
/*-- end ---*/
@font-face {
    font-family: 'Roboto-BoldItalic';
    src: url('font/Roboto-BoldItalic.woff');
}
@font-face {
    font-family: 'Roboto-Regular';
    src: url('font/Roboto-Regular.woff');
}
@font-face {
    font-family: 'Roboto-Bold';
    src: url('font/Roboto-Bold.woff');
}
body{
	font-size:13px;
	line-height:1.5;
	background:#fff;
	font-family:Tahoma, Geneva, sans-serif
	
}
@font-face {
    font-family: 'MYRIADPRO';
    src: url('font/MYRIADPRO.OTF');
}
@font-face {
    font-family: 'RobotoCondensedBold';
    src: url('fonts/RobotoCondensedBold.eot');
    src: url('fonts/RobotoCondensedBold.eot') format('embedded-opentype'),
         url('fonts/RobotoCondensedBold.woff2') format('woff2'),
         url('fonts/RobotoCondensedBold.woff') format('woff'),
         url('fonts/RobotoCondensedBold.ttf') format('truetype'),
         url('fonts/RobotoCondensedBold.svg#RobotoCondensedBold') format('svg');
}
@font-face {
    font-family: 'RobotoMedium';
    src: url('fonts/RobotoMedium.eot');
    src: url('fonts/RobotoMedium.eot') format('embedded-opentype'),
         url('fonts/RobotoMedium.woff2') format('woff2'),
         url('fonts/RobotoMedium.woff') format('woff'),
         url('fonts/RobotoMedium.ttf') format('truetype'),
         url('fonts/RobotoMedium.svg#RobotoMedium') format('svg');
}
@font-face {
    font-family: 'SFUSwissBTUltraCompressed';
    src: url('fonts/SFUSwissBTUltraCompressed.eot');
    src: url('fonts/SFUSwissBTUltraCompressed.eot') format('embedded-opentype'),
         url('fonts/SFUSwissBTUltraCompressed.woff2') format('woff2'),
         url('fonts/SFUSwissBTUltraCompressed.woff') format('woff'),
         url('fonts/SFUSwissBTUltraCompressed.ttf') format('truetype'),
         url('fonts/SFUSwissBTUltraCompressed.svg#SFUSwissBTUltraCompressed') format('svg');
}





.zoom
 {
 	overflow: hidden;
 }
 .zoom img
 {
 	transition: all 1s ease;
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
 }

 .zoom img:hover
 {
 	transform: scale(1.1,1.1);
	-webkit-transform: scale(1.1,1.1);
	-moz-transform: scale(1.1,1.1);
	-o-transform: scale(1.1,1.1);
	-ms-transform: scale(1.1,1.1);
 }

 .fix
{
	display: -webkit-box;
   display: -moz-box;
   display: -ms-flexbox;
   display: -webkit-flex;
   display: flex;
   flex-flow: row wrap;
   -webkit-flex-flow: row wrap;
}
/*breadcumb*/
.dg-d ul 
{
    list-style-type: none;
    height: 50px;
    line-height: 50px;
    float: left;
    width: 100%;
    background-color: #f5f5f5;
    margin-bottom: 20px;
}
.dg-d ul li
{
    float: left;
    position: relative;
}
.dg-d ul li:after
{
  position: absolute;
  content: "";
  left: 0px;
  background: url(images/breadcrumb_icon.png) no-repeat;
  width: 7px;
  height: 17px;
  top: 15px;
}
.dg-d ul li:first-child:after
{
  background: none;
}
.dg-d ul li a
{
    padding: 0 15px;
    color: #999;
    font-weight: 500;
    color: #797878;
    font-size: 14px;
     font-family: 'Roboto-Regular';
     text-transform: capitalize;
}
.dg-d ul li:last-child a
{
	color: red;
}
					/* body */
div#wapper
{ 
  margin:auto;
  max-width: 1349px;
  background:#fff;
}
div.h1200
{
	max-width: 1200px;
	margin: 0 auto;
	display: flex;
	justify-content: center;
}
					/* header */
div#header
{
	/* position:relative;
	margin:auto;
	padding: 20px 0;
	padding-top: 15px;
	padding-bottom: 5px; */
	background-image: url(../images/bg_top.png);
    background-repeat: repeat-y;
    background-position: center center;
    width: 100%;
    -webkit-transition: height .3s ease-in-out;
    transition: height .3s ease-in-out;
    z-index: 100;
    height: 124px;
    left: 0;
    top: 0;
    position: absolute;
}
div.logo
{
	float: left;
	width: 9%;
}
div.ten-cty
{
	float: left;
	width: 31%;
	margin-left: 1%;
	margin-top: 4px;
}
div.hotline
{
	float: right;
	font-family: 'Roboto-Regular';
	width: 12%;
	font-size: 15px;
}
div.hotline img
{
	float: left;
	margin-right: 10px;
}
p.hl1
{
	color: #0468ac;
	font-size: 16px;
	line-height: 16px;
}
p.eml1
{
	font-size: 16px;
	line-height: 15px;
}
div.email
{
	float: right;
	width: 19%;
	font-family: 'Roboto-Regular';
	font-size: 15px;
}
div.email img
{
	float: left;
	margin-right: 10px;
}
div.line
{
	height: 34px;
	width: 1px;
	background: #e6e6e6;
	float: right;
	margin: 0 2%;
}


						/* menu */
div#menu_mobi{
	display:block;
}
div#menu{
	position: absolute;
    height: 45px;
    margin: auto;
    background: #10499e;
    z-index: 100;
    width: 100%;
    bottom: 30%;

}
div#menu ul{
  float:left;  
  list-style:none;
  height:100%;
  position: relative;
}
div#menu ul li{
  float:left;
 
  z-index:50;
}
div#menu ul li.line{
	background:#FFF;
	height:41px;
	width:1px;
}
div#menu ul li>a{
	/* color:#323232;
	font-size:14px;
	padding: 12px 13px;
	text-decoration:none;
	text-transform:capitalize;
	display:block; */
	display: block;
    width: auto;
    height: 100%;
    /* font-family: Arial,Helvetica,sans-serif; */
    font-size: 15px;
    line-height: 42px;
    font-weight: 500;
    padding: 0 10px;
    color: #fff;
    text-shadow: 1px 1px 0 rgb(0 0 0 / 20%);
    /* background-color: rgba(0,114,188,0); */
    transition: all .3s ease-in-out;
	font-family: 'RobotoMedium';
	
}
div#menu ul li>a i
{
	color: #c4c4c4;
	margin-left: 3px;
}
div#menu ul li>a:hover,div#menu ul li>a.active,div#menu ul li a.active2{
	/* color:#0468ac;	 */
	color: #fff;
}

div#menu ul li:hover div.submenu
{
 
}
div.submenu
{
	position: absolute;
	width: 952px;
	top: 100%;
	left: 0;
	background-color: rgba(0,103,172,0.9);
	z-index: 9;
	padding: 30px;
	height: 309px;
	visibility: hidden;
	display: none;
	

}
div.wrap-mnenu 
{
	width: calc( 100% + 30px);
	margin: 0 -15px;
}
div.block-menu
{
	float: left;
	width: 33.33%;
	padding: 0 15px;
	box-sizing: border-box;
	margin-bottom: 20px;
}
div.tieude-menu a
{
	color: #fff;
	text-transform: capitalize;
	 font-family: 'Roboto-Bold';
	 font-size: 15px;
	 display: inline-block;
	 margin-bottom: 10px;
}
div.ten-menu a
{
	color: #fff;
	text-transform: capitalize;
	font-size: 14px;
	display: inline-block;
		font-family: 'Roboto-Regular';
		margin-bottom: 7px;
}
div.ten-menu a:hover
{
	color: #bbb;
}
div#search{
	margin-top: 6px;
	/* margin-right:8px; */
	background:#fff;
	height: 30px;
	float:right;
	border-radius: 16px;
	width: 19%;
	border: 1px solid #d8d8d8;
}
div#search input{
    float: left;
    border: none;
    background: none;
    width: 80%;
    outline: none;
    color: #323232;
    height: 100%;
    padding: 0 10px;
}
div#search i{
	float: right;
	margin-right: 8px;
	margin-top: 4px;
	color: #5e5e5e;
	font-size: 16px;
	cursor:pointer;
}

div#slider{
	margin:auto;
}

div#gioi_thieu
{
	margin-top: 30px;
}
div.tieude-gioithieu
{
	text-align: center;
}
div.tieude-gioithieu a
{
	color: #0468ac;
	text-transform: uppercase;
	   font-family: 'RobotoCondensedBold';
	   font-size: 34px;
}
div.tieude-gioithieu a:hover
{
	color: #ff0000;
}

div.mota-gioithieu
{
	 font-family: 'Roboto-Regular';
	 line-height: 25px;
	 margin: 20px 0;
	 font-size: 14px;
}
div.xemthem-gioithieu
{
	text-align: center;
}
div.xemthem-gioithieu a
{
	color: #ff2626;
	font-family: 'Roboto-Regular';
	font-size: 14px;
	border: 1px solid #ff2626;
	padding: 7px 25px;

}
div.xemthem-gioithieu a:hover
{
	text-decoration: underline;
}
div.wrap-gioithieu
{
	width: calc( 100% + 30px );
	margin: 40px -15px 0 -15px;
}
div.block-gioithieu
{
	float: left;
	width: 33.33%;
	padding: 0 15px;
	box-sizing: border-box;
}
div.nd-gioithieu
{
	padding: 20px;
	background: #f2f2f2;
}
div.ten-gioithieu
{
	text-align: center;
}
div.ten-gioithieu a
{
	color: #0467b9;
	font-size: 24px;
	text-transform: capitalize;
	 font-family: 'Roboto-Regular';
}
div.ten-gioithieu a:hover
{
	color: #db0003;
}
div.bd-gioithieu
{
	text-align: center;
}
div.mota-gioithieu1
{
	 font-family: 'Roboto-Regular';
	 margin: 10px 0;
	 line-height: 25px;
}
div.xemthem-gioithieu1 a
{
	color: #db0003;
	 font-family: 'Roboto-Bold';
	 font-size: 14px;
}
div.xemthem-gioithieu1 a:hover
{
	text-decoration: underline;
}

div#banner_qc
{
	margin-top: 30px;
}


/* content */
div#main_content
{
	margin-top: 30px;
}
div.tieude-duan
{
	color: #0468ac;
    text-transform: uppercase;
    font-family: 'RobotoCondensedBold';
    font-size: 34px;
    text-align: center;
    margin-bottom: 40px;
}

div.tieude_giua{
	color: #0468ac;
    text-transform: uppercase;
    font-family: 'RobotoCondensedBold';
    font-size: 28px;
    text-align: center;
    margin-bottom: 40px;

}
div.tieude{
	color:#fff;
	text-align:center;
	font-size:14px;
	height:39px;
	line-height:39px;
	font-weight:bold;
	text-transform:uppercase;
	background:#3458b8;

}
div.wrap-duan
{
	width: 100%;

}
div.block-duan
{
	float: left;
	width: 25%;
	box-sizing: border-box;
}

div.item-duan
{
	position: relative;
	overflow: hidden;
}
div.img-duan a
{
	display: block;
	line-height: 0;
}
div.ten-duan
{
	position: absolute;
	left: 0;
	bottom: 0;
	background: rgba(0,0,0,0.3);
	text-align: center;
	width: 100%;
	height: 0%;
	display: flex;
	align-items: center;
	justify-content: center;
	opacity: 0;
}
div.ten-duan a
{
	display: inline-block;
	color: #fff;
	text-transform: capitalize;
	 font-family: 'Roboto-Regular';
	 font-size: 14px;
	 line-height: 0;
}
div.ten-duan a:hover
{
	color: #ff0000;

}
div.item-duan:hover div.ten-duan
{
	height: 30%;
	transition: all 0.5s;
	opacity: 1
}
div.mg40
{
	margin-top: 40px;
}
div.nd-tintuc
{
	
	padding: 20px 5px;
}
div.ten-tintuc a
{
	color: #363636;
	font-size: 15px;
	text-transform: capitalize;
	 font-family: 'Roboto-Bold';
}
div.ten-tintuc a:hover
{
	color: #ff0000;
}
div.item-gioithieu
{
	position: relative;
}
div.ngaythang
{
	position: absolute;
	left: 0;
	top: 0;
	background: #0468ac;
	width: 20%;
	height: 17%;
	color: #fff;
	font-family: 'Roboto-Regular';
	text-align: center;
	font-size: 14px;
}
p.ngay
{
	border-bottom: 1px solid #3b89be;
	font-size: 30px;
}
div#video_map
{
	margin-top: 30px;
	background: #f3f3f3;
	padding-top: 30px;
	padding-bottom: 30px;
}
div.video
{
	float: left;
	width: 48.5%;
}
div.map
{
	float: right;
	width: 48.5%;
}
div.tieude-video
{
	color: #0468ac;
    text-transform: uppercase;
    font-family: 'RobotoCondensedBold';
    font-size: 34px;
    margin-bottom: 20px;

}
div#map_canvas1
{
	height: 388px;
}
div#map_canvas1 img
{
	max-width: none !important;
}


/* --------------------- Phan trang ------------------*/

div#doitac{
	box-sizing:border-box;
	margin-top: 30px;
}
div#doitac a img{
	height:100px;
	margin:0 5px;
	border:1px solid #DDD;
}
/*----------------------------------------------------*/
div.wap_pro{
	margin:15px auto;
	clear:both;
}

@-webkit-keyframes star {
  0% {
    -webkit-transform: rotate(0) scale(0);
  }
  50% {
    -webkit-transform: rotate(180deg) scale(1.5);
  }
  100% {
    -webkit-transform: rotate(360deg) scale(0);
  }
}
@-o-keyframes star {
  0% {
    -o-transform: rotate(0) scale(0);
  }
  50% {
    -o-transform: rotate(180deg) scale(1.5);
  }
  100% {
    -o-transform: rotate(360deg) scale(0);
  }
}
@-moz-keyframes star {
  0% {
    -moz-transform: rotate(0) scale(0);
  }
  50% {
    -moz-transform: rotate(180deg) scale(1.5);
  }
  100% {
    -moz-transform: rotate(360deg) scale(0);
  }
}
.start-animate {
		z-index: 99999999999999999 !important;
		position: absolute;
		animation: star linear 1.75s infinite;
		-moz-animation: star linear 1.75s infinite;
		-webkit-animation: star linear 1.75s infinite;
		-o-animation: star linear 1.75s infinite;
	}
@keyframes star {
  0% {
    transform: rotate(0) scale(0);
  }
  50% {
    transform: rotate(180deg) scale(1.5);
  }
  100% {
    transform: rotate(360deg) scale(0);
  }
}
.fcb_map_footer {
    text-decoration: underline;
    color: #000;
	display:block;
}
.fcb_dknt{
	display:block;
	color:#000;
}

#footer{
	background: url(images/img/bg-ft.png);
	margin-top: 30px;
	padding-top: 40px;
	padding-bottom: 30px;
	
}
.footer_1{
	float:left;
	width:43%;
}
.footer_2{
    float: left;
    width:20%;
	overflow:hidden;
}
.footer_3{
    float: left;
    width: 20%;
}
div.footer_4
{
	float: right;
	width: 15%;
}
div.tieude-footer-cty
{
	color: #fff;
	font-size: 40px;
	 font-family: 'SFUSwissBTUltraCompressed';
}
div.tieude-footer-cty img
{
	vertical-align: inherit;
}
div.tieude-ft
{
	color: #fff;
	font-family: 'Roboto-Bold';
	text-transform: uppercase;
	font-size: 16px;
}
div.bd-ft
{
	margin-bottom: 5px;
}
div.block-cs a
{
	color: #fff;
	 font-family: 'Roboto-Regular';
	 margin-bottom: 7px;
	 display: inline-block;
	 font-size: 14px;
	 text-transform: capitalize;

}
div.block-cs a:hover
{
	color: #ff0000;
}
div.block-tk
{
	color: #fff;
	 font-family: 'Roboto-Regular';
	 margin-bottom: 7px;
	  font-size: 14px;
}
span.tk1
{
	float: right;
}


div#copy
{
	padding: 10px 0;
	background: #0472bd;
	font-family:'Roboto-Regular';
	color: #fff;
}
div.cp-l
{
	float: left;
}
div.cp-r
{
	float: right;
}
div.cp-r img
{
	margin-right: 3px;
}
div.ten_baiviet_duan
{
	font-size: 24px;
	text-transform: uppercase;

	font-weight: bold;
	color: #055699
}
div.hinhthem1
{
	margin-bottom: 10px;
}
div.wrap-hinhthem2
{
	width: calc( 100% + 20px );
	margin: 0 -10px;
}
div.hinhthem2
{
	float: left;
	padding: 10px;
	box-sizing: border-box;
	cursor: pointer;
}
div.block-thongtin
{
	margin-bottom: 10px;
}
div.block-thongtin span.tt1
{
	float: left;
	color: #0067ac;
	font-size: 16px;
	font-weight: bold;
	width: 200px;
}
div.block-thongtin span.tt2
{
	float: left;
	color: #333;
	font-size: 16px;
	text-transform: capitalize;
}
div.tinlienquan
{
	font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
    color: #055699;
    margin: 20px 0;
}
/* .box_news{
		width: 100%;
	}
	div.frm_lienhe
	{
		width: 100%;
	}
	.bando
	{
		width: 100%;
	}
	.zoom_slick
	{
		width: 100%;
		text-align: center;
	}
	.product_info
	{
		width: 100%;
		text-align: center;
	} */
