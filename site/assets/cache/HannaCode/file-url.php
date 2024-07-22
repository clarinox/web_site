<?php
if(!defined("PROCESSWIRE")) die("no direct access");


if (isset($filename)) {
    if (count($page->files)) {
        $file = $page->files->get($filename);
        if ($file) {
            $url = $file->url;
        } else {
            $url = "File NOT FOUND";
        }
    } else {
        $url = "No files uploaded on this page";   
    }
} else {
    $url = "Please specify filename for the file";
}

echo $url;