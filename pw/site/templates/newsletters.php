<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Embedded Systems and Embedded Wireless News | Clarinox</title><link rel="canonical" href="https://www.clarinox.com/resources/newsletters/">

    
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content="Wireless embedded systems stacks (Wi-Fi and Bluetooth) newsletter archive">
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
<!----Slick Slider ------->
<link href="<?php echo $config->urls->templates?>slick/slick.css" rel="stylesheet">
<link href="<?php echo $config->urls->templates?>slick/slick-theme.css" rel="stylesheet">
<!---- Google Font ------->
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"><?php include('./nav.php'); ?>

<div id="bootstrap-touch-slider" class="carousel bs-slider fade  company_pg_slide control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
  <!-- Wrapper For Slides--> 
    <div class="carousel-inner" "listbox">

       <?php
        $sliders = $page->sliders;
        foreach ($sliders as $slider){
       if ($slider == $sliders->first()){
                echo "<div class='item active'>";
            } else {
                echo "<div class='item '>";
            }
        ?>role=
        <img src="<?php echo $slider->url ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
        </div>
        <?php } ?>

    </div>  <!-- End of Wrapper For Slides--> 
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
  <!--  End  bootstrap-touch-slider Slider -->


<?php
$i = 1;
$currentYear = date('Y'); 
$newsletters = $pages->find("parent=/resources/newsletters/$currentYear/, sort=-custom_published_date");
if (count($newsletters) == 0){
    $currentYear = date('Y') - 1; 
    $newsletters = $pages->find("parent=/resources/newsletters/$currentYear/, sort=-custom_published_date");    
}
foreach ($newsletters as $newsletter) {
    $even = false;
    if ($i % 2 == 0) {$even = true;}
    $i++;
    if ($even) {echo "<div class='container-fluid product_det_gray'>";}
?>

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding" id="<?php echo $newsletter->name; ?>">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color"><?php echo $newsletter->title ?></h3>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <p><?php echo $newsletter->body ?></p>
        </div>
    </div>
</div>                       

<?php if ($even) {echo "</div>";}?>
<div class="learfix">&nbsp;</div>
<?php } ?>
          
<div class="container">
    <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <h3 class="page_heading  text-center   ">Past News</h3>
    </div>
 <div class="clearfix">&nbsp;</div>
    <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
    <div class="slider slider-1 responsive">

            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2023 ?>">2023</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2022 ?>">2022</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2021 ?>">2021</a>
                </div>
            </div>

            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2020 ?>">2020</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2019 ?>">2019</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2018 ?>">2018</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2017 ?>">2017</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2016 ?>">2016</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2015 ?>">2015</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2014 ?>">2014</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2013 ?>">2013</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2012 ?>">2012</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2011 ?>">2011</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2010 ?>">2010</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2009 ?>">2009</a>
                </div>
            </div>
        </div>
    </div>
 <div class="clearfix">&nbsp;</div>
</div>
<?php include('./footer.php'); ?>
</body>
</html>
