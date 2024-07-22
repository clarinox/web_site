<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./head-include.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $page->Meta_Title ?> | Clarinox </title><link rel="canonical"href= "<?php echo $page->canonical_link ?>">
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

    <!----- Nav Bottom line css  --->
    <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/nav_style.css" >

    <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/bootstrap-select.css">

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
<link rel="stylesheet" href="<?php echo $config->urls->templates?>css/modal.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $config->urls->templates?>css/stellarnav.css">
<!---- Slick Slider ------->
<link href="<?php echo $config->urls->templates?>slick/slick.css" rel="stylesheet">
<link href="<?php echo $config->urls->templates?>slick/slick-theme.css" rel="stylesheet">
<!---- Google Font ------->
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

<?php include('./nav.php'); ?>

<div id="myModal" class="modal">
  <span class="close_button">&times;</span>
  <img class="modal-content" id="img01">
</div>

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
            <center><img src="<?php echo $page->images->first()->url ?>" class="img-responsive" alt="img" /></center>
        </div>
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
            <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                <h1 class="page_heading theme_color"><?php echo $page->headline ?></h1>
            </div>
            <p><?php echo $page->summary ?></p>

        </div>
    </div>

</div>
<!--<div class="learfix">&nbsp;</div>-->

<?php echo $page->body ?>

<div class="learfix">&nbsp;</div>
<div class="container">
    <div class="col-md-12 page_cont col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <h3 class="page_heading theme_color ">
            Video
        </h3>
    </div>
    <div class="col-md-12 page_cont col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <div class="product_det_vid">

        <iframe width="100%" height="300" src="<?php echo str_ireplace("/v/","/embed/",$page->video_link); ?>?showinfo=0" frameborder="0" allowfullscreen></iframe>

        </div>
    </div>
</div>
<div class="learfix">&nbsp;</div>
<div class="container-fluid product_det_gray">
<div class="container">
        <div class="col-md-12 page_cont col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h1 class="page_heading theme_color   ">
                Supported Platforms
            </h1>
<p>For a full range of supported platforms, please refer to <a href="https://clarinox.com/products/softframe/supported-platforms/">Supported Platforms</a>
        </div>
    </div>
    <div class="learfix">&nbsp;</div>
</div>
<div class="learfix">&nbsp;</div>
<div class="container">
    <div class="learfix">&nbsp;</div>
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                 Related Videos
                </span>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12">

            <?php
            $videos = $pages->find("template=video, sort=-custom_published_date, tags=$page->tags, limit=3");
            foreach ($videos as $video){
            ?>

            <div class=" col-md-4 col-sm-4 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <iframe width="100%" height="100%" src="<?php echo str_ireplace("/v/","/embed/",
                        $video->link); ?>?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>

    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                 Related News
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">

            <?php
            $newsletters = $pages->find("template=newsletter, sort=-custom_published_date, tags=$page->tags, limit=3");
            foreach ($newsletters as $newsletter){
                $content = $newsletter->title . ': ' . $newsletter->summary;
                if (strlen($content) > 150)
                    $content = substr ($content, 0, 150) . ' ...';
            ?>


            <div class=" col-md-4 col-sm-4 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <p class="product_det"><?php echo $content ?></p>
                    <p class="pro_read"><a href="<?php echo $config->urls->root ?>resources/newsletters">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>

</div>

<div class="container">
	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
		<h3 class="page_heading theme_color text-center"> Products & Solution </h3>
	</div>
	<div class="clearfix">&nbsp;</div>
	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
		<?php $home = $pages->get('/'); ?>
		<?php $products = $pages->get('/products/'); ?>
		<?php foreach($home->featured_products as $product) { ?>
			<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
				<div class="col-xs-12 service_bx">
					<a href="<?php echo $product->url ?>">
						<div class="icon_sec">
						   <img src="<?php echo $product->images->get('product-icon.png')->url?>" class="img-responsive" height="100" width="100"> <a href="<?php echo $product->url ?>"> </a></img>
						</div>
					</a>
					<div class="cont_sec">
						<p class="service_head"><a href="<?php echo $product->url ?>"><?php echo $product->product_name ?></a></p>
						<p class="service_cont"><?php echo $product->headline ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="clearfix">&nbsp;</div>
		<a href="<?php echo $products->url ?>" class="service_more">See More..</a>
		</div>
	</div>
</div>
</div>
<div class="clearfix">&nbsp;</div>
 
<?php include('./footer.php'); ?>

</body>
</html>
