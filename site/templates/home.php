<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include('./head-include.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Embedded Bluetooth and Wi-Fi protocol stack | Clarinox</title><link rel="canonical" href=".">


<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="white" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="width">
<meta name="theme-color" content="#fff ">
<meta name="description" content="Clarinox provides innovative Bluetooth and Wi-Fi protocol stack software for embedded wireless systems">
<meta name="keywords" content="<?php echo $page->meta_keywords ?>">
<meta name="author" content="">

<!--FAVICON-->
<link rel="apple-touch-icon" sizes="180x180" href="/site/templates/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/site/templates/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/site/templates/images/favicon/favicon-16x16.png"> 

<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "Clarinox Technologies Pty Ltd",
  "url": "https://www.clarinox.com/",
  "foundingDate" : "2001",
  "founders": [
  {
  "@type": "Person",
  "name": "Trish Messiter"
  },
  {
  "@type": "Person",
  "name": "Gokhan Tanyeri"
  } ],
  "logo": "https://media.licdn.com/dms/image/C4D0BAQEaXgElUPRq0A/company-logo_200_200/0?e=2159024400&v=beta&t=dxRaLY5DzcHjYhCNb3cajFbWazGMWWO_nX4xt61qZZQ",
  "description": "Clarinox Technologies is a wireless embedded systems provider founded in 2001 by Trish Messiter and Gokhan Tanyeri. Clarinox has sales offices worldwide with its main head office located in Cheltenham, Melbourne, Australia.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "28/296 Bay Rd, Cheltenham",
    "addressLocality": "Melbourne",
    "addressRegion": "Victoria",
    "postalCode": "3192",
    "addressCountry": "Australia"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+61 3 9016 9590"
  }
}
 </script>

<!---- Home Page Slider---->
<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/revolution-slider-options.css" media="screen" /> 

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

<div class="mediumactive">
    <!-- Wrapper For Slider -->
    <div class="carousel-inner" role="listbox">
        <?php
        $sliders = $page->sliders;
        foreach ($sliders as $slider) {
            if ($slider == $sliders->first()) {
                echo "<div class='item active'>";
            } else {
                echo "<div class='item'>";
            }
        ?>
            <img src="<?php echo $slider->url ?>" alt="Bootstrap Touch Slider" class="slide-image banner" style="margin-top: 70px;" />

            <!-- Enquiry Button -->
            <a href="https://clarinox.com/contact-us/enquiries/">
                <img src="/site/assets/files/1368/Enquiry_Button.png" class="small-image slide-image positioned-image enquiry-button" />
            </a>

            <img src="/site/assets/files/1368/W-E-S_Spinner.png" class="small-image slide-image positioned-image spinner-image" />
        </div>
        <?php } ?>
    </div> 
    <!-- End of Wrapper For Slider -->   
</div>

<div class="maxactive">
    <div class="carousel-inner" role="listbox">

        <img src="/site/templates/images/Banner/Clarinox_Homepage_2024.jpg" class="img-responsive banner-mar max-bar" />

        <a href="https://clarinox.com/contact-us/enquiries/">
            <img src="/site/assets/files/1368/Enquiry_Button.png" class="small-image slide-image positioned-image enquiry-mob" />
        </a>

        <img src="/site/assets/files/1368/W-E-S_Spinner.png" class="small-image slide-image positioned-image spinner-mob" />

    </div> 
</div>


<div class="iteamactive">

      <div class="clearfix">&nbsp;</div>
      <div class="clearfix">&nbsp;</div>                                                         

<!-- PRODUCTS & SOLUTIONS -->
<div class="container">

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
        <h4 class="page_heading text-center uppercase" style="font-size: 28px;">PRODUCTS & SOLUTIONS</h4>
    </div>

    <div class="clearfix">&nbsp;</div>

    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-3 col-xs-12 mob_pad_none">
            <div class="product_conts_bx containers-fluids product_det_gray grey">
                <div class="icon_sec">
                    <img src="/site/assets/files/1023/clarinoxblue.png" class="img-responsive" height="100" width="180">
                </div>
                <div class="clearfix">&nbsp;</div>
                <p class="product_det">A robust Bluetooth Classic/LE protocol stack, Auracast and Mesh ready, supporting over 15 different RTOS. ClarinoxBlue is a dev-friendly stack that offers advanced embedded connectivity solutions.</p>
                <p class="pros_read"><a href="/products/clarinoxblue/">More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 mob_pad_none">
            <div class="product_conts_bx containers-fluids product_det_gray grey">
                <div class="icon_sec">
                    <img src="/site/assets/files/1024/clarinoxwifi.png" class="img-responsive" height="100" width="180">
                </div>
                <div class="clearfix">&nbsp;</div>
                <p class="product_det">A proven Wi-Fi protocol stack with AP, STA P2P, WPS, Mesh, ported to over 15 different RTOS. Clarinox Wi-Fi empowers developers to create reliable and high-performance embedded Wi-Fi connections.</p>
                <p class="pros_read"><a href="/products/clarinox-wifi/">More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 mob_pad_none">
            <div class="product_conts_bx containers-fluids product_det_gray grey">
                <div class="icon_sec">
                    <img src="/site/assets/files/1026/clarifi.png" class="img-responsive" height="100" width="180">
                </div>
                <div class="clearfix">&nbsp;</div>
                <p class="product_det">ClariFi&trade;  an all-in-one high-level debugger with integrated Bluetooth and Wi-Fi sniffers, protocol analysis, memory optimization, leak analysis, and detailed thread/task insights.</p>
                <p class="pros_read"><a href="/products/clarifi/">More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 mob_pad_none">
            <div class="product_conts_bx containers-fluids product_det_gray grey">
                <div class="icon_sec">
                    <img src="/site/assets/files/1219/softframe-1.png" class="img-responsive" height="100" width="180">
                </div>
                <div class="clearfix">&nbsp;</div>
                <p class="product_det">Our versatile protocol stacks operate seamlessly on the Clarinox SoftFrame abstraction layer, facilitating swift portability, co-existence, and interoperability.</p>
                <p class="pros_read"><a href="/products/softframe/">More <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>
    </div>
</div>

<div class="clearfix">&nbsp;</div>

<!-- Supported and clients -->
<div class="container">
    <div class="row">
        <div class="col-md-6 nopadding">
            <h4 class="page_heading text-center uppercase" style="font-size: 28px;">SUPPORTED PLATFORMS</h4>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="products_cont_bx"> 
                        <div class="slider responsive">
                            <div class="row">
                                <?php
                                $platforms = $page->platforms;
                                $count = 0;
                                foreach ($platforms as $platform) {
                                    echo "<div class='col-md-6 logo-item'><img src='$platform->url' class='clogos'/></div>";
                                    $count++;
                                    if ($count % 2 == 0) {
                                        echo '</div><div class="clearfix">&nbsp;</div><div class="row">';
                                    }
                                }
                                ?>
                            </div>  
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="col-md-6 nopadding">
            <h4 class="page_heading text-center uppercase" style="font-size: 30px;">CLIENTS</h4>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="products_cont_bx"> 
                        <div class="slider responsive">
                            <div class="row">
                                <?php
                                $clients = $page->company_clients;
                                $count = 0;
                                foreach ($clients as $client) {
                                    echo "<div class='col-md-6 logo-item'><img src='$client->url' class='client_logos'/></div>";
                                    $count++;
                                    if ($count % 2 == 0) {
                                        echo '</div><div class="clearfix">&nbsp;</div><div class="row">';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News and videos -->
<div class="container-fluid address_back">
    <div class="clearfix">&nbsp;</div>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">

            <div class="col-md-4 col-sm-3 col-xs-12 mob_pad_none">
                <div class="product_conts_bx containers-fluids products_det_gray" style="height: 320px;">
                    <h4 class="page_heading text-center">NEWS</h4>
                    <img src="/site/assets/files/1053/clarinox_insight_sip_partnership.jpg" class="mars">
                    <div class="clearfix">&nbsp;</div>
                    <p style="text-align: center;"><strong>Clarinox and Insight SIP Announce Partnership </strong></p>
                    <p class="pros_read"><a href="/resources/newsletters/">More <i class="fa fa-angle-double-right"></i></a></p>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>

            <div class="col-md-4 col-sm-3 col-xs-12 mob_pad_none">
                <div class="product_conts_bx containers-fluids products_det_gray" style="height: 320px;">
                    <h4 class="page_heading text-center">VIDEOS</h4>
                    <div class="icon_sec">
                        <div class="" style="margin-left: 15px;">
                            <iframe id="player" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="Bluetooth Low Energy Audio (aka Auracast) streaming by Clarinox" width="320px" height="181" src="https://www.youtube.com/embed/sOcIpDbZHhg?start=76"></iframe>
                        </div>
                        <p class="pros_read"><a href="/resources/videos/">More <i class="fa fa-angle-double-right"></i></a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-3 col-xs-12 mob_pad_none">
                <div class="product_conts_bx containers-fluids products_det_gray" style="height: 320px;">
                    <h4 class="page_heading text-center">CASE STUDIES</h4>
                    <img src="/site/assets/files/1369/actronicaclarinox-1.jpg" class="mars">
                    <div class="clearfix">&nbsp;</div>
                    <p style="margin-left: 11%;"><strong> Wireless Haptic Vest Creates Immersive Experiences for Virtual Reality... </strong></p>
                    <p class="pros_read"><a href="/resources/case-studies/">More <i class="fa fa-angle-double-right"></i></a></p>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Contact -->
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
        <div class="clearfix">&nbsp;</div>
        <h4 class="page_heading text-center uppercase" style="font-size: 30px;">CONTACT</h4>
        <div class="clearfix">&nbsp;</div>
        <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: right;">
            <?php $image = $page->images->first(); ?>
            <img src="<?php echo $image->url ?>" style="max-width: 100%; height: auto;" frameborder="0" style="border:0;" allowfullscreen></img>
            <div class="clearfix">&nbsp;</div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 social_right-top col-sm-4 col-xs-12">
            <div class="row" style="margin-right: -50px;">
                <div class="col-xs-3">
                    <div class="office-info">
                        <p><strong>Clarinox Head Office</strong></p> 
                        <p>28/296 Bay Road<br/> Cheltenham, VIC 3192<br/>Australia<br></p>
                        <p>+61 3 9016 9590</p>  
                    </div>
                </div>      
                <div class="col-xs-4">
                    <div class="office-info">
                        <p><strong>Clarinox India Office</strong></p> 
                        <p>105, Anna Salai, Little Mount,<br>Guindy, Chennai-600 032,<br>Tamil Nadu, India</p>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="office-info" style="margin-left: -18px;">
                        <p><strong>Clarinox T&uuml;rkiye Office</strong></p> 
                        <p>Zafer SB Mah. Nil&uuml;fer SK.<br/>No: 32 Office: 207<br/>Gaziemir, Izmir, 35410<br/>T&uuml;rkiye</p> 
                    </div>
                </div>     
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="nopadding social-bottom">
            <ul class="social-network ">
                <?php
                    $company = $pages->get("/company");
                ?>
                <li><a href='<?php echo $company->link_linkedin; ?>' title="linkedin +">
                    <img class="social-icon" src="/site/templates/images/socialnetworkicons/LinkedIn.png"></a>
                </li>
                <li><a href='<?php echo $company->link_twitter; ?>' title="twitter">
                    <img class="social-icon" src="/site/templates/images/socialnetworkicons/X.png"></a>
                </li>
                <li><a href='<?php echo $company->link_youtube; ?>' title="youtube">
                    <img class="social-icon" src="/site/templates/images/socialnetworkicons/YouTube.png"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>

<!-- mob -->

<div class="mobileactive">

<div class="carousel-inner" role="listbox">
    <img src="/site/templates/images/Banner/Clarinox_Homepage.jpg" class="img-responsive banner-mar" />
    <a href="https://clarinox.com/contact-us/enquiries/">
        <img src="/site/assets/files/1368/Enquiry_Button.png" class="small-image slide-image positioned-image enquiry-mob" />
    </a>
    <img src="/site/assets/files/1368/W-E-S_Spinner.png" class="small-image slide-image positioned-image spinner-mob" />
</div> 

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="container">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
        <h4 class="page_heading text-center uppercase" style="font-size: 20px;">PRODUCTS & SOLUTIONS</h4>
    </div> 
    <div class="clearfix">&nbsp;</div>
    <div class="col-md-12 col-sm-12 col-xs-10 nopadding product_list smallgrid">
        <div class="row">
            <div class="col-xs-6 col-sm-6 mob_pad_none">
                <div class="product_conts_bx containers-mob product_det_gray grey smallcont spx_mob ">
                    <div class="icon_sec">
                        <img src="/site/assets/files/1023/clarinoxblue.png" class="img-responsive" height="100" width="180">
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <p class="product_det">A robust Bluetooth Classic/LE protocol stack, Auracast and Mesh ready, supporting over 15 different RTOS. ClarinoxBlue is a dev-friendly stack that offers advanced embedded connectivity solutions.</p>
                    <p class="pros_mob"><a href="/products/clarinoxblue/">More <i class="fa fa-angle-double-right"></i></a></p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 mob_pad_none">
                <div class="product_conts_bx containers-mob product_det_gray grey smallcont">
                    <div class="icon_sec">
                        <img src="/site/assets/files/1024/clarinoxwifi.png" class="img-responsive" height="100" width="180">
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <p class="product_det">A proven Wi-Fi protocol stack with AP, STA P2P, WPS, Mesh, ported to over 15 different RTOS. Clarinox Wi-Fi empowers developers to create reliable and high-performance embedded Wi-Fi connections.</p>
                    <p class="pros_mob"><a href="/products/clarinox-wifi/">More <i class="fa fa-angle-double-right"></i></a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 mob_pad_none">
                <div class="product_conts_bx containers-mob product_det_gray grey smallcont spx_mob ">
                    <div class="icon_sec">
                        <img src="/site/assets/files/1026/clarifi.png" class="img-responsive" height="100" width="180">
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <p class="product_det">ClariFi&trade; an all-in-one high-level debugger with integrated Bluetooth and Wi-Fi sniffers, protocol analysis, memory optimization, leak analysis, and detailed thread/task insights.</p>
                    <p class="pros_mob"><a href="/products/clarifi/">More <i class="fa fa-angle-double-right"></i></a></p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 mob_pad_none">
                <div class="product_conts_bx containers-mob product_det_gray grey smallcont">
                    <div class="icon_sec">
                        <img src="/site/assets/files/1219/softframe-1.png" class="img-responsive" height="100" width="180">
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <p class="product_det">Our versatile protocol stacks operate seamlessly on the Clarinox SoftFrame abstraction layer, facilitating swift portability, co-existence, and interoperability.</p>
                    <p class="pros_mob"><a href="/products/softframe/">More <i class="fa fa-angle-double-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mobpx">
<div class="container">
    <div class="clearfix">&nbsp;</div>    
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding"> 
        <h4 class="page_heading text-center uppercase" style="font-size: 20px;">SUPPORTED PLATFORMS</h4>
    </div> 
    <div class="clearfix">&nbsp;</div>
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="slider responsive hg">
            <?php
            $supportsmob = $page->supportsmob; 
            foreach ($supportsmob as $image) {
                echo "<div><img src='{$image->url}' class='logos'/></div>";
            }
            ?>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
    </div>
</div>

<div class="container">
    <div class="clearfix">&nbsp;</div>    
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding"> 
        <h4 class="page_heading text-center uppercase topx" style="font-size: 20px;">CLIENTS</h4>
    </div> 
    <div class="clearfix">&nbsp;</div>
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="slider responsive hg">
            <?php
            $clientmob = $page->clientmob; 
            foreach ($clientmob as $image) {
                echo "<div><img src='{$image->url}' class='logos'/></div>";
            }
            ?>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
    </div>
</div>
</div>

<!-- mob logos-->

<div class="smallpx">
<?php
$companyPage = $pages->get("template=company");

if ($companyPage && $companyPage->hasField('mobsup')) {
    $mobsup = $companyPage->mobsup;
    if ($mobsup->count() > 0) {
        ?>
        <div class="container">  
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding"> 
                <h4 class="page_heading text-center uppercase" style="font-size: 20px;">SUPPORTED PLATFORMS</h4>
            </div> 
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="slider responsive hg">
                    <?php
                    foreach ($mobsup as $image) {
                        echo "<div><img src='{$image->url}' class='mxmob'/></div>";
                    }
                    ?>
                </div>
                <div class="clearfix">&nbsp;</div>
            </div>
        </div>
        <?php
    } else {
        echo "<p>No alliances found.</p>";
    }
} else {
    echo "<p>Company page or mobsup field not found.</p>";
}

if ($companyPage && $companyPage->hasField('mobclient')) {
    $mobclient = $companyPage->mobclient;

    if ($mobclient->count() > 0) {
        ?>
        <div class="container">  
          <div class="clearfix">&nbsp;</div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding"> 
                <h4 class="page_heading text-center uppercase topx" style="font-size: 20px;">CLIENTS</h4>
            </div> 
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="slider responsive hg">
                    <?php
                    foreach ($mobclient as $image) {
                        echo "<div><img src='{$image->url}' class='mxmob'/></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "<p>No clients found.</p>";
    }
} else {
    echo "<p>Company page or mobclient field not found.</p>";
}
?> 
</div>

<!-- mob logos end -->

<div class="container-fluid address_back">
    <div class="clearfix">&nbsp;</div>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
 
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
                <div class="product_conts_bx con containers-fluids products_det_gray" style="height:auto;">
                    <h4 class="page_heading text-center" style="font-size: 20px;">NEWS</h4>
                    <img src="/site/assets/files/1053/clarinox_insight_sip_partnership.jpg" class="mars">
                     <div class="clearfix">&nbsp;</div>
                     <div class="img-pad">
                          <p><strong>Clarinox and Insight SIP Announce Partnership </strong></p>
                    </div>
                    <p class="pro"><a href="/resources/newsletters/">More <i class="fa fa-angle-double-right"></i></a></p>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
                <div class="product_conts_bx con containers-fluids products_det_gray" style="height: 400px;">
                    <h4 class="page_heading text-center uppercase" style="font-size: 20px;">VIDEOS</h4> 
                    <div class="icon_sec">
                        <iframe id="player" class="video-container" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                        picture-in-picture" title="Bluetooth Low Energy Audio (aka Auracast ) streaming by Clarinox" src="https://www.youtube.com/embed/sOcIpDbZHhg?start=76" style="display: block; margin: 0 auto;">
                        </iframe>
                    </div>
                    <p class="pro"><a href="/resources/videos/">More <i class="fa fa-angle-double-right"></i></a></p>
                </div>
            </div> 

            <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
                <div class="product_conts_bx con containers-fluids products_det_gray" style="height:auto;">
                    <h4 class="page_heading text-center" style="font-size: 20px;">CASE STUDIES</h4>
                    <img src="/site/assets/files/1369/actronicaclarinox-1.jpg" class="mars">
                     <div class="clearfix">&nbsp;</div>
                     <div class="img-pad">
                          <p><strong>Wireless Haptic Vest Creates Immersive Experiences for Virtual Reality</strong></p>
                    </div>
                    <p class="pro"><a href="/resources/case-studies/">More <i class="fa fa-angle-double-right"></i></a></p>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Contact -->
<div class="container">
    <div class="clearfix">&nbsp;</div>
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
        <h4 class="page_heading text-center uppercase" style="font-size: 20px;">CONTACT</h4>
        <div class="clearfix">&nbsp;</div>
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding text-center">
            <img src="/site/assets/files/1/world_map.png" class="map-clss maps-clssimg-responsive" allowfullscreen="">
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="container">
            <div class="row" style="margin-right: -50px;">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 addrs ">
                    <div class="office-info">
                        <p><strong>Clarinox Head Office</strong></p>
                        <p>28/296 Bay Road<br> Cheltenham, VIC 3192<br>Australia<br></p>
                        <p>+61 3 9016 9590</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 addrs ">
                    <div class="office-info">
                        <p><strong>Clarinox India Office</strong></p>
                        <p>105, Anna Salai, Little Mount,<br>Guindy, Chennai-600 032,<br>Tamil Nadu, India</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 addrs ">
                    <div class="office-info">
                        <p><strong>Clarinox T&uuml;rkiye Office</strong></p>
                        <p>Zafer SB Mah. Nil&uuml;fer SK.<br/>No: 32 Office: 207<br/>Gaziemir, Izmir, 35410<br/>T&uuml;rkiye</p>
                    </div>
                </div>
            </div>
        </div>

  <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="col-md-4 col-sm-5 col-xs-12 col-lg-3 nopadding social soc-bot">
            <ul class="social-network">
                <li><a href='<?php echo $company->link_linkedin; ?>' title="linkedin +"><img class="social-icon" src="/site/templates/images/socialnetworkicons/LinkedIn.png"></a></li>
                <li><a href='<?php echo $company->link_twitter; ?>' title="twitter"><img class="social-icon" src="/site/templates/images/socialnetworkicons/X.png"></a></li>
                <li><a href='<?php echo $company->link_youtube; ?>' title="youtube"><img class="social-icon" src="/site/templates/images/socialnetworkicons/YouTube.png"></a></li>            
            </ul>
        </div>
    </div>
</div>
</div>
</div>

<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-9 col-xs-8">
                <p class="left-texts foot-font">&copy; 2001-2025 CLARINOX TECHNOLOGIES PTY LTD., ALL RIGHTS RESERVED.</p>
            </div>
            <div class="col-md-6 col-sm-3 col-xs-4">
               <p class="right-texts foot-font">
                  <a href="/company/quality/" style="color: white;">ISO9001 CERTIFIED COMPANY</a>
               </p>
            </div> 
        </div>
    </div> 
</footer>


<script src="<?php echo $config->urls->templates?>js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/modernizr.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/totop.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/bootstrap-touch-slider.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://www.youtube.com/player_api"></script>
<script type="text/javascript" src="<?php echo $config->urls->templates?>js/stellarnav.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
      jQuery('.stellarnav').stellarNav({
        theme: 'dark'
      });
    });
</script>

<script>
  $( '#bootstrap-touch-slider' ).bsTouchSlider();
</script>

<script>
var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
height: '200',
width: '280x',
rel: '0',
videoId: '<?php echo substr(strrchr($pages->find("template=video, sort=-custom_published_date")->first()->link,"/"),1) ?>'
});
}

$(document).on('mouseover', '#player', function() {
    player.playVideo();
});
$(document).on('mouseout', '#player', function() {
    player.pauseVideo();
});
</script>


<script>

$('.single-item').slick();

</script>
<script>
$('.totop').tottTop({
scrollTop: 100
});
</script>
<script type="text/javascript">


    $(function(){
        var header = $('#header');
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll >= 30){

                $('#header').addClass('pghead');


            } else {


                $('#header').removeClass('pghead');
            }

        });
    });

</script>
<script>

$(function(){
    var header = $('#main-nav');
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll >= 30){

            $('#main-nav').addClass('mob_fit');


        } else {


            $('#main-nav').removeClass('mob_fit');
        }

    });
});

</script>
<script>
( function() {

    $('#btn-search').on('click', function(e) {

          
          e.preventDefault();
          $('#search').animate({width: 'toggle'}).focus();
          q = document.getElementById('search').value;

          if(q == ''){
            //do nothing
          } else {
            $('#form-search').submit();

          }
  });

} () );


</script>


<script type="text/javascript" src="<?php echo $config->urls->templates?>js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo $config->urls->templates?>js/jquery.themepunch.revolution.js"></script>
<script type="text/javascript" src="<?php echo $config->urls->templates?>js/revolution-slider-options.js"></script>






<script>
$('.responsive').slick({

infinite: true,
speed: 300,
autoplay: true,
slidesToShow: 6,
slidesToScroll: 6,
responsive: [

    {
      breakpoint: 1720,
      settings: {
        autoplay: true,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
{
    breakpoint: 1024,
  settings: {
    autoplay: true,
      arrows: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: true
  }
},
{
    breakpoint: 600,
  settings: {
    autoplay: true,
       arrows: false,
    slidesToShow: 1,
        dots:true,
    slidesToScroll: 1
  }
},
{
    breakpoint: 426,
  settings: {
    autoplay: true,
    slidesToShow: 3,
      dots:false,
       arrows: true,
    slidesToScroll: 3
  }
}

]
});

</script>


<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o66yk');
twq('track','PageView');
gtag('config', 'AW-369351956');
</script>
<!-- End Twitter universal website tag code -->

<!-- LinkedIn tag -->
<script type="text/javascript">
_linkedin_partner_id = "3771513";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {\
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3771513&fmt=gif" />
</noscript>

</body>
</html>
