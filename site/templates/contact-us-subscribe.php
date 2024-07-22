<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clarinox | contact Us</title>
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

    <!----- Nav Bottom line css  --->
    <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/nav_style.css" >
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

<!-- https://processwire.com/talk/topic/14206-contact-form-tutorial/ -->

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
        <div class="contact_form_bx">
            <div class="inner">
                <!--
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
                    <ul class="contact_tabs">
                        <li class="active"><a href="#">Enquiries</a></li>
                        <li><a href="#">NewsLetter</a></li>
                        <li><a href="#">Unsubscribe</a></li>
                    </ul>
                </div>
            -->
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
                    <div class="form_content">
                        <div class="col-md-12 col-sm-12 col-xs-12  nopadding">
                            <p class="form_title">Newsletter Subscribe</p>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="col-md-12 col-sm-12 col-xs-12  nopadding">


                            <?php
                                if($input->post->first_name){
                                    $first_name = $sanitizer->text($input->post->first_name);
                                    $last_name = $sanitizer->text($input->post->last_name);
                                    $company_name = $sanitizer->text($input->post->company_name);
                                    $email = $sanitizer->email($input->post->email);
                                    $comments = $sanitizer->textarea($input->post->comments);
                                    $emailContent = "
                                          <html>
                                              <body>
                                                  <p><b>First Name:</b> {$first_name}</p>
                                                  <p><b>Last Name:</b> {$last_name}</p>
                                                  <p><b>Email:</b> {$email}</p>
                                                  <p><b>Comments:</b></p>
                                                  <p>{$comments}</p>
                                              </body>
                                          </html>
                                    ";
                                    $mail = wireMail();
                                    $to = ['brooke.ashleigh@clarinox.com','sony.nugrahanto@clarinox.com'];    
                                    $mail->to($to)->from('web@clarinox.com');
                                    $mail->subject('Web Enquiry');
                                    $mail->bodyHTML($emailContent);
                                    if ($mail->send()){
                                        $session->flashMessage = 'Thank you for your message! We will get in touch with you shortly.';
                                         $session->sent = true;
                                    } else {
                                        //echo "test123";
                                        $session->flashMessage = 'Error sending email';
                                    }
                                } else {
                                        $session->remove('flashMessage');
    //reset 'sent' variable for future submit
    $session->sent = false;
                                }

                            ?>

                            <?php if($session->flashMessage):?>
            <div class="alert <?=!$session->sent  ? 'alert-danger' : 'alert-success'?>" role="alert">
              <?php echo $session->flashMessage;?>﻿
            </div>
            <?php endif;?>﻿﻿


                          <form id="contact-form" name="contact-form" accept-charset="UNKNOWN" enctype="application/x-www-form-urlencoded" method="post" action="http://intranet.clarinox.com/clarinox-news/pw_subscribe.jsp">
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name">First Name</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="First Name" class="form-control" type="name" name="requiredfirstname" placeholder="First Name " required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="Last Name">Last Name</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Last Name" class="form-control" type="name" name="requiredlastname" placeholder="Last Name " required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="Email">Email</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Email" class="form-control" type="email" name="requiredemail" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name">Company Name</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Company Name" class="form-control" type="text" name="requiredcoy_name" placeholder="Company Name " required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name">Phone Number</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Company Name" class="form-control" type="text" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name">Industry</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Industry" class="form-control" type="text" name="requiredindustry" placeholder="Industry" required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name"></label>
                                    <div class="col-sm-9 col-xs-12">
                                        <button type="submit" class="cont_sub_btt">Submit Subscription Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>


<?php
    //here we remove the flash-message because it is already shown above the form.
    $session->remove('flashMessage');
    //reset 'sent' variable for future submit
    $session->sent = false;
?>﻿﻿

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
          q = document.getElementById('search').value;

          if(q == ''){
            //do nothing
          } else {
            $('#form-search').submit();

          }
  });

} () );


</script>

</body>

</html>
