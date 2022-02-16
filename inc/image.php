<?php


add_image_size('imgblog', 347, 256, true);
add_image_size('imgflickr', 250, 250, true);
add_image_size('imgdiapo', 300, 200, true);
add_image_size('imgcard', 400, 300, true);
add_image_size('imgcv', 310, 400, true);

function remove_default_img_sizes($sizes)
{
    // ['thumbnail','medium', 'medium_large', 'large', '1536x1536', '2048x2048'];
    unset($sizes['medium']);
    unset($sizes['large']);
    return $sizes;
}

add_filter('intermediate_image_sizes_advanced', 'remove_default_img_sizes', 10, 1);
