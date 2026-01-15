<?php ?>
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="white" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="width">
<meta name="theme-color" content="#fff ">
<meta name="description" content="<?php echo $page->meta_description ?>">
<meta name="keywords" content="<?php echo $page->meta_keywords ?>">
<meta name="author" content="">
<meta name="google-site-verification" content="S3K6MbR6dam711NqsnkhmzhcfcruUI3JB3b7tSU9VlA">


<?php if($page === $pages->get(1)) { ?>
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
 <?php } ?>