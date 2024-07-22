<?php ?>

<div class="clearfix">&nbsp;</div>
<div class="container-fluid address_back page_foot">
    <div class="container">
        <div class="clearfix">&nbsp;</div>
        <h4 class="page_heading text-center uppercase" style="font-size: 30px;">CONTACT</h4>
        <div class="clearfix">&nbsp;</div>

     <div class="col-md-6 col-sm-6 col-xs-12 social_right-top">
    <div class="col-md-4 col-sm-4 col-xs-6 adds-ind  page_footer"> 
        <div class="office-info">
            <p><strong>Clarinox Head Office</strong></p> 
            <p>28/296 Bay Road<br> Cheltenham, VIC 3192<br>Australia<br></p>
            <p>+61 3 9016 9590</p>  
        </div>
    </div>      

    <div class="col-md-4 col-sm-4 col-xs-6 adds-ind  page_footer"> 
        <div class="office-info">
            <p><strong>Clarinox India Office</strong></p> 
            <p>#103, AB Block, Second Avenue,<br>Anna Nagar,<br>Chennai-600 040,<br>Tamil Nadu, India</p>
        </div>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-6 adds-tur page_footer"> 
        <div class="office-info">
                <p><strong>Clarinox T&uuml;rkiye Office</strong></p> 
                <p>Zafer SB Mah. Nil&uuml;fer SK.<br/>No: 32 Office: 207<br/>Gaziemir, Izmir, 35410<br/>T&uuml;rkiye</p>  
        </div>
    </div>
</div>


<div class="iteamactive">
    <div class="col-md-3 col-sm-3 col-xs-12 social_right-top " style="bottom: -113px; left: 460px; ">
        <ul class="social-network ">

    <li><a href='<?php echo $company->link_linkedin; ?>' title="linkedin +">
    <img class="social-icon" src="/site/templates/images/socialnetworkicons/LinkedIn.png"></a></li>

    <li><a href='<?php echo $company->link_twitter; ?>' title="twitter">
    <img class="social-icon" src="/site/templates/images/socialnetworkicons/X.png"></a></li>

    <li><a href='<?php echo $company->link_youtube; ?>' title="youtube">
    <img class="social-icon" src="/site/templates/images/socialnetworkicons/YouTube.png"></a></li>

        </ul>
    </div>
</div>


<div class="mobileactive">
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
     <div class="col-md-4 col-sm-5 col-xs-12 col-lg-3 nopadding social" >

        <ul class="social-network ">
            <?php
                $company = $pages->get("/company");
            ?>

    <li><a href='<?php echo $company->link_linkedin; ?>' title="linkedin +">
    <img class="social-icon" src="/site/templates/images/socialnetworkicons/LinkedIn.png"></a></li>

    <li><a href='<?php echo $company->link_twitter; ?>' title="twitter">
    <img class="social-icon" src="/site/templates/images/socialnetworkicons/X.png"></a></li>

    <li><a href='<?php echo $company->link_youtube; ?>' title="youtube">
    <img class="social-icon" src="/site/templates/images/socialnetworkicons/YouTube.png"></a></li>

        </ul>
    </div>
  </div>

    </div>
</div>



<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-9 col-xs-8">
                <p class="left-texts foot-font">&copy; 2001-2024 CLARINOX TECHNOLOGIES PTY LTD., ALL RIGHTS RESERVED.</p>
            </div>
            <div class="col-md-6 col-sm-3 col-xs-4">
            <p class="right-texts foot-font">
             <a href="/company/quality/" style="color: white;">ISO9001 CERTIFIED COMPANY</a>
            </p>
            </div> 
        </div>
    </div> 
</footer>

<!--<div class="totop"><i class="fa fa-angle-up"></i> </div> -->

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

