<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 8/4/2019
 * Time: 11:50 PM
 */
$site_name = 'Tink Shak';
$site_name_2 = strtolower(str_replace(' ' , '' , $site_name));
return [
    'site_author' => env('SITE_AUTHOR' , 'Kosi Eric'),
    'site_name' => $site_name_2,
    'site_name_dot_com' => env('SITE_NAME_DOT_COM' , $site_name_2.'.com'),
    'site_url' => env('SITE_URl' , '/'),
    'site_name_uppercase' => str_replace(' ' , '' , $site_name),
    'bullet' => '•',
    'max_post_title_length' => 100,
    'min_post_title_length' => 30,
    'min_post_body_length' => 144,
    'max_tag_length' => 30,
    'free_disk_space' => 50000000, //50MB,
    'maximum_allowed_disk_space' => 1000000000, //1GB
    'minimum_account_balance_before_payment' => 100,
    'base_currency_symbol' => '$',
    'user_id_length' => 16,
    'base_currency_name' => 'USD',
    'amount_charged_for_withdrawal' => 5,
    'minimum_username_length' => 2,
    'maximum_username_length' => 12,
    'ip_url' => "http://ip-api.com/json/",
    'other' => 'other' ,
    'products' =>
        [
            'Computers' => ['Softwares' , 'Games' , 'Product Keys'],
            'Books' => ['E-books' , 'Audio Books'],
            'Media' => ['Video' , 'PlayList' , 'Photo' ,'Photo Gallery'] ,
            'Mp3' => ['Mp3 Song' , 'Music Album'],
            'Other' => ['Code Scripts' , 'Movie Scripts']
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