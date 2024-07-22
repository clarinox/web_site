<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/head-include.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Clarinox | Supported Platforms</title>
    
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


<style>
html {
  scroll-behavior: smooth;
 }

#element {
  height: 100px;
  width: 100%;


  scroll-margin-block-start: 110px;

  
  scroll-margin-block-end: 110pxx;
}
#element1 {
  height: 100px;
  width: 100%;


  scroll-margin-block-start: 110px;

  
  scroll-margin-block-end: 110pxx;
}

#element2 {
  height: 100px;
  width: 100%;


  scroll-margin-block-start: 110px;

  
  scroll-margin-block-end: 110pxx;
}

#element3 {
  height: 100px;
  width: 100%;


  scroll-margin-block-start: 110px;

  
  scroll-margin-block-end: 110pxx;
}

#element4 {
  height: 100px;
  width: 100%;


  scroll-margin-block-start: 110px;

  
  scroll-margin-block-end: 110pxx;
}

#element5 {
  height: 100px;
  width: 100%;


  scroll-margin-block-start: 110px;

  
  scroll-margin-block-end: 110pxx;
}

#element6 {
  height: 100px;
  width: 100%;


  scroll-margin-block-start: 110px;

  
  scroll-margin-block-end: 110pxx;
}


</style>

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

<div class="container  white_space">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color"><?php echo $page->title ?></h3>
        </div>



<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 nopadding" id="<?php echo $article->name; ?>">
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
            <h3 class="page_heading theme_color">Table of contents</h3>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
        <p></p>
            <ul>
              <p>
              <b></b>
              </p> 
            <li>


 <a href="#element6">Supported OS/RTOS</a>    
      
           </li> 
              <b></b>
             </p> 
           <li>

 <a href="#element5">Supported TCP/IP</a>               
           </li>
              <p>
               <b></b>
              </p> 
            <li>


<a href="#element4">Supported Wireless Chips</a>

                
            </li>
               <p>
                 <b></b>
               </p> 
             <li>

<a href="#element3">Supported Wireless Modules</a>


                
             </li> 
                <p>
                  <b></b>
                </p> 
              <li>
<a href="#element2">Supported CPU Architectures</a>

              </li> 
                 <p>
                   <b></b>
                 </p> 
               <li>
<a href="#element1">Supported MCU/CPU Families</a>
                 
               </li> 
                  <p>
                    <b></b>
                  </p> 
               <li>
<a href="#element">Supported Evaluation Modules</a>


                </li> 

            </div>
          </div>
      </div>


        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
<div id="element6">
</div>

<div id="otherElement"> <h4>Supported OS/RTOS</h4></a>



            <edit supported_os>
            <div class="table-responsive">
                <div>
                    <table class="table table-bordered">
                        <thead><tr>
                            <?php foreach($page->supported_os->labels as $label) echo "<th>$label</th>"; ?>
                        </tr></thead>
                        <tbody>
                            <?php foreach($page->supported_os as $row) {?>
                                <tr>
                                    <?php foreach($row as $column) echo "<td>$column</td>"?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>

            </edit>

        </div>


        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
<div id="element5">
</div>

<div id="otherElement">    <h4>Supported TCP/IP</h4></a>

         
            <edit supported_tcpip>
            <div class="table-responsive">
                <div>
                    <table class="table table-bordered">
                        <thead><tr>
                            <?php foreach($page->supported_tcpip->labels as $label) echo "<th>$label</th>"; ?>
                        </tr></thead>
                        <tbody>
                        <?php foreach($page->supported_tcpip as $row) {?>
                            <tr>
                                <?php foreach($row as $column) echo "<td>$column</td>"?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
            </edit>
        </div>

 


         <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
<div id="element4">
</div>

<div id="otherElement"> <h4>Supported Wireless Chips</h4></a>

           
            <edit supported_wireless_chip>
            <div class="table-responsive">
                <div>
                    <table class="table table-bordered">
                        <thead><tr>
                            <?php foreach($page->supported_wireless_chip->labels as $label) echo "<th>$label</th>"; ?>
                        </tr></thead>
                        <tbody>
                        <?php foreach($page->supported_wireless_chip as $row) {?>
                            <tr>
                                <?php foreach($row as $column) echo "<td>$column</td>"?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            </edit>
        </div>  
  
 

     <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
<div id="element3">
</div>

<div id="otherElement"><h4>Supported Wireless Modules</h4></a>

            
                   <div class="table-responsive">
                <div>
                    <table class="table table-bordered">
                        <thead>
                         <tr>
                         <th>Modules</th>
                         <th>variant</th>
                        </tr></thead>
                        <tbody>
                            <tr>
                               <td> Ampak </td>
                               <td> AP6276P  </td>                               
                            </tr>

                            <tr>
                               <td> AzureWave </td>
                               <td> AW-CM358  </td>                               
                            </tr>
                             <tr>
                               <td> Laird </td>
                               <td> 60-SIPT </td>                               
                            </tr>
                            <tr>
                               <td> Murata</td>
                               <td> 1YM </td>                               
                            </tr>
                             <tr>
                               <td> Panasonic</td>
                               <td>PAN1326, PAN9026 </td>                               
                            </tr>
                             <tr>
                               <td> Taiyo Yuden</td>
                               <td>WYSBHVGXG </td>                               
                            </tr>
                             <tr>
                               <td>Texas Instruments</td>
                               <td> CC2564MODN, WL1831MOD, WL1835MOD, WL1837MOD </td>                               
                            </tr>
                            <tr>
                               <td>Ublox</td>
                               <td> JODY-W263, EMMY-W1</td>                               
                            </tr>                    
                      </tbody>
                    </table>
                </div>
            </div>
            </div>
            </edit>
        </div>               
                
            
            
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
<div id="element2">
</div>

<div id="otherElement"> <h4>Supported CPU Architectures</h4></a>


           
            <edit supported_cpu>
            <div class="table-responsive">
                <div>
                    <table class="table table-bordered">
                        <thead><tr>
                            <?php foreach($page->supported_cpu->labels as $label) echo "<th>$label</th>"; ?>
                        </tr></thead>
                        <tbody>
                        <?php foreach($page->supported_cpu as $row) {?>
                            <tr>
                                <?php foreach($row as $column) echo "<td>$column</td>"?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </edit>
           </div>
        </div>


        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">
<div id="element1">
</div>

<div id="otherElement"><h4>Supported MCU/CPU Families</h4></a>


            <edit supported_mcu>
            <div class="table-responsive">
                <div>
                    <table class="table table-bordered">
                        <thead><tr>
                            <?php foreach($page->supported_mcu->labels as $label) echo "<th>$label</th>"; ?>
                        </tr></thead>
                        <tbody>
                        <?php foreach($page->supported_mcu as $row) {?>
                            <tr>
                                <?php foreach($row as $column) echo "<td>$column</td>"?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </edit>
          </div>
        </div>


  
        <div class="col-md-12 col-lg-12 col-sm-12 page_cont col-xs-12 nopadding">

<div id="element">
</div>

<div id="otherElement"> <h4>Supported Evaluation Modules</h4></a>


            <edit supported_evm>
            <div class="table-responsive">
                <div>
                    <table class="table table-bordered">
                        <thead><tr>
                            <?php foreach($page->supported_evm->labels as $label) echo "<th>$label</th>"; ?>
                        </tr></thead>
                        <tbody>
                        <?php foreach($page->supported_evm as $row) {?>
                            <tr>
                                <?php foreach($row as $column) echo "<td>$column</td>"?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
           </div>
          </edit>
         </div>

</div>
</div>




<div class="learfix">&nbsp;</div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/footer.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>

</body>
</html>
