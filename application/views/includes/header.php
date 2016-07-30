<?php $url="http://".$_SERVER['HTTP_HOST'];?>
<?php $currenturl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="<?= $desc ?>" />
    
    <link rel="dns-prefetch" href="http://www.google-analytics.com">
    <link rel="dns-prefetch" href="https://soundcloud.com">

    <title>Mix Exchange<? if(isset($title)): ?> <?= $title ?><? else: ?>Mix Exchange<? endif; ?></title>
    
    <link rel="stylesheet" href="<?php echo $url; ?>/css/main.css" type="text/css">
    
    <script src="<?php echo $url; ?>/js/lib/modernizr-2.6.2.min.js"></script>
    
    <meta property="og:title" content="Mix Exchange<? if(isset($title)): ?> <?= $title ?><? else: ?>Mix Exchange<? endif; ?>">
    <meta property="og:site_name" content="Mix Exchange">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $currenturl; ?>">
    <meta property="og:image" content="<?php echo $url; ?>/<?= $img ?>">
    <meta property="og:description" content="<?= $desc ?>">
    
    <link rel="shortcut icon" href="<?php echo $url; ?>/img/i/icon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $url; ?>/img/i/icon.png">
</head>

<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
