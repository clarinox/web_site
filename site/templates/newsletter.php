<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Clarinox | News</title>
    
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content="">
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

<style>

/* Arrows */
.company_pg_slide .slick-prev,
.company_pg_slide .slick-next {
    font-size: 0;
    line-height: 0;
    position: absolute;
    top: 44%; 
    display: block;
    width: 20px;
    height: 20px;
    padding: 0;
    cursor: pointer;
    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}

.company_pg_slide .slick-prev:hover,
.company_pg_slide .slick-prev:focus,
.company_pg_slide .slick-next:hover,
.company_pg_slide .slick-next:focus {
    color: transparent;
    outline: none;
    background: transparent;
}

.company_pg_slide .slick-prev:hover:before,
.company_pg_slide .slick-prev:focus:before,
.company_pg_slide .slick-next:hover:before,
.company_pg_slide .slick-next:focus:before {
    opacity: 1;
}

.company_pg_slide .slick-prev.slick-disabled:before,
.company_pg_slide .slick-next.slick-disabled:before {
    opacity: .25;
}

.company_pg_slide .slick-prev:before,
.company_pg_slide .slick-next:before {
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;
    opacity: .75;
    color: white;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.company_pg_slide .slick-prev {
    left: 10px; 
    margin-left: 0; 
}

[dir='rtl'] .company_pg_slide .slick-prev {
    right: 10px; 
    left: auto;
}

.company_pg_slide .slick-prev:before {
    content: '\f104';
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    font-size: 40px !important;
}

[dir='rtl'] .company_pg_slide .slick-prev:before {
    content: '→';
}

.company_pg_slide .slick-next {
    right: 10px; 
    margin-right: 0; 
}

[dir='rtl'] .company_pg_slide .slick-next {
    right: auto;
    left: 10px; 
}

.company_pg_slide .slick-next:before {
    content: '\f105';
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    font-size: 40px !important;
}

[dir='rtl'] .company_pg_slide .slick-next:before {
    content: '←';
}
    
</style>


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

<?php
$i = 1;
$year = $page->title;
$parent_str = "/resources/newsletters/" . $year . "/";
$newsletters = $pages->find("parent=$parent_str, sort=-created");
foreach ($newsletters as $newsletter) {
    $even = false;
    if ($i % 2 == 0) {$even = true;}
    $i++;
    if ($even) {echo "<div class='container-fluid product_det_gray'>";}
?>

<div class="container white_space">
    <div class="col-md-8 col-sm-12 col-xs-12 nopadding right-content">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color"><?php echo $newsletter->headline ?></h3>
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
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding white_space">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color"><?php echo $page->title ?></h3> 
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <?php echo $page->body ?>      
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <h3 class="page_heading  text-center   ">Past News</h3>
    </div>
    <div class="learfix">&nbsp;</div>
    <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
        <!--<div class="slider responsive">-->
   <div class="slider slider-1 responsive company_pg_slide">
       <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2023 ?>" style="color: white;">2023</a>
                </div>
            </div>

       <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2022 ?>" style="color: white;">2022</a>
                </div>
            </div>

       <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2021 ?>" style="color: white;">2021</a>
                </div>
            </div>
         <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2020 ?>" style="color: white;">2020</a>
                </div>
            </div>

            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2019 ?>" style="color: white;">2019</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2018 ?>" style="color: white;">2018</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2017 ?>" style="color: white;">2017</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2016 ?>" style="color: white;">2016</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2015 ?>" style="color: white;">2015</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2014 ?>" style="color: white;">2014</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2013 ?>" style="color: white;">2013</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2012 ?>" style="color: white;">2012</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2011 ?>" style="color: white;">2011</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2010 ?>" style="color: white;">2010</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2009 ?>" style="color: white;">2009</a>
                </div>
            </div>

        </div>
    </div>
    <div class="learfix">&nbsp;</div>
</div>

<?php include('./footer.php'); ?>
<div class="totop"><i class="fa fa-angle-up"></i> </div>




</body>
</html>
