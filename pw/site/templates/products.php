<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <title>Embedded Wi-Fi and Bluetooth protocol stack | Clarinox</title><link rel="canonical" href="https://www.clarinox.com/products/">

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

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">

        <h1 class="page_heading theme_color">Embedded Wi-Fi and Bluetooth stacks</h1>
</div>
</div>
</div>


<div class="clearfix">&nbsp;</div>
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                   ClarinoxBlue
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/clarinoxblue"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                   ClarinoxWiFi
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/clarinox-wifi"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                    ClariFi
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/clarifi"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>

        </div>
    </div>
 
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                    SoftFrame
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/SoftFrame"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                 Koala Connect
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-4 col-sm-4 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/hardware/koala-connect/koala-connect-st-wl8"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>

            

            <div class=" col-md-4 col-sm-4 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/hardware/koala-connect/koala-connect-st-cc2564"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>

            

            <div class=" col-md-4 col-sm-4 col-xs-12 mob_pad_none">
                <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/hardware/koala-connect/yulo-connect"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                   Joeyduino
                </span>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12">
                
                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/hardware/joeyduino/joeydunio-shield"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                    </div>
                </div>
                
                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                        <?php $product = $pages->get("/products/hardware/joeyduino/joeyduino-carrier"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                    </div>
                </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                   Koala EVM
                </span>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12">
                
                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                    <?php $product = $pages->get("/products/hardware/koala-evm/koala-evm-blue"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                    </div>
                </div>
                
                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                        <?php $product = $pages->get("/products/hardware/koala-evm/koala-evm-green"); ?>
                    <p class="product_det"><?php echo $product->product_desc ?></p>
                    <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                    </div>
                </div>
        </div>
    </div>

</div>

<?php include('./footer.php'); ?>

</body>
</html>