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
        'Books' => ['E-books' , 'Audio Books' , 'Comics'],
        'Mp3 Songs' => ['Mp3 Song' , 'Music Album', 'Videos' ,],
        'Media' => ['Videos' , 'Photo Albums'] ,
        'Computers' => ['Softwares' , 'Games' , 'Licence Keys'],
        'Cards' => ['Gift Cards' , 'Event Ticket'],
        'More' => ['Code Scripts' , 'Movie Scripts']
    ],

    'products_icons' => [
        'books' => 'book',
        'songs' => 'music_note',
        'software' => 'desktop_windows'
    ]
];
?>