<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 8/4/2019
 * Time: 11:50 PM
 */
$site_name = 'tinkshak';
return [
    'site_author' => env('SITE_AUTHOR' , 'Kosi Eric'),
    'site_name' => env('SITE_NAME' , $site_name),
    'site_name_dot_com' => env('SITE_NAME_DOT_COM' , $site_name.'.com'),
    'site_url' => env('SITE_URl' , '/'),
    'site_name_uppercase' => ucfirst($site_name),
    'bullet' => '•',
    'max_post_title_length' => 100,
    'min_post_title_length' => 30,
    'min_post_body_length' => 144,
    'max_tag_length' => 30,
    'products' => [
        'Computers' => ['Softwares' , 'Games' , 'Product Keys'],
        'Books' => ['E-books' , 'Audio Books' , 'Comics'],
        'Media' => ['Videos' , 'Photo Albums' ,'Video Tutorial'] ,
        'Mp3' => ['Mp3 Song' , 'Music Album' , 'Musical Sounds'],

        'More' => ['Code Scripts' , 'Movie Scripts']

    ],

    'products_icons' =>
        [

            'Books' => 'bookmark_border',

            'Mp3' => 'music_note',

            'Computers' => 'desktop_windows',

            'Media' => 'ondemand_video'

        ]
];
?>