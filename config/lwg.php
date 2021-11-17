<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Wordpress API
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'wp_api' => env('WP_API', 'https://livingwithgravity.com/wp-json/wp/v2/'),
    'wp_api_posts' => env('WP_API_POSTS', 'https://livingwithgravity.com/wp-json/wp/v2/posts/'),
    'wp_api_posts_media' => env('WP_API_POSTS_MEDIA', 'https://livingwithgravity.com/wp-json/wp/v2/media/'),

];
