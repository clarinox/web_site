<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <title>Clarinox | Video - <?php echo $page->title ?></title>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content="<?php echo $page->meta_description ?>">
    <meta name="keywords" content="<?php echo $page->meta_keywords ?>">
    <meta name="author" content="">

<!--FAVICON -->
<link rel="apple-touch-icon" sizes="180x180" href="/site/templates/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/site/templates/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/site/templates/images/favicon/favicon-16x16.png">


<!-- Google tag (gtag.js) - Google Ads: N3JNV03H0B -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N3JNV03H0B"></script> 
<script> 
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date());

  gtag('config', 'G-N3JNV03H0B'); 
</script>

</head>
<body>
<?php include('./body-include.php'); ?>
<link rel="stylesheet" href="<?php echo $config->urls->templates?>css/custom.css">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>css/custom-responsive.css">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>css/font-awesome.css">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>css/bootstrap-touch-slider.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $config->urls->templates?>css/stellarnav.css">
<!---- Slick Slider ------->
<link href="<?php echo $config->urls->templates?>slick/slick.css" rel="stylesheet">
<link href="<?php echo $config->urls->templates?>slick/slick-theme.css" rel="stylesheet">
<!---- Google Font ------->
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

<?php include('./nav.php'); ?>

<div class="container">
    <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <h3 class="page_heading theme_color"><?php echo $page->headline ?></h3>
    </div>
</div>

<div class="col-md-12 page_cont col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
    <div class="product_det_vid">
        <iframe width="100%" height="400" src="<?php echo str_ireplace("/v/","/embed/",$page->link); ?>?showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<div class="container">
    <div class="col-md-12 page_cont col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <?php echo $page->body ?>
        <p><em>This video is best viewed with Google Chrome, Mozilla Firefox or Microsft Edge</em></p>
    </div>

    <?php 

    foreach($page->selector_partners as $partner){
        $partners .= $partner->title . "|";
    }

    $selector = "template=video, has_parent=/resources/videos, sort=-custom_published_date";
    $selector .= ", selector_partners.title=$partners";
    $videos = $pages->find($selector)->not("id=$page->id");

    ?>

    <?php if(count($videos)){ ?>
    
    <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <h4 class="theme_color">Related Videos</h4>
        <p><ul>
        <?php foreach ($videos as $video) { ?>
            <li><a href="<?php echo $video->url; ?>"><?php echo $video->headline; ?></a></li>
        <?php } ?>   
        </ul></p>
    </div>
    <?php } ?>


</div>

<div class="clearfix">&nbsp;</div>
<div class="container"></div>

<?php include('./footer.php'); ?>

</body>
</html>