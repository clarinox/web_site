<?php
/*
$products = $pages->get("/products/");
echo "<li><a href='$products->url'>$products->title</a><ul>";
foreach ($products->children as $category) {
    echo "<li><a href='$category->url'>$category->product_name</a></li><ul>";
    foreach ($category->children as $product){
        echo "<li><a href='$product->url'>$product->product_name</a></li>";
    }
    echo "</ul></li>";
}
echo "</ul></li>";
*/
?>

<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blank</title>
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

<?php echo "test" ?>

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
echo hash_hmac('ripemd160', 'The quick brown fox jumped over the lazy dog.', 'secret');
?>

<?php

echo 'Curl: ', function_exists('curl_version') ? 'Enabled' . "\xA" : 'Disabled' . "\xA";

$options = array(
    'limit' => 3,
    'cacheSeconds' => 600, // 10 minutes
    'showDate' => 'before',
    'screenName' => 'clarinox'
);
$t = $modules->get('MarkupTwitterFeed');
echo $t->render($options);
?>

<div class="clearfix">&nbsp;</div>
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
            <p>Copyright © 2024 Clarinox Pty.Ltd., All Rights Reserved.</p>
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



<script>
    $('.responsive').slick({

        infinite: false,
        speed: 300,
        autoplay: true,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    autoplay: true,
                    arrows: false,
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    autoplay: true,
                    arrows: false,
                    slidesToShow: 4,

                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    autoplay: true,
                    slidesToShow: 2,
                    dots:true,
                    arrows: false,
                    slidesToScroll: 1
                }
            }

        ]
    });
</script>
</body>
</html>

