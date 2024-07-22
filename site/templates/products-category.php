<?php
/*
    echo "<li><a href='{$page->url}'>{$page->title}</a> ";

    if($page->numChildren) {
        echo "<ul>";
        foreach($page->children as $child) {
            echo "<li><a href='$child->url'>$child->product_id: $child->product_name</a></li>";
        }
        echo "</ul>";
    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <title>Clarinox | Products</title>
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

<div class="container-fluid product_pg_ban"></div>
<div class="clearfix">&nbsp;</div>
<div class="container">
    <?php
     
    $cat_str = $page->path;
    $categories = $pages->get($cat_str);
    foreach($categories->children as $category) {
        $field_name=$category->product_name;
            ?>

        <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="product_left">
                    <div class="inner_cont">
                    <span class="icon">
                        <i class="<?php echo $category->product_name?>" aria-hidden="true"></i>
                    </span>
                        <span class="icon_text">
                        <a href="<?php echo $category->url ?>"><?php echo $category->product_name ?></a>
                    </span>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <?php 
                    $filter = "/products/" . $page->product_name . "/" . $category->product_name . ", limit=2";
                    $filter = $page->path . $category->product_name;
                    $products = $pages->get($filter);
                    foreach($products->children as $product) {
                        $field_name=$product->product_name;?>

                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                        <p class="title"><?php echo $product->product_name?></p>
                        <p class="product_det"><?php echo $product->product_desc?></p>

                        <p class="pro_read"><a href="<?php echo $product->url ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>

<?php include('./footer.php'); ?>

</body>
</html>
