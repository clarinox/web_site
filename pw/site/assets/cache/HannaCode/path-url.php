<?php
if(!defined("PROCESSWIRE")) die("no direct access");


if (isset($path)) {
    $target = $pages->get($path);
    if (!$target->id) {
        $url = "Page NOT FOUND";
    } else {
        $url = $target->url;
    }
} else {
    $url = "Please specify the path e.g., /products/clarinoxblue";
}

echo $url;