
<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <?php include('./head-include.php'); ?>
    <title>Clarinox | Article - <?php echo $page->title ?></title>
    <meta charset="UTF-8">
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

<!-- Begin div for the main container --->
<div class="container"><div class="col-md-12 col-sm-12 col-xs-12">

<!-- Begin TITLE container --->        
<div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12">
    <!-- <h1 class="page_heading theme_color"><?php echo $page->title ?></h1> -->
    <h1 class="page_heading theme_color">Embedded Wi-Fi Development Best Practices</h1>
</div>
<!-- End TITLE container --->

<!-- Begin LEFT content container --->
<div class="col-md-7 col-lg-7 col-sm-7 page_cont col-xs-7">
    <?php echo $page->body ?>
    <?php $file = $page->files->first();  ?>
    <?php if ($page->files->count()) { ?>
        <p><a href='<?php echo $file->url ?>'>PDF</a></p>
    <?php } ?> 
</div>
<!-- End LEFT content container --->

<!-- Begin RIGHT content container -->

<div class="col-md-5 col-lg-5 col-sm-5 page_cont col-xs-5 " >

<!--<p class="bold theme_color" style="padding-top: 25px;padding-bottom: 25px;padding-left: 12px;"><b>Get it today!</b></p>-->

<!-- Begin Constant Contact Inline Form Code -->
<div class="ctct-inline-form" data-form-id="703fa4b0-d51a-4ad0-b7fd-fb6ca7a2bb2c"></div>
<!-- End Constant Contact Inline Form Code -->

</div>
<!-- End RIGHT content container -->

    

<!-- End div for the main container -->
</div></div>


<?php include('./footer.php'); ?>
<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "cae3507e7e296ab08bf8119fb3868d0d"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->
</body>
</html>
