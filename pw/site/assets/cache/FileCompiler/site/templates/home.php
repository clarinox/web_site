<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/head-include.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Embedded Bluetooth and Wi-Fi protocol stack | Clarinox</title><link rel="canonical" href=".">


<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="white" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="width">
<meta name="theme-color" content="#fff ">
<meta name="description" content="Clarinox provides innovative Bluetooth and Wi-Fi protocol stack software for embedded wireless systems">
<meta name="keywords" content="<?php echo $page->meta_keywords ?>">
<meta name="author" content="">

<!--FAVICON -->
<link rel="apple-touch-icon" sizes="180x180" href="/site/templates/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/site/templates/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/site/templates/images/favicon/favicon-16x16.png">

<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "Clarinox Technologies Pty Ltd",
  "url": "https://www.clarinox.com/",
  "foundingDate" : "2001",
  "founders": [
  {
  "@type": "Person",
  "name": "Trish Messiter"
  },
  {
  "@type": "Person",
  "name": "Gokhan Tanyeri"
  } ],
  "logo": "https://media.licdn.com/dms/image/C4D0BAQEaXgElUPRq0A/company-logo_200_200/0?e=2159024400&v=beta&t=dxRaLY5DzcHjYhCNb3cajFbWazGMWWO_nX4xt61qZZQ",
  "description": "Clarinox Technologies is a wireless embedded systems provider founded in 2001 by Trish Messiter and Gokhan Tanyeri. Clarinox has sales offices worldwide with its main head office located in Cheltenham, Melbourne, Australia.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "28/296 Bay Rd, Cheltenham",
    "addressLocality": "Melbourne",
    "addressRegion": "Victoria",
    "postalCode": "3192",
    "addressCountry": "Australia"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "(03) 9095 8088"
  }
}
 </script>

<!---- Home Page Slider---->
<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/revolution-slider-options.css" media="screen" />

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
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/body-include.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
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

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/nav.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

<!-- Revolution Slider -->
<div class="fullwidthbanner-container top-shadow">
    <div class="fullwidthbanner">
      <ul><?php
            foreach($page->sliders as $slider) {
                echo "<li data-masterspeed='100' data-slotamount='4' data-transition='fade'>
                <img alt='' src='{$slider->url}'/></li>";
            }
        ?></ul>
    </div>
</div>
<!-- Revolution Slider -->


<div class="container-fluid banner_bottom_color">
<div class="container">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">

     <a href="/pw/resources/newsletters/" target="blank"><p class="quote_txt 
	 text-center"> <?php echo $page->slogan ?></p></a>
	 
</div> 
</div>
</div>
<div class="clearfix">&nbsp;</div>

<div class="container">
  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
       <h3 class="page_heading text-center uppercase">PRODUCTS & SOLUTIONS</h3>
  </div> 
  <div class="clearfix">&nbsp;</div>
  <div class="clearfix">&nbsp;</div>           
 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
      <?php foreach($page->featured_products as $product) { ?>
          <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
              <div class="col-xs-12 service_bx">
                <a href="<?php echo $product->url ?>">
                    <div class="icon_sec">
                         <img src="<?php echo $product->images->get('product-icon.png')->url?>" class="img-responsive" height="100" width="100"></img></div>
                </a>
                  <div class="cont_sec">
                      <p class="service_head"><a href="<?php echo $product->url ?>"><?php echo $product->product_name ?></a></p>
                      <p class="service_cont"><?php echo $product->headline ?></p>
                  </div>
              </div>
          </div>
      <?php } ?>
      <div class="clearfix">&nbsp;</div>
      <a href="products" class="service_more">See More..</a>
  </div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="container-fluid clients_sec">
<div class="container">
    
   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
     <h3 class="page_heading text-center theme_white">SUPPORTED PLATFORMS</h3>

        <div class="clearfix">&nbsp;</div>

</div> 
    <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
    <div class="slider responsive">
        <?php
        foreach($page->platforms as $platform) {
	   echo "<div><a href='/pw/products/softframe/supported-platforms/'><img src='{$platform->url}' class='clogo'/></a></div>"; 
        } ?>  
    </div>  

 <div class="clearfix">&nbsp;</div>
    </div>
</div>   
</div> 


<div class="container">
<div class="clearfix">&nbsp;</div>    
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
     <h3 class="page_heading text-center theme_color uppercase">CLIENTS</h3>
</div> 

         <div class="clearfix">&nbsp;</div>

            <div class=" col-md-12 col-sm-12 col-xs-12 nopadding">
                 <div class="slider clients_grayscale responsive">

                        <?php
                        $clients = $page->company_clients;
                        foreach ($clients as $client){
                    echo "<div><img src='$client->url' class='clogos'/></div>";
                       }
                        
                        ?>
</div>
 <div class="clearfix">&nbsp;</div>
         <div class="clearfix">&nbsp;</div>
         <div class="clearfix">&nbsp;</div>

                </div>
            </div>

        </div>
    </div>


<div class="clearfix">&nbsp;</div>

<div class="container-fluid clients_sec">
 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
   <h4 class="page_heading text-center theme_white">CASE STUDIES</h4>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
 
<div class="container">
   <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="slider single-item">

 <?php
            $filter="parent=/resources/case-studies, sort=-custom_published_date, limit=6";
            $cases = $pages->find($filter);
            foreach($cases as $case) { ?>
            <div>
                <?php if(count($case->images)) {?>
                <div class="col-sm-2 col-md-2 col-xs-12">
                    <img src="<?php echo $case->images->first()->url?>" class="img-responsive" alt="img" height="200" width="200"/>
                </div>
                <div class="clearfix visible-xs">&nbsp;</div>
                <?php } ?>

                <div class="col-sm-10 col-md-10 col-xs-12">
                    
                    <p><?php echo $case->title ?></p>
                    <p><?php echo $case->summary ?></p>
                </div>

            </div>

            <?php } ?>


 <div class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 1152px;">
                                <div class="col-sm-2 col-md-2 col-xs-12">
                    <img src="/site/assets/files/1234/emergency.png" class="img-responsive" alt="img" height="200" width="200">
                </div>
                <div class="clearfix visible-xs">&nbsp;</div>
                
                <div class="col-sm-10 col-md-10 col-xs-12">
                    
                    <p>Lightening the Load for Emergency Personnel</p>
                    <p>Clarinox has a successful long standing relationship with Tait Communications for over 10 years. 
                       The flexible and modular approach of Clarinox has provided Tait with a robust and agile solution across a number of product categories. </p>
            </div>
            </div> 

       
        </div>
    </div>
</div>
</div>
</div>   

<div class="container-fluid videos_back"> 
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
        <div class="col-md-4  col-sm-4 col-xs-12">
            <div class="col-xs-12 nopadding" style="display=block">
                <div class="line"></div>

                   <p class="video_tit">Videos</p>
       
                   <iframe id="player" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture" title="YouTube video player" width="320px" height="181" src="https://www.youtube.com/embed/aEuYirsqz5Q?enablejsapi=1&amp;
                    origin=https%3A%2F%2Finternal.clarinox.com&amp;widgetid=1">
                   </iframe>
                </div>

                <div class="col-xs-11 nopadding"style="display=block">
                    <a href="/pw/resources/videos" class="read_morebtt">See more videos..</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="col-xs-12  nopadding" style="display:block"> 
                    <div class="line"></div>
                    
                      <p class="video_tit">Newsletter</p>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <li>Clarinox Strengthens Wireless Connectivity Development for IoT Devices with Support for Innovative PX5 RTOS</li>
                          <li>Deal with Component Shortages Using Abstraction Based Connectivity Solutions</li>  
                          <li> Coordinating camera crews with wireless intercom systems</li> 
                          <li>ClariFi Adds Non-Intrusive Tracing to Analyze High-Speed Events in Embedded Wi-Fi and Bluetooth Applications</li>
                      </div>

                     
               <!-- </ul>
                <ul class="newsl_hm">

                    <?php
                    $year = (int)date("Y");
                    $parent_str = "/resources/newsletters/" . $year . "/";
                    
                    
                                      
                    $filter="parent=/resources/case-studies, sort=-custom_published_date, limit=4";
                    
                    if (count($newsletters) == 0){
                        $year = date('Y') - 1; 
                        $newsletters = $pages->find("parent=/resources/newsletters/$year/, sort=-custom_published_date");    
                    }

                    foreach ($newsletters as $newsletter) {
                    ?>

                    <li><?php echo $newsletter->headline ?></li>

                    <?php } ?>

                </ul>-->

                <div class="col-xs-11  nopadding">
                   <a href="/pw/resources/newsletters" class="read_morebtt">Read More...</a>
                </div>
            </div>
        </div>

         <div class="col-md-4 col-sm-4 col-xs-12">
             <p class="video_tit">Twitter Feeds</p>
              <div class="col-xs-12 nopadding">
               We are currently in the process of updating this space, stay tuned.   
                 <!-- <?php
                  $options = array(
                      'limit' => 3,
                      'cacheSeconds' => 600, // 10 minutes
                      'showDate' => 'before',
                      'listItemDateClose' => '. </span>',
                      'screenName' => 'clarinox'
                  );
                  $t = $modules->get('MarkupTwitterFeed');
                  echo $t->render($options);
                  ?> -->

                   <div class="col-xs-12 right_line nopadding">

                   </div>
              </div>
        </div>
    </div>    
</div>
</div>

<div  class="container-fluid address_back">
<div class="container">
 <div class="clearfix">&nbsp;</div>           
 <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <?php $image = $page->images->first(); ?>
        <img src="<?php echo $image->url ?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></img>
    </div>
     <div class="col-md-6 col-sm-6 col-xs-12 social_right-top col-sm-4 col-xs-12">
         <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
         <div class="col-xs-12 nopadding">

            <p class="address_tit">Clarinox Head Office</p> 
             <p class="address">
            <i class="fa fa-map-marker theme_color" aria-hidden="true"></i> &nbsp;  28/296 Bay Road,<br/>
            Cheltenham,VIC 3192<br/>
            AUSTRALIA

             </p>
             <p class="phone">
              <i class="fa fa-phone theme_color" aria-hidden="true"></i> &nbsp;  +61 3 9016 9590<br>  
              </p>
              </div>
               
              

              <a href="https://internal.clarinox.com/pw/contact-us/enquiries/"target="blank">Contact Us</a>
              




   <div class="clearfix">&nbsp;</div>
         <div class="col-xs-12 nopadding">
            <p class="address_tit">Global Agents</p> 

             <p class="address">To be in touch with one of our regional offices,
                   please contact the Head Office and we will be more
                   than happy to redirect your enquiry to the right person.</p>

     </div>
         </div>
       

         <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
                <ul class="social-network social-circle">
                    <?php
                        $company = $pages->get("/company");

                    ?>
                    <li><a href='<?php echo $company->link_youtube; ?>' class="icoyoutube" title="youtube">
                        <i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                    <li><a href='<?php echo $company->link_twitter; ?>' class="icotwitter" title="twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href='<?php echo $company->link_linkedin; ?>' class="iconln" title="linkedin +">
                        <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href='<?php echo $company->link_facebook; ?>' class="icoFacebook" title="Facebook">
                        <i class="fa fa-facebook"></i></a></li>

                </ul>
             
         </div>
     
         <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="clearfix">&nbsp;</div>
               <img src="/pw/site/templates/images/9001_small.png" width="160" height="180" frameborder="0" style="border:0" allowfullscreen="">
         </div>

         </div>  
     </div>
 </div>
 <div class="clearfix">&nbsp;</div>
</div>
</div>
   

   
<footer>
<div class="container">

    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <p>Copyright © 2023 Clarinox Pty.Ltd., All Rights Reserved.</p>
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
width: '280x',
rel: '0',
videoId: '<?php echo substr(strrchr($pages->find("template=video, sort=-custom_published_date")->first()->link,"/"),1) ?>'
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


<script type="text/javascript" src="<?php echo $config->urls->templates?>js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo $config->urls->templates?>js/jquery.themepunch.revolution.js"></script>
<script type="text/javascript" src="<?php echo $config->urls->templates?>js/revolution-slider-options.js"></script>






<script>
$('.responsive').slick({

infinite: true,
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
        dots:true,
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

<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o66yk');
twq('track','PageView');
gtag('config', 'AW-369351956');
</script>
<!-- End Twitter universal website tag code -->

<!-- LinkedIn tag -->
<script type="text/javascript">
_linkedin_partner_id = "3771513";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {\
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3771513&fmt=gif" />
</noscript>

</body>
</html>
