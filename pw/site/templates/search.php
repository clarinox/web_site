<?php

/**
 * Search template
 *
 */

$out = '';

if($q = $sanitizer->selectorValue($input->get->q)) {

	// Send our sanitized query 'q' variable to the whitelist where it will be
	// picked up and echoed in the search box by the head.inc file.
	$input->whitelist('q', $q); 

	// Search the title, body and sidebar fields for our query text.
	// Limit the results to 50 pages. 
	// Exclude results that use the 'admin' template. 
	$matches = $pages->find("title|body|sidebar~=$q, template=product|video|article|newsletter|case, sort=-custom_published_date, limit=50"); 

	$count = count($matches); 

	if($count) {
		
        /*
        $out .= "<h2>Found $count pages matching your query:</h2>" . 
			"<ul class='nav'>";

		foreach($matches as $m) {
			$out .= "<li><p><a href='{$m->url}'>{$m->title}</a><br />{$m->headline}</p></li>";
		}

		$out .= "</ul>";*/
        $out = "Found $count pages matching your query.";

	} else {
		$out .= "Sorry, no results were found.";
	}
} else {
	$out .= "Please enter a search term in the search box (upper right corner)";
}

// Note that we stored our output in $out before printing it because we wanted to execute
// the search before including the header template. This is because the header template 
// displays the current search query in the search box (via the $input->whitelist) and 
// we wanted to make sure we had that setup before including the header template. 

//include("./head.inc"); 

//echo $out; 

//include("./foot.inc"); 

?>

<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <title>Clarinox | Search Results</title>
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
    
<!-- Google tag (gtag.js) - Google Ads: N3JNV03H0B -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N3JNV03H0B"></script> 
<script> 
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date());

  gtag('config', 'G-N3JNV03H0B'); 
</script>

    <!----- Nav Bottom line css  --->
    <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/nav_style.css" >
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

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h2 class="page_heading theme_color"><?php echo $out ?></h2> 
        </div>
        <?php if($count) { 
            $products = $matches->find("template=product");
            $videos = $matches->find("template=video");
            $articles = $matches->find("template=article");
            $newsletters = $matches->find("template=newsletter");
            $cases = $matches->find("template=case"); ?>

            <!-- Products -->
            <?php if(count($products)) { ?>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <h3 class="page_heading theme_color">Products ( <?php echo count($products) ?> results )</h3> 
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <ul class="nav">
                        <?php foreach($products as $item) { ?>
                            <li><p><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a><br /><?php echo $item->headline ?></p></li>
                        <?php } ?>
                    </ul>      
                </div>
            <?php } ?>

            <!-- Videos -->
            <?php if(count($videos)) { ?>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <h3 class="page_heading theme_color">Videos ( <?php echo count($videos) ?> results )</h3> 
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <ul class="nav">
                        <?php foreach($videos as $item) { ?>
                            <li><p><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a><br /><?php echo $item->headline ?></p></li>
                        <?php } ?>
                    </ul>      
                </div>
            <?php } ?>

            <!-- Case studies -->
            <?php if(count($cases)) { ?>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <h3 class="page_heading theme_color">Case Studies ( <?php echo count($cases) ?> results )</h3> 
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <ul class="nav">
                        <?php foreach($cases as $item) { ?>
                            <li><p><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a><br /><?php echo $item->summary ?></p></li>
                        <?php } ?>
                    </ul>      
                </div>
            <?php } ?>

            <!-- Newsletters -->
            <?php if(count($newsletters)) { ?>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <h3 class="page_heading theme_color">Newsletters ( <?php echo count($newsletters) ?> results )</h3> 
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <ul class="nav">
                        <?php foreach($newsletters as $item) { ?>
                            <li><p><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a><br /><?php echo $item->headline ?></p></li>
                        <?php } ?>
                    </ul>      
                </div>
            <?php } ?>

            <!-- Articles -->
            <?php if(count($articles)) { ?>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <h3 class="page_heading theme_color">Articles ( <?php echo count($articles) ?> results )</h3> 
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                    <ul class="nav">
                        <?php foreach($articles as $item) { ?>
                            <li><p><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a><br /><?php echo $item->headline ?></p></li>
                        <?php } ?>
                    </ul>      
                </div>
            <?php } ?>


        <?php } ?>
    </div>
</div>

<?php include('./footer.php'); ?>

</body>
</html>
