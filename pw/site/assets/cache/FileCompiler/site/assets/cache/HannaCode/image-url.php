<?php
if(!defined("PROCESSWIRE")) die("no direct access");


if (isset($filename)) {
    if (count($page->images)) {
        $image = $page->images->get($filename);
        if ($image) {
            $url = $image->url;
        } else {
            $url = "Image NOT FOUND";
        }
    } else {
        $url = "No images uploaded on this page";   
    }
} else {
    $url = "Please specify filename for the image";
}

echo $url;