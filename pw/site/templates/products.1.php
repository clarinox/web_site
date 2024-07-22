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

<div class="container-fluid product_pg_ban"></div>
<div class="clearfix">&nbsp;</div>
<div class="container">
    <!--
    foreach($products->children as $category) {
                echo $category->product_name . "<br />";
                foreach($category->children as $product){
                    echo "-" . $product->product_name . "<br />";
                }
            }
    -->
    <?php $products = $pages->get("/products/");
    foreach($products->children as $product) {
        //$field_name=$category->product_id . "_featured_products";
        //echo $field_name;
        //if ($products->get($field_name)->count > 0) {
            ?>

        <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="product_left">
                    <div class="inner_cont">
                    <span class="icon">
                        <i class="<?php echo $product->product_icon?>" aria-hidden="true"></i>
                    </span>
                        <span class="icon_text">
                        <?php echo $product->product_name ?>
                    </span>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <?php
                $filter = "parent=/products/" . $product->title;
                $children = $pages->find($filter);
                foreach($children as $child) {
                ?>
                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                        <p class="title"><?php echo $child->product_name?></p>
                        <p class="product_det"><?php echo $child->product_desc?></p>

                        <p class="pro_read"><a href="<?php echo $child->url ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>
                <?php } ?>
                
                <!--                
                <div class=" col-md-6 col-sm-6 col-xs-12 pro_mob_pad">
                    <div class="product_cont_bx">
                        <p class="title">Clarinox Wifi</p>
                        <p class="product_det">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                        </p>

                        <p class="pro_read"><a href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    </div>
                </div>-->
            </div>
        </div>
    <?php } ?>

</div>



<div class="learfix">&nbsp;</div>
<div class="container-fluid address_back page_foot">
    <div class="container">
        <div class="col-md-4 page_footer col-sm-4 col-xs-12">
            <p class="title">Clarinox Head Office</p>
            <p class="cont">28/296 Bay Road, Cheltenhem,VIC 3192AUSTRALIA</p>
        </div>
        <div class="col-md-4  page_footer col-sm-4 col-xs-12">
            <p class="title">Global Agents</p>
            <p class="cont" >To be in touch with one of our regional offices, please contact the Head Office and we will be
                more than happy to redirect your enquiry to the right person.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 social_right-top ">
            <div class="social_icon">
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoyoutube" title="youtube"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="icotumb" title="tumbler"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="iconln" title="linkedin +"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">

        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
            <p>Copyright © 2017 Clarinox Pty.Ltd., All Rights Reserved.</p>
        </div>
    </div>
</footer>

<div class="totop"><i class="fa fa-angle-up"></i> </div>


<script src="<?php echo $config->urls->templates?>js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/modernizr.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/totop.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/bootstrap-touch-slider.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://www.youtube.com/player_api"></script>
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
            width: '280px',
            videoId: 'l6bP2-vpYjc'
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

        });

    } () );


</script>


</body>
</html>
