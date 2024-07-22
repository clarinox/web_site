<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <title>Clarinox | Embedded Systems Partners</title><link rel="canonical" href="https://www.clarinox.com/company/partners/">

    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content="We partner with leading wireless embedded systems suppliers to better serve you. Learn more">
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
<link rel="stylesheet" href="<?php echo $config->urls->templates?>css/clx_style.css">
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

        <h1 class="page_heading theme_color">Our partners</h1>
</div>
</div>
</div>


<?php
$i = 1;
$partners = $pages->find("parent=/company/partners");
foreach ($partners as $partner) {
    if(count($partner->images)) {
        $image = $partner->images->first();
    }
    //$even = false;
    //if ($i % 2 == 0) {$even = true;}
    //$i++;
    //if ($even) {echo "<div class='container-fluid product_det_gray'>";}
	$featured = false;
	if ($partner->partner_type->title == "Featured") {$featured = true;}
	if ($featured) {echo "<div class='container featured-partner'>";}
?>

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding" id="<?php echo $partner->name; ?>">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color"><?php echo $partner->title ?></h3>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <p><?php echo $partner->summary ?></p>
            <p><?php echo $partner->body ?></p>
        </div>
        <!--
        <?php
            if($image) {
                echo "<img src='$image->url'>";
            } 
        ?>-->
		
	<?php if($partner->partner_details) { ?>
	<div>
		<a href="<?php echo $partner->url; ?>">Read More <i class="fa fa-angle-double-right"></i></a></br>
	</div>
	<?php } ?>

		
<!--
        <?php 

		if (!$featured) {

			$selected_partners = $partner->title;
			$selector = "template=video, has_parent=/resources/videos, sort=-custom_published_date";
			$selector .= ", selector_partners.title=$selected_partners";
			$videos = $pages->find($selector);


			if(count($videos)){ ?>
			
			<div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
				<h4 class="theme_color">Related Videos</h4>
				<p><ul>
				<?php foreach ($videos as $video) { ?>
					<li><a href="<?php echo $video->url; ?>"><?php echo $video->headline; ?></a></li>
				<?php } ?>   
				</ul></p>
			</div>
			<?php } ?>
        <?php } ?>    
-->
    </div>
</div>

<?php if ($featured) {echo "</div>";}?>

<div class="clearfix">&nbsp;</div>

<?php } ?>

<?php include('./footer.php'); ?>

</body>
</html>
