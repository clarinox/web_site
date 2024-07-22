<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/head-include.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
    <title>Embedded Systems and Embedded Wireless Articles | Clarinox</title><link rel="canonical" href="https://www.clarinox.com/resources/articles/">

    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content="Articles about wireless embedded systems stacks (Wi-Fi and Bluetooth)">
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
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">

      <h1 class="page_heading theme_color">Embedded Wireless Articles</h1>

</div>
</div>
</div>


<div class="container">
<h1 class="page_heading theme_color" id="For Manager,"></h1>
</div>

<?php
$i = 2;
$articles = $pages->find("parent=/resources/articles/managers, sort=-custom_published_date");
foreach ($articles as $article) {
    $file = $article->files->first();
    $even = false;
    if ($i % 2 == 0) {$even = true;}
    $i++;
    if ($even) {echo "<div class='container-fluid product_det_gray'>";}
?>

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding" id="<?php echo $article->name; ?>">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <?php if($article->title == "The True Cost of Free Bluetooth") { ?>
                <h3 class="page_heading theme_color">Bluetooth Development Made Easier</h3>
            <?php } else { ?>
                <h3 class="page_heading theme_color"><?php echo $article->title ?></h3>
            <?php } ?>
        </div>
         <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <p><?php echo $article->summary ?></p>
            <?php if($article->files->count()) { ?>
                <a href='<?php echo $file->url ?>'>PDF</a>
            <?php } ?>
        </div>
    </div>
</div>

<?php if ($even) {echo "</div>";}?>

<div class="learfix">&nbsp;</div>

<?php } ?>

<div class=".">
<h2 class="page_heading theme_color" id="For-Engineers"></h2>
</div>

<?php
$i = 1;
$articles = $pages->find("parent=/resources/articles/engineers, sort=-custom_published_date");
foreach ($articles as $article) {
    $file = $article->files->first();
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
            <p><?php echo $article->summary ?></p>
            <?php if($article->files->count()) { ?>
                <a href='<?php echo $file->url ?>'>PDF</a>
            <?php } ?>
        </div>
    </div>
</div>

<?php if ($even) {echo "</div>";}?>

<div class="learfix">&nbsp;</div>

<?php } ?>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/footer.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

</body>
</html>
