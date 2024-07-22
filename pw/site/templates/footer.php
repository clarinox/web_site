<?php ?>

<div class="clearfix">&nbsp;</div>
<div class="container-fluid address_back page_foot">
    <div class="container">
        <div class="col-md-3 page_footer col-sm-3 col-xs-12"> 
          
            <p class="title">Clarinox Head Office</p> 
            <p class="address">
            <i class="fa fa-map-marker theme_color" aria-hidden="true"></i> &nbsp;  28/296 Bay Road,<br/>
            Cheltenham,VIC 3192<br/>
            AUSTRALIA
            </p>          
            <p class="phone">
            <i class="fa fa-phone theme_color" aria-hidden="true"></i> &nbsp;  +61 3 9016 9590<br>  
            </p>
            
        </div>
        <div class="col-md-4  page_footer col-sm-4 col-xs-12">
            <p class="title">Global Agents</p>
            <p class="cont" >To be in touch with one of our regional offices, please contact the Head Office and we will be
                more than happy to redirect your enquiry to the right person.</p>
        </div>
        <div class="col-md-2 page_footer col-sm-2 col-xs-12 text-center">
        <a  href="https://internal.clarinox.com/pw/company/quality/"><img class="iso_logo" src="<?php echo $config->urls->templates?>images/9001_small.png" /></a>      
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 social_right-top ">
            <div class="social_icon">
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
        </div>
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
$('.slider-1').slick({
      infinite: true,
        speed: 300,
        autoplay: false,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    autoplay: false,
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
                    autoplay: false,
                    arrows: false,
                    slidesToShow: 4,

                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    autoplay: false,
                    slidesToShow: 2,
                    dots:true,
                    arrows: false,
                    slidesToScroll: 1
                }
            }

        ]

});

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

