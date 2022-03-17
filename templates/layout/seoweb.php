<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="canonical" href="<?=getCurrentPageURL()?>" />
<link rel="SHORTCUT ICON" href="<?=_upload_hinhanh_l.$company['faviconthumb']?>" type="image/x-icon" />
<META NAME="ROBOTS" CONTENT="noodp,index,follow" />
<meta name="author" content="<?=$company['ten']?>" />
<meta name="copyright" content="<?=$company['ten']?> [<?=$company['email']?>]" />
<!--Meta Geo-->
<meta name="DC.title" content="<?php if($title!='')echo $title;else echo $seo['title'];?>" />
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="<?=$company['diachi']?>" />
<meta name="geo.position" content="<?=str_replace(',',':',$company['toado'])?>" />
<meta name="ICBM" content="<?=$company['toado']?>" />
<meta name="DC.identifier" content="http://<?=$config_url?>/" />
<!--Meta Geo-->
<!--Meta Ngôn ngữ-->
<?php /*?><meta name="language" content="Việt Nam">
<meta http-equiv="content-language" content="vi" />
<meta content="VN" name="geo.region" />
<meta name="DC.language" scheme="utf-8" content="vi" />
<meta property="og:locale" content="vi_VN" /><?php */?>
<!--Meta Ngôn ngữ-->
<!--Meta seo web-->
<title><?php if($title!='')echo $title;else echo $seo['title'];?></title>
<meta name="keywords" content="<?php if($keywords!='')echo $keywords;else echo $seo['keywords'];?>" />
<meta name="description" content="<?php if($description!='')echo $description;else echo $seo['description'];?>" />
<!--Meta seo web-->
<!--Meta facebook-->
<meta property="og:image" content="<?php if($images_facebook!='') echo $images_facebook;else echo 'http://'.$config_url.'/'._upload_hinhanh_l.$seo['thumb']?>" />
<meta property="og:title" content="<?php if($title_facebook!='')echo $title_facebook;else echo $seo['title'];?>" />
<meta property="og:url" content="<?php if($url_facebook!='') echo $url_facebook;else echo 'http://'.$config_url.'/';?>" />
<meta property="og:site_name" content="http://<?=$config_url?>/" />
<meta property="og:description" content="<?php if($description_facebook!='')echo $description_facebook;else echo $seo['description'];?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?=$company['ten']?>" /> 
<?=$company['code_header']?>