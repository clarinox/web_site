<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <title>Clarinox | an embedded wireless protocol stack software company</title><link rel="canonical" href="https://www.clarinox.com/company/">

    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="theme-color" content="#fff ">
   <meta name="description" content="Clarinox provides innovative Bluetooth and Wi-Fi protocol stack software to businesses developing embedded wireless systems">

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
    </div>
    <!-- End of Wrapper For Slides -->

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
<h1 class="page_heading theme_color">About Clarinox</h1>
</div>
</div>
</div>



<div class="clearfix">&nbsp;</div>
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                   Overview
                </span>
                </div>
            </div>
        </div>
        <?php $overview = $pages->get('/company/overview/'); ?>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="product_cont_bx">
                    <p class="product_det"><?php echo $page->company_overview ?></p>
                    <p class="pro_read"><a href="<?php echo $overview->url ?>">Read More <i class="fa fa-angle-double-right" ></i></a></p>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                   Alliances
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
                   <div class="product_cont_bx">
             <div class="slider company_grayscale responsive">
         
                      <?php
                       $alliances = $page->company_alliances;
                          foreach ($alliances as $alliance){
                        echo "<div><img src='$alliance->url' class='clogo'/></div>";
                          } 
                         ?>
             </div>
                </div>
            </div>

        </div>
    </div>


    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                    Clients
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
              <div class="product_cont_bx">
                  <div class="slider company_grayscale responsive">
<!--<div class="slider slider-1 responsive">
 <div class="slider responsive">-->

 

                        <?php
                        $clients = $page->company_clients;
                        foreach ($clients as $client){
                    echo "<div><img src='$client->url' class='clogo'/></div>";
                       }
                        
                        ?>
                    </div> 
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding product_list">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="product_left company_left">
                <div class="inner_cont">
                <span class="icon_text">
                   Awards
                </span>
                </div>
            </div>
        </div>
        <?php $awards = $pages->get('/company/awards/'); ?>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
                <div class="product_cont_bx">
                    <p class="product_det"><?php echo $page->company_awards ?></p>
                    <p class="pro_read"><a href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
                    <p class="pro_read"><a href="<?php echo $awards->url ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

                </div>
            </div>

        </div>
    </div>

</div>

<?php include('./footer.php'); ?>

<script src="<?php echo $config->urls->templates?>js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/modernizr.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/totop.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/bootstrap-touch-slider.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://www.youtube.com/player_api"></script>
<script type="text/javascript" src="<?php echo $config->urls->templates?>js/stellarnav.js"></script>
<!--
<script type="text/javascript">
    jQuery(document).ready(function($) {
        jQuery('.stellarnav').stellarNav({
            theme: 'dark'
        });
    });
</script> -->

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
          q = document.getElementById('search').value;

          if(q == ''){
            //do nothing
          } else {
            $('#form-search').submit();

          }
  });

} () );


</script>


<script>
    $('.responsive').slick({

        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    autoplay: true,
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    autoplay: true,
                    arrows: false,
                    slidesToShow: 2,

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
                    slidesToScroll: 2
                }
            }

        ]
    });
</script> 

</body>
</html>