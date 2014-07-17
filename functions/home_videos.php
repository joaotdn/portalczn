<?php

add_action( 'wp_ajax_nopriv_CZN_request_videos_home', 'CZN_request_videos_home' );
add_action( 'wp_ajax_CZN_request_videos_home', 'CZN_request_videos_home' );

function CZN_request_videos_home() {
    $postid = $_GET['postid'];
    $video = get_field('czn_video', $postid);

    echo $video;
    exit();
}

?>