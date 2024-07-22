<?php
$firstTag = $page->tags->first()->title;
$tags = $page->tags();
echo 'Page tags:' . $firstTag . '</br>';
$videos = $pages->find("template=video, sort=-created, tags=$tags");
foreach ($videos as $video){
    echo 'Video title:' . $video->title . '(';
    foreach ($video->tags as $tag){
        echo 'Video tag:' . $tag->title . ',';
    }
    echo ')</br>';
}
?>

