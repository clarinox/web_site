<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/head-include.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
    <title>Embedded Wi-Fi and Bluetooth protocol stack | Clarinox</title><link rel="canonical" href="/products/">

    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content=" We deliver flexible and robust wireless protocol stack software for embedded systems and embedded wireless developers. ">
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

</div> <!-- End  bootstrap-touch-slider Slider -->

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>



<div class="container">
   <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding white_spacing spc">
       <h4 class="page_heading text-center uppercase" style="font-size: 28px; ">PRODUCTS & SOLUTIONS</h4>
   </div> 
   <div class="clearfix">&nbsp;</div>

   <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="products_lefts company_left">
               <div class="icons_secs">
                  <img src="/site/assets/files/1023/clarinoxblue.png" class="img-responsive com-img" >
               </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class="Product-fluided ">
                <p class="product_det"><strong>A robust Bluetooth Classic/LE protocol stack,</strong> Auracast and Mesh ready, supporting over 15 different RTOS. ClarinoxBlue is a dev-friendly stack that offers advanced embedded connectivity solutions.</p>
                <p class="more_read"><a href="/products/clarinoxblue/">More <i class="fa fa-angle-double-right"></i></a></p> 
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="products_lefts company_left">
               <div class="icons_secs">
                 <img src="/site/assets/files/1024/clarinoxwifi.png" class="img-responsive com-img">
               </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class="Product-fluided ">
             <p class="product_det"><strong>A proven Wi-Fi protocol stack </strong>  with AP,STA P2P, WPS, Mesh, ported to over 15 different RTOS. Clarinox Wi-Fi empowers developers to create reliable and high-performance embedded Wi-Fi connections.  </p>
             <p class="more_read"><a href="/products/clarinox-wifi/">More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="products_lefts company_left">
               <div class="icons_secs">
                  <img src="/site/assets/files/1026/clarifi.png" class="img-responsive com-img" >
               </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class="Product-fluided ">
             <p class="product_det"><strong> ClariFi&trade;  an all-in-one high-level debugger </strong>  with integrated Bluetooth and Wi-Fi sniffers, protocol analysis, memory optimization, leak analysis, and detailed thread/task insights. </p>
             <p class="more_read"><a href="/products/clarifi/">More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="products_lefts company_left">
               <div class="icons_secs" style="width: 100%">
                  <img src="/site/assets/files/1219/softframe-1.png" class="img-responsive com-img">
               </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class="Product-fluided ">
              <p class="product_det"> Our versatile protocol stacks operate seamlessly on the <strong> Clarinox SoftFrame abstraction layer,</strong>  facilitating swift portability,co-existence, and interoperability.</p>
              <p class="more_read"><a href="/products/softframe/">More <i class="fa fa-angle-double-right"></i></a></p>
 
            </div>
        </div>

    </div> 

</div>  

<div class="clearfix">&nbsp;</div>
  
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/footer.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

</body>
</html>