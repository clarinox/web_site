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
 

<?php echo $page->body ?> 

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="container">
<a href="/products/softframe/supported-platforms/" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding fills">
    <div class="row">
        <div class="col-md-5 col-sm-6 col-xs-5 sups" style="padding: 5px 14px;">
            <h4 class="theme_white nums-size"><strong>Supported Platforms</strong></h4>
        </div>
        <div class="col-md-5 col-sm-3 col-xs-5 full-list">
            <span class="theme_white">CLICK HERE FOR <br>THE FULL LIST</span>
        </div> 
    </div>
</a>
</div>

<!-- Relative videos -->
<div class="container">
    <div class="learfix">&nbsp;</div>

    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list fluid product_det_gray">
        <div class="col-md-2 col-sm-12 col-xs-12 ">
                
       <h4 class="nums-size"><strong> Related Videos</strong></h4>
        
       </div>

        <div class="col-md-10 col-sm-12 col-xs-12">

            <?php
            $videos = $pages->find("template=video, sort=-custom_published_date, tags=$page->tags, limit=3");
            foreach ($videos as $video){
            ?>

            <div class=" col-md-4 col-sm-12 col-xs-12 mob_pad_none">
                <div class="products_conts">
                    <iframe width="100%" height="100%" src="<?php echo str_ireplace("/v/","/embed/",
                        $video->link); ?>?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>

   <div class="learfix">&nbsp;</div>
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list fluid product_det_gray">
      
        <div class="col-md-2 col-sm-12 col-xs-12 ">
                
       <h4 class="nums-size"><strong>Related News</strong></h4>
        
       </div>


        <div class="col-md-10 col-sm-12 col-xs-12">

            <?php
            $newsletters = $pages->find("template=newsletter, sort=-custom_published_date, tags=$page->tags, limit=3");
            foreach ($newsletters as $newsletter){
                $content = $newsletter->title . ': ' . $newsletter->summary;
                if (strlen($content) > 150)
                    $content = substr ($content, 0, 150) . ' ...';
            ?>


            <div class=" col-md-4 col-sm-12 col-xs-12 mob_pad_none">
                <div class="products_conts">
                    <p class="product_det"><?php echo $content ?></p>
                    <p class="pros_read"><a href="<?php echo $config->urls->root ?>resources/newsletters"> More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>

</div>


  <div class="learfix">&nbsp;</div>
  <div class="learfix">&nbsp;</div>



<!--PRODUCTS & SOLUTIONS --> 

<div class="container">

  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
       <h4 class="page_heading text-center uppercase" style="font-size: 28px;">PRODUCTS & SOLUTIONS</h4>
  </div> 
  <div class="clearfix">&nbsp;</div>
 
  <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
    <div class="col-md-3 col-sm-3 col-xs-12 mob_pad_none">
        <div class="product_conts_bx contain-fluid product_det_gray ps">
           <div class="icon_sec">
              <img src="/site/assets/files/1023/clarinoxblue.png" class="img-responsive" height="100" width="180">
           </div>
              <div class="clearfix">&nbsp;</div>
              <p class="product_det">A robust Bluetooth Classic/LE protocol stack, Auracast and Mesh ready , supporting over 15 different RTOS. ClarinoxBlue is a dev- friendly stack, that offers advance embedded connectivity solutions.  </p>
              <p class="pros_read"><a href="/products/clarinoxblue/">More <i class="fa fa-angle-double-right"></i></a></p>
        </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-12 mob_pad_none">
        <div class="product_conts_bx contain-fluid product_det_gray ps">
          <div class="icon_sec">
             <img src="/site/assets/files/1024/clarinoxwifi.png" class="img-responsive" height="100" width="180">
          </div>
            <div class="clearfix">&nbsp;</div>
             <p class="product_det">A proven Wi-Fi protocol stack with AP, STA P2P, WPS, Mesh, ported to over 15 different RTOS. Clarinox Wi-Fi empowers developers to create reliable and high-performance embedded Wi-Fi connections.  </p>
             <p class="pros_read"><a href="/products/clarinox-wifi/">More <i class="fa fa-angle-double-right"></i></a></p>
        </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-12 mob_pad_none">
      <div class="product_conts_bx contain-fluid product_det_gray ps" >
          <div class="icon_sec">
             <img src="/site/assets/files/1026/clarifi.png" class="img-responsive" height="100" width="180">
          </div>
          <div class="clearfix">&nbsp;</div>
         
             <p class="product_det">ClariFi&trade;  an all-in-one high-level debugger with integrated Bluetooth and Wi-Fi sniffers, protocol analysis, memory optimization, leak analysis, and detailed thread/task insights. </p>
             <p class="pros_read"><a href="/products/clarifi/">More <i class="fa fa-angle-double-right"></i></a></p>
       </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-12 mob_pad_none">
        <div class="product_conts_bx contain-fluid product_det_gray ps">
          <div class="icon_sec">
             <img src="/site/assets/files/1219/softframe-1.png" class="img-responsive" height="100" width="180">
          </div>
          <div class="clearfix">&nbsp;</div>
             <p class="product_det"> Our versatile protocol stacks operate seamlessly on the Clarinox SoftFrame abstraction layer, facilitating swift portability,co-existence, and interoperability.</p>
             <p class="pros_read"><a href="/products/softframe/">More <i class="fa fa-angle-double-right"></i></a></p>           
        </div>
    </div>
  </div>
</div>

<div class="clearfix">&nbsp;</div>
 
<?php include('./footer.php'); ?>

</body>
</html>
