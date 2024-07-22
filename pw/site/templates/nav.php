<link rel="stylesheet" href="<?php echo $config->urls->templates?>css/iso_logo.css">

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
        <img src="<?php echo $config->urls->templates?>images/clarinoxlogo2.png" class="img-responsive" />
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



<div id="navbar" class=" hidden-xs">
    <nav id="header" class="navbar bottom_blue clarionx_nav navbar-default  " role="navigation">
        <div class="container navbar-container">
            <div class="col-md-4 nopadding">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="<?php echo $home->url ?>"><img src="<?php echo $config->urls->templates?>images/clarinoxlogo2.png" class="main_logo img-responsive" /></a>

                </div>
            </div>
            <div class="col-md-8 nopadding">
                <div class="collapse navbar-collapse " id="navbar-collapse-1">                                
                    <ul class="nav navbar-nav my_menu">

                        <li class='<?php if ("Home" == $page->title) {echo "active";} ?>'><a href="<?php echo $home->url ?>"><?php echo $home->title ?></a></li>
                        
                        <li class='dropdown <?php if ("products" == $page->template || "product" == $page->template || "products-hardware" == $page->template) {echo "active";} ?>' >
                            <a href="<?php echo $products->url ?>" class="dropdown-toggle" ><?php echo $products->title ?>  <b class="caret"></b></a>
                            <ul class="dropdown-menu menu_all">
                            <?php foreach ($products->children as $item) { ?>
                                <li><a href="<?php echo $item->url?>"><?php echo $item->title?></a></li>
                            <?php } ?>
                            </ul>
                        </li>

                        <li class='dropdown <?php if ("company" == $page->template || "awards" == $page->template || "company-overview" == $page->template) {echo "active";} ?>'>
                            <a href="<?php echo $company->url ?>" class="dropdown-toggle" ><?php echo $company->title ?>  <b class="caret"></b></a>
                            <ul class="dropdown-menu menu_all">
                            <?php foreach ($company->children as $item) { ?>
                                <li><a href="<?php echo $item->url?>"><?php echo $item->title?></a></li>
                            <?php } ?>
                            </ul>
                        </li>

                        <li class='dropdown <?php if ("resources" == $page->template || "cases" == $page->template || "videos" == $page->template || "articles" == $page->template || "newsletters" == $page->template || "video" == $page->template) {echo "active";} ?>'>
                            <a href="<?php echo $resources->url ?>" class="dropdown-toggle" ><?php echo $resources->title ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu menu_all">
                            <?php foreach ($resources->children as $item) { ?>
                                <li><a href="<?php echo $item->url?>"><?php echo $item->title ?></a></li>
                            <?php } ?>
                            </ul>
                        </li>

                        <li class='dropdown <?php if ("contact-us" == $page->template || "contact-us-enquiry" == $page->template || "contact-us-subscribe" == $page->template || "contact-us-unsubscribe" == $page->template) {echo "active";} ?>'>
                            <a href="<?php echo $contact->url ?>" class="dropdown-toggle" ><?php echo $contact->title ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu menu_all">
                            <?php foreach ($contact->children as $item) { ?>
                                <li><a href="<?php echo $item->url?>"><?php echo $item->title ?></a></li>
                            <?php } ?>
                            </ul>
                        </li>
                        <li class="sr_bx">
                            <form action="<?php echo $pages->get("/search/")->url ?>" id="form-search" class="form-inline">

                                <fieldset>
                                    <ul class="toolbar clearfix">
                                        <li><input type="search" id="search" name="q" value=""></li>
                                        <li><button type="submit" id="btn-search"><i class="fa fa-search" ></i></button></li>
                                    </ul>
                                </fieldset>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /.navbar-collapse -->        
    </nav>
</div>
