<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./head-include.php'); ?>
    <title>Clarinox | News</title>
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
$newsletters = $pages->find("parent=/resources/newsletters/2018/, sort=-created");
foreach ($newsletters as $newsletter) {
    $even = false;
    if ($i % 2 == 0) {$even = true;}
    $i++;
    if ($even) {echo "<div class='container-fluid product_det_gray'>";}
?>

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
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

<!--

<div class="container-fluid product_det_gray">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
            <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                <h3 class="page_heading theme_color">Pushing Scan Warning</h3>
            </div>
            <p>-- February 2016 --</p>
            <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</div>
<div class="learfix">&nbsp;</div>

<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color    ">ClarinoxBlue,the most comprehensive Bluetooth stack solution in the embedded market.</h3>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>
<div class="learfix">&nbsp;</div>
-->


<div class="container">
    <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <h3 class="page_heading  text-center   ">Past News</h3>
    </div>
    <div class="learfix">&nbsp;</div>
    <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="slider responsive">
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2018 ?>">2018</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2017 ?>">2017</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2016 ?>">2016</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2015 ?>">2015</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2014 ?>">2014</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2013 ?>">2013</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2012 ?>">2012</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2011 ?>">2011</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2010 ?>">2010</a>
                </div>
            </div>
            <div>
                <div class="news_year">
                    <a href="<?php echo $config->urls->root . 'resources/newsletters/' . 2009 ?>">2009</a>
                </div>
            </div>
        </div>
    </div>
    <div class="learfix">&nbsp;</div>
</div>

<?php include('./footer.php'); ?>

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
