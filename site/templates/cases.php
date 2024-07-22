<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
     
    <?php include('./head-include.php'); ?>
    <title>Embedded Systems and Embedded Wireless Case Studies | Clarinox</title><link rel="canonical" href="/resources/case-studies/">

    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content="Read our case studies about wireless embedded systems stacks (Wi-Fi and Bluetooth)">
    <meta name="keywords" content="">
    <meta name="author" content="">

<!--FAVICON -->
<link rel="apple-touch-icon" sizes="180x180" href="/site/templates/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/site/templates/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/site/templates/images/favicon/favicon-16x16.png">


</head>
<body>
    
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



<div class="container white_space">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding page_heading theme_color">
       <h1 class="page_heading theme_color">Embedded Wireless Case Studies</h1>
    </div>
</div>

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding" id="<?php echo $article->name; ?>">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color">Table of contents</h3>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                   <!-- <?php
                        $toc_articles = $pages->find("parent=/resources/case-studies/, sort=-custom_published_date");
                        echo "<p>";
                        echo "<ul>";
                        foreach ($toc_articles as $toc) {
                            echo "<p><b><li>" . $toc->title . "</li></b></p>";
                         
                        }
                        echo "</ul>";
                        echo "</p>";
                    ?> -->

<ul>

<li><b>
<a href="/resources/case-studies/wireless-haptic-vest-creates-immersive-experiences-for-virtual-reality/" style="color: #000000">Wireless Haptic Vest Creates Immersive Experiences for Virtual Reality</a>
</b></li>


<li><b>
<a href="/resources/case-studies/smart-solutions-for-smart-tools/" style="color: #000000">Smart Solutions for Smart Tools</a>
</b></li>

<li><b>
<a href="/resources/case-studies/a-match-made-in-healthcare/" style="color: #000000">A Match Made in Healthcare</a>
</b></li>

<li><b>
<a href="/resources/case-studies/bluetooth-and-wi-fi-connectivity-solutions-for-franking-machines/" style="color: #000000">Bluetooth and Wi-Fi connectivity solutions for franking machines</a>
</b></li>

<li><b>
<a href="/resources/case-studies/coordinating-camera-crews-with-wireless-intercom-systems/" style="color: #000000">Coordinating camera crews with wireless intercom systems</a>
</b></li>

<li><b>
<a href="/resources/case-studies/bringing-wireless-connectivity-to-radio-communications/" style="color: #000000">Bringing wireless connectivity to radio communications</a>
</b></li>

<li><b>
<a href="/resources/case-studies/fishing-for-a-smarter-solution/" style="color: #000000">Fishing for a smarter solution</a>
</b></li>

<li><b>
<a href="/resources/case-studies/exploring-new-product-developments/" style="color: #000000">Exploring new product developments</a>
</b></li>

<li><b>
<a href="/resources/case-studies/next-generation-in-vehicle-infotainment-ivi/" style="color: #000000">Next Generation In-Vehicle Infotainment (IVI)</a>
</b></li>

<li><b>
<a href="/resources/case-studies/a-revolution-in-collaboration-solutions/" style="color: #000000">A Revolution in Collaboration Solutions</a>
</b></li>

<li><b>
<a href="/resources/case-studies/short-range-connectivity-for-satellite-navigation/" style="color: #000000">Short Range Connectivity for Satellite Navigation</a>
</b></li>

<li><b>
<a href="/resources/case-studies/helping-with-hearing-impairment/" style="color: #000000">Helping with Hearing Impairment</a>
</b></li>

<li><b>
<a href="/resources/case-studies/audio-guidance-system-for-vision-impaired/" style="color: #000000">Audio Guidance System for Vision Impaired</a>
</b></li>

<li><b>
<a href="/resources/case-studies/rfid-improves-the-manufacturing-of-automotive-vehicles/" style="color: #000000">RFID Improves the Manufacturing of Automotive Vehicles</a>
</b></li>

<li><b>
<a href="/resources/case-studies/lightening-the-load-for-emergency-personnel/" style="color: #000000">Lightening the Load for Emergency Personnel</a>
</b></li>

<li><b>
<a href="/resources/case-studies/assisting-to-develop-modern-in-vehicle-infotainment-systems/" style="color: #000000">Assisting to Develop Modern In Vehicle Infotainment Systems</a>
</b></li>

<li><b>
<a href="/resources/case-studies/helping-keep-track-of-explosives/" style="color: #000000">Helping Keep Track of Explosives</a>
</b></li>

</ul>

</div>
</div>
</div>
        
<?php
$i = 1;
$articles = $pages->find("parent=/resources/case-studies/, sort=-custom_published_date");
foreach ($articles as $article) {
    $even = false;
    if ($i % 2 == 0) {$even = true;}
    $i++;
    if ($even) {echo "<div class='container-fluid product_det_gray'>";}
?>




<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding" id="<?php echo $article->name; ?>">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color"><?php echo $article->title ?></h3>
        </div> 
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <p><?php echo $article->body ?></p>
        </div>


        <!--
        <?php if(count($article->images)) { ?>
        <div class="row">
        <?php foreach ($article->images as $image) { ?>
            <div class="col-md-3">
                <div class="clx-thumbnail">
                    <img src="<?php echo $image->url ?>" style="width:100%">
                    <div>
                        <p><?php echo $image->description ?></p>
                    </div>
                </div>    
            </div>    
        <?php } ?>
        </div>
        <?php } ?>
        -->
    </div>
</div>

<?php if ($even) {echo "</div>";}?>

<div class="learfix">&nbsp;</div>

<?php } ?>

<?php include('./footer.php'); ?>

</body>
</html>
