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
                            <p class="form_title">Need assistance with any of our products? If so, then complete the form below.</p>
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
                                    //$to = ['brooke.ashleigh@clarinox.com','sony.nugrahanto@clarinox.com']; 
                                    $to = ['sony.nugrahanto@clarinox.com'];    
                                    $mail->to($to)->from('web@clarinox.com');
                                    $mail->subject('Web Support Request ');
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
                                            <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
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
                                        <button type="submit" class="cont_sub_btt">Submit Request</button>
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

        });

    } () );


</script>

</body>

</html>
