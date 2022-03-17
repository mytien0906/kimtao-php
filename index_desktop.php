<!DOCTYPE html>
<html lang="vi">

<head>
    <base href="http://<?= $config_url ?>/" />
    <meta name="viewport" content="width=1349">
    <?php include _template . "layout/seoweb.php"; ?>
    <?php include _template . "layout/css.php"; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body onLoad="<?php if (@$_GET['com'] == 'lien-he') echo 'initialize();'; ?><?php echo 'initialize1();'; ?>">
    <h1 class="fn the_an"><?php if ($title != '') echo $title;
                            else echo $seo['h1']; ?></h1>
    <h2 class="the_an"><?php if ($description != '') echo $description;
                        else echo $seo['h2']; ?></h2>
    <h3 class="the_an"><?php if ($keywords != '') echo $keywords;
                        else echo $seo['h3']; ?></h3>
    <div id="wapper">
        <?php if ($_GET['com'] == "index" || $_GET['com'] == "") { ?>
        <?php } ?>
        <div id="clock"></div>
        <div id="header"><?php include _template . "layout/header.php"; ?></div>
        <div id="menu"><?php include _template . "layout/menu_top.php"; ?></div>
        <div id="menu_mobi"><?php //include _template."layout/menu_mobi.php";
                            ?></div>
        <?php if ($_GET['com'] == "index" || $_GET['com'] == "") { ?>
            <div id="slider"><?php include _template . "layout/slider_jssor.php"; ?></div>
            <div id="gioi_thieu"><?php include _template . "layout/gioi_thieu.php"; ?></div>
            <div id="banner_qc"><?php include _template . "layout/banner_qc.php"; ?></div>
        <?php } ?>
        <div id="main_content"><?php include _template . $template . "_tpl.php"; ?> </div>
        <?php if ($_GET['com'] == "index" || $_GET['com'] == "") { ?>
            <div id="counter_wrap"><?php include _template . "layout/counter.php"; ?></div>
            <div id="video_map"><?php include _template . "layout/video_map.php"; ?></div>
            <div id="doitac"><?php include _template . "layout/doitac.php"; ?></div>
        <?php } ?>
        <div id="footer" class="clear"><?php include _template . "layout/footer.php"; ?></div>
        <div id="copy" class="clear"><?php include _template . "layout/copy.php"; ?></div>
    </div>

    <?php include _template . "layout/nhantin_goidien.php"; ?>
    <?php include _template . "layout/js.php"; ?>
    <?= $company['codethem'] ?>

</body>

</html>