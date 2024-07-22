<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/head-include.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
    <title>Embedded Systems and Embedded Wireless Resources | Clarinox</title><link rel="canonical" href="/resources/">

    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content="Learn more about Clarinox embedded systems and embedded wireless stacks with our videos, articles, and case studies.">
    <meta name="keywords" content="">
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
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/body-include.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
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

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/nav.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

<div id="bootstrap-touch-slider" class="carousel bs-slider fade  company_pg_slide control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">
        <?php
        $sliders = $page->sliders;
        foreach ($sliders as $slider){
        if ($slider == $sliders->first()){
            echo "<div class='item active'>";
        } else {
            echo "<div class='item'>";
        }
        ?>
        <img src="<?php echo $slider->url ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
    </div>
    <?php } ?>
    </div><!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>


 <!-- End  bootstrap-touch-slider Slider -->

<div class="container white_space">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">

        <h1 class="page_heading theme_color">Embedded Wireless Resources</h1>
</div>
</div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="container">
    <?php $videos = $pages->find("parent=/resources/videos/, sort=-custom_published_date, limit=3"); ?>
    <?php $url = $pages->get('/resources/videos'); ?>
    
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                 Videos
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <?php foreach ($videos as $item) {?>
            <div class=" col-md-4 col-sm-4 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <p class="product_det"><?php echo $item->title ?></p>
                    <?php $ref = substr($url->url, 0, -1) . "#" . $item->name ?>
                    <!--
                    <p class="pro_read"><a href="<?php echo $url->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                    -->
                    <p class="pro_read"><a href="<?php echo $ref ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    
    <?php $url = $pages->get('/resources/articles'); ?>
    <?php $managers = $pages->find("parent=/resources/articles/managers, sort=-custom_published_date, limit=3"); ?>
    <?php $engineers = $pages->find("parent=/resources/articles/engineers, sort=-custom_published_date, limit=3"); ?>
    
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                   Articles
                </span>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12">
                
                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                    
                    <?php foreach ($managers as $item) { ?>
                        <p class="product_det"><?php echo $item->title ?></p>
                    <?php } ?>
                    <?php $ref = substr($url->url, 0, -1) . "#for-managers" ?>
                    <p class="pro_read"><a href="<?php echo $ref ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                    

                    </div>
                </div>
                
                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                    
                    <?php foreach ($engineers as $item) { ?>
                        <p class="product_det"><?php echo $item->title ?></p>
                    <?php } ?>        
                    <?php $ref = substr($url->url, 0, -1) . "#for-engineers" ?>
                    <p class="pro_read"><a href="<?php  echo $ref ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                    </div>
                </div>
        </div>
    </div>

    <?php $newsletters = $pages->find("parent=/resources/newsletters/2023, sort=-custom_published_date, limit=3"); ?>
    <?php $url = $pages->get('/resources/newsletters'); ?>
   
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                 Newsletters
                </span>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12">
          <?php foreach ($newsletters as $item) {?>
            <div class=" col-md-4 col-sm-4 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <p class="product_det"><?php echo $item->title ?></p>
                    <?php $ref = substr($url->url, 0, -1) . "#" . $item->name ?>
                    <p class="pro_read"><a href="<?php echo $ref ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>
            <?php } ?>
        
    </div>
</div>

    <?php $cases = $pages->find("parent=/resources/case-studies, sort=-custom_published_date, limit=3"); ?>
    <?php $url = $pages->get('/resources/case-studies'); ?>
    
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                 Case Studies
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <?php foreach ($cases as $item) {?>
            <div class=" col-md-4 col-sm-4 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <p class="product_det"><?php echo $item->title ?></p>
                    <?php $ref = substr($url->url, 0, -1) . "#" . $item->name ?>
                    <p class="pro_read"><a href="<?php echo $ref ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>



</div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/footer.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

</body>
</html>