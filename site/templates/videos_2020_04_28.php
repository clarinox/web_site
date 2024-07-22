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
    <title>Clarinox | Videos</title>
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
    <style>
        .bottom_blue
        {
            border-bottom:4px solid #005599 !important;
        }

    </style>
    <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/bootstrap-select.css">
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

<?php 

$latest = $pages->find("template=video, parent=$page, sort=-custom_published_date")->first;

?>

<div class="container-fluid nopadding banner_video" 
    id="<?php echo $latest->name; ?>">
    <div class="container">
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
        <div class="col-sm-3 col-sm-3 col-xs-12">
            <p class="category_title">Videos category <?php echo $out ?></p>
        </div>
        <form>
            <div class="col-sm-3 col-sm-3 col-xs-12">
                <p class="cat_set">
                    <span class="left">
                   Partners
                    </span>
                    <span class="right">
                    <?php echo renderSelect($pages->find("template=partner, has_parent=/company/partners, sort=title"), "select_partners", $input->get->select_partners); ?>
                    </span>
                </p>
            </div>
            
            <div class="col-sm-3 col-sm-3 col-xs-12">
                <p class="cat_set">
                    <span class="left">
                  Products
                    </span>
                    <span class="right">
                     <?php echo renderSelect($pages->find("template=product, has_parent=/products"), "select_products", $input->get->select_products); ?>
                    </span>
                </p>
            </div>
            <div class="col-sm-3 col-sm-3 col-xs-12"> <p class="cat_set"><input type="submit" name="video_search"value="Submit"></p></input></div>
        </form>    
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

<?php include('./footer.php'); ?>

<script src="<?php echo $config->urls->templates?>js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/modernizr.min.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/totop.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>js/bootstrap-touch-slider.js" type="text/javascript"></script>
<script src="<?php echo $config->urls->templates?>slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://www.youtube.com/player_api"></script>
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
          q = document.getElementById('search').value;

          if(q == ''){
            //do nothing
          } else {
            $('#form-search').submit();

          }
  });

} () );


</script>


<script src="js/bootstrap-select.min.js" type="text/javascript"></script>

<script>
    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });

</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-819076-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
