
<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="<?php echo $config->urls->templates?>css/iso_logo.css">

    <style>
        .product-title {
            font-family: 'Poppins', sans-serif !important;
            font-size: 14px !important;
        }
    </style>

</head>


<body>

<?php

/* Get all top level menu */
/* TODO: Iterate this (instead of currently hard-coded here) */

$home =  $pages->get("/");
$products = $pages->get("/products/");
$company = $pages->get("/company/");
$resources = $pages->get("/resources/");
$contact = $pages->get("/contact-us/");

?>

 <div id="main-nav" class="stellarnav  mob_nav_line  visible-xs  hidden-md hidden-lg">
 <div class="mob_clarinox_logo">
        <a id="brand" class="navbar-brand" href="<?php echo $home->url ?>">
            <img src="<?php echo $config->urls->assets?>files/1368/Clarinox_Logo_2024.svg" class=" moblogo img-responsive" />
        </a> 
</div>
    <ul>
       <li>
            <div class="mob_search_sp">
                <form action="<?php echo $pages->get("/search/")->url ?>" class="navbar-form" role="search">
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="Search" name="q" id="srch-term" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default src_bt" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <li><a href="<?php echo $home->url ?>"><?php echo $home->title ?></a></li>
        
        <li><a href="<?php echo $products->url ?>"><?php echo $products->title ?></a>
            <ul>
                <?php foreach ($products->children as $item) { ?>
                    <li><a href="<?php echo $item->url?>"><?php echo $item->title?></a></li>
                <?php } ?>
            </ul>
        </li>

        <li><a href="<?php echo $company->url ?>"><?php echo $company->title ?></a>
            <ul>
                <?php foreach ($company->children as $item) { ?>
                    <li><a href="<?php echo $item->url?>"><?php echo $item->title?></a></li>
                <?php } ?>
            </ul>
        </li>

        <li><a href="<?php echo $resources->url ?>"><?php echo $resources->title ?></a>
            <ul>
                <?php foreach ($resources->children as $item) { ?>
                <li><a href="<?php echo $item->url?>"><?php echo $item->title ?></a></li>
                <?php } ?>
            </ul>
        </li>

        <li><a href="<?php echo $contact->url ?>"><?php echo $contact->title ?></a>
            <ul>
                <?php foreach ($contact->children as $item) { ?>
                <li><a href="<?php echo $item->url?>"><?php echo $item->title ?></a></li>
                <?php } ?>
            </ul>
        </li>

    </ul>
</div><!-- .stellar-nav -->



<div id="navbar" class=" hidden-xs" >
    <nav id="header" class="pgheads clarionx_nav navbar-default pghead nav-top" role="navigation">


        <div class="container navbar-container" >
          
               <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

<a id="brand" class="navbar-brand" href="<?php echo $home->url ?>">
    <img src="<?php echo $config->urls->assets?>files/1368/Clarinox_Logo_2024.svg" class="clarinoxlogo" />
</a> 
     
          </div> 
            <div class="header-bar col-md-8">
                <div class="collapse navbar-collapse header-top" id="navbar-collapse-1" >                                
                    <ul class="nav navbar-nav my_menu" >

                        <li class='<?php echo ($page->title == "Home") ? "active" : ""; ?>'>
                            <a href="<?php echo $home->url ?>">
                            <strong class="product-title"><?php echo $home->title ?></strong>
                            </a>
                        </li>

                        <li class="dropdown <?php if ("products" == $page->template || "product" == $page->template || "products-hardware" == $page->template) {echo "active";} ?>">
                            <a href="<?php echo $products->url ?>" class="dropdown-toggle"><strong class="product-title"><?php echo $products->title ?></strong></a>
                            <ul class="dropdown-menu menu_all">
                            <?php foreach ($products->children as $item) { ?>
                               <li><a href="<?php echo $item->url ?>"><strong class="product-title"><?php echo $item->title ?></strong></a></li>
                            <?php } ?>
                            </ul>
                        </li>


                        <li class='dropdown <?php echo (in_array($page->template, ["company", "awards", "company-overview"])) ? "active" : ""; ?>'>
                            <a href="<?php echo $company->url ?>" class="dropdown-toggle">
                            <strong class="product-title"><?php echo $company->title ?></strong>
                            </a>
                            <ul class="dropdown-menu menu_all">
                            <?php foreach ($company->children as $item) { ?>
                                <li><a href="<?php echo $item->url?>"><strong class="product-title"><?php echo $item->title?></strong></a></li>
                            <?php } ?>
                            </ul>
                       </li>

                       <li class='dropdown <?php echo (in_array($page->template, ["resources", "cases", "videos", "articles", "newsletters", "video"])) ? "active" : ""; ?>'>
                           <a href="<?php echo $resources->url ?>" class="dropdown-toggle">
                           <strong class="product-title"><?php echo $resources->title ?></strong>
                           </a>
                           <ul class="dropdown-menu menu_all">
                           <?php foreach ($resources->children as $item) { ?>
                               <li><a href="<?php echo $item->url?>"><strong class="product-title"><?php echo $item->title ?></strong></a></li>
                           <?php } ?>
                           </ul>
                        </li>


                       <li class='dropdown <?php if ("contact-us" == $page->template || "contact-us-enquiry" == $page->template || "contact-us-subscribe" == $page->template || "contact-us-unsubscribe" == $page->template) {echo "active";} ?>'>
                           <a href="<?php echo $contact->url ?>" class="dropdown-toggle">
                           <strong class="product-title"><?php echo $contact->title ?></strong>
                           </a>
                           <ul class="dropdown-menu menu_all">
                           <?php foreach ($contact->children as $item) { ?>
                               <li><a href="<?php echo $item->url ?>"><strong class="product-title"><?php echo $item->title ?></strong></a></li>
                           <?php } ?>
                           </ul>
                       </li>

                    </ul>
                </div>
            </div> 
       <!--  /.navbar-collapse -->        
  </nav>  
</div> 
</div> 

</body>
</html>


