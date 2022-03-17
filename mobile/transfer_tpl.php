<?php
	session_start();
	$session=session_id();
	@define ( '_source' , '../sources/');
	if(!isset($_SESSION['lang']))
		$_SESSION['lang']='';
	$lang=$_SESSION['lang'];	
	require_once _source."lang$lang.php";	
?>
<HTML>
<HEAD>
<TITLE><?=_dangchuyentrang?></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="REFRESH" content="4; url=<?=$page_transfer?>">
</HEAD>
<style>
*{margin:0;padding:0}body{background:#000;font-family:Arial,Helvetica,sans-serif;font-size:13px}.transfer{width:300px;background:#fff;text-align:center;border:1px solid #D0CFCF;font-size:13px;margin-top:100px;position:relative;cursor:pointer}.chuyentrang{cursor:pointer;position:absolute;width:50px;height:50px;text-align:center;line-height:60px;right:-27px;top:-31px;z-index:999999;-webkit-transition:all .5s ease-in-out;background-size:40% 40%;-moz-transition:all .5s ease-in-out;-ms-border-radius:50%;-o-border-radius:50%;border-radius:50%;display:block;box-shadow:0 0 60px rgba(0,0,0,.4);border:1px solid rgba(255,255,255,.5);background-color:rgba(255,255,255,.2);content:'x';font-size:24px;color:#cbcbcb}.transfer_tb{background:#E80019;padding:7px;color:#fff;text-transform:uppercase;font-weight:bold}.transfer_text{padding:10px;font-weight:bold;color:#4C4C4C}.transfer_link{color:#E80019;display:block;line-height:30px;text-align:center;font-weight:bold;cursor:pointer;font-size:13px;transition:0.4s;margin:auto;text-transform:capitalize}
</style>
<BODY>
  <center>
  		<div class="transfer">
        	<a href="<?=$page_transfer?>" title="<?=_clickvaodayneukhongmuondoilau?>"><p class="chuyentrang"></p></a>
        	<p class="transfer_tb"><?=_thongbao?></p>
        	<p class="transfer_text"><?=$showtext?></p>
            <a href="<?=$page_transfer?>" class="transfer_link"><?=_clickvaodayneukhongmuondoilau?></a>
        </div>
  </center>
</BODY>
</HTML>