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

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
        <div class="contact_form_bx">
            <div class="inner">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
                    <ul class="contact_tabs">
                        <li class="active"><a href="#">Enquiries</a></li>
                        <li><a href="#">NewsLetter</a></li>
                        <li><a href="#">Unsubscribe</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 nopadding">
                    <div class="form_content">
                        <div class="col-md-12 col-sm-12 col-xs-12  nopadding">
                            <p class="form_title">Got any questions, general or products related? if so, then complete the form below</p>
                            <p>If you require support for Clarinox products, refer to our Request Support form</p>
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

                                $mail->to('sony.nugrahanto@clarinox.com')->from('web@clarinox.com');
                                $mail->subject('Web Enquiry');
                                $mail->bodyHTML($emailContent);
                                if ($mail->send()){
                                    echo "FORMS submitted";
                                } else {
                                    echo "Error sending the email";
                                }
                            }?>
                          <form id="contact-form" name="contact-form" method="post" action="./">
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name">First Name</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="First Name" class="form-control" type="name" name="first_name" placeholder="First Name " required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="Last Name">Last Name</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Last Name" class="form-control" type="name" name="last_name" placeholder="Last Name " required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="Email">Email</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Email" class="form-control" type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name">Company Name</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Company Name" class="form-control" type="text" name="company_name" placeholder="Company Name " required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="">Country</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <select  class="form-control" id="Country" name="country">
                                            <option>Choose Your Country</option>
                                            <option>Australia</option>
                                            <option>Canada</option>
                                            <option>China</option>
                                            <option>France</option>
                                            <option>Hong Kong</option>
                                            <option>Indonesia</option>
                                            <option>India</option>
                                            <option>Philippines</option>
                                            <option>Russia</option>
                                            <option>Taiwan</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name">Phone Number</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <input id="Company Name" class="form-control" type="text" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="Comments">Comments</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea class="form-control" name="comments" rows="3" placeholder="Comments..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group cont_fm">
                                    <label class="col-sm-3  control-label" for="First Name"></label>
                                    <div class="col-sm-9 col-xs-12">
                                        <button type="submit" class="cont_sub_btt">Submit Enquiry</button>
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

</body>

</html>
