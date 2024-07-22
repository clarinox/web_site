

<?php 

function renderSelect($items, $selectorId, $selected){
    $out = "<select name='" . $selectorId . "'>";
    $out .= "<option value='Any' ";
    if ($selected == 'Any') {
        $out .= "selected='selected' ";
    }
    $out .= ">Any</option>"; 

    $count = count($items);

    if ($count) {
        foreach ($items as $item) {
            $out .= "<option value='" . $item->title . "' ";
            //if ($input->get->select_partners == $item->title) {
            if ($selected == $item->title) {
                $out .= "selected='selected' ";
            }
            $out .= ">" . $item->title . "</option>"; 
        }
    } 
    $out .= "</select>";
    return $out;
}

?>

<?php 

$selector = "template=video, has_parent=/resources/videos, sort=-custom_published_date";

if($input->get->video_search){
    $selected_partners = $input->get->select_partners;
    $selected_products = $input->get->select_products;

    if ($selected_partners !== "Any") {
        $selector .= ", selector_partners=$selected_partners";
    }
    if ($selected_products !== "Any") {
        $selector .= ", selector_products.title*=$selected_products";
    }
}
$videos = $pages->find($selector);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./head-include.php'); ?>
    <title>Embedded Systems and Embedded Wireless Videos | Clarinox</title><link rel="canonical" href="/resources/videos/">

    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
    <meta name="description" content="Watch demos of our wireless embedded systems stacks (Wi-Fi and Bluetooth) and more">
    <meta name="keywords" content="">
    <meta name="author" content="">

<!--FAVICON -->
<link rel="apple-touch-icon" sizes="180x180" href="/site/templates/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/site/templates/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/site/templates/images/favicon/favicon-16x16.png">

    <style>
        .bottom_blue
        {
            border-bottom:4px solid #005599 !important;
        }

    </style>
    <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/bootstrap-select.css">

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

<?php 

$latest = $pages->find("template=video, parent=$page, sort=-custom_published_date")->first;

?>


<div class="container-fluid nopadding banner_video" 
    id="<?php echo $latest->name; ?>">
    <div class="container white_spacing">
        <div class="vid_ban_inner">
            <iframe width="100%" height="300" 
                src="<?php echo str_ireplace("/v/","/embed/", $latest->link); ?>?showinfo=0"
                    frameborder="0" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>

<div class="container-fluid videos_filter_sec">
    <div class="container">
        <div class="col-sm-3 col-xs-12">
            <p class="category_title">Videos category <?php echo $out ?></p>
        </div>
        <form>
            <div class="col-sm-3 col-xs-12">
                <p class="cat_set">
                    <span class="left">
                   Partners

                    <?php 
                         $partners_items_with_videos = array(); 
                        $partners_items = $pages->find("template=partner, has_parent=/company/partners, sort=title");
                        foreach ($partners_items as $item) {
                            $temp_selector = "template=video, has_parent=/resources/videos, sort=-custom_published_date";
                            $temp_selector .= ", selector_partners=$item";
                            $partners_videos = $pages->find($temp_selector);
                            if ($partners_videos.count > 0) {
                                $partners_items_with_videos[] = $item; 
                            }
                        }
                        
                    ?>
                    <?php echo renderSelect($partners_items_with_videos, "select_partners", $input->get->select_partners); ?>
                    </span>
                </p>
            </div>
            
            <div class="col-sm-4 col-xs-12">
                <p class="cat_set">
                    <span class="left">
					 Products
                     <?php echo renderSelect($pages->find("template=product, has_parent=/products"), "select_products", $input->get->select_products); ?>
                    </span>
                </p>
            </div>
            <div class="col-sm-2 col-xs-12"> <p class="cat_set"><input type="submit" name="video_search"value="Submit"></p></input></div>
        </form>    
    </div>
</div>

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">

        <h1 class="page_heading theme_color">Embedded Wireless Videos</h1>
</div>
</div>
</div>


<div class="clearfix">&nbsp;</div>
<div class="container">

    <?php foreach ($videos as $video) { ?>

    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list" id="<?php echo $video->name; ?>">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left video_page_bx company_left">
                <div class="vid_frame">
                    <iframe width="100%" height="150" src="<?php echo str_ireplace("/v/","/embed/",$video->link); ?>?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 video_page_bx col-xs-12 nopadding">
                <div class="product_cont_bx">
                    <p class="product_det"><?php echo $video->body ?></p>

                    <p class="pro_read"><a href="<?php echo $video->url ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                </div>
            </div>

        </div>
    </div>

    <?php } ?>
</div>

<div class="clearfix">&nbsp;</div>


<?php include('./footer.php'); ?>

</body>
</html>
