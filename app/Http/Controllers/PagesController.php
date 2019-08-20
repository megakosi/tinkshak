<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class PagesController extends Controller
{
    //


    public function index () {

        $data =
            [
                'head_title' => config('constants.site_name_uppercase').  ' - Buy/Sell E-books, Audio Books, Music Albums, Software , Scripts, Photo Albums e.t.c' ,
                'head_description' => 'Buy/Sell your E-books, Audio Books , Music Albums, Software , Scripts, Photo Albums World wide '.config('constants.site_author')
            ];

        return view('index')->with($data);
    }


    public function tags ()
    {
        $all_tags = [];


        $categories = config('categories.all');

        foreach ($categories as $category => $subcategories) {
            foreach ($subcategories as $subcategory => $tags) {
                foreach ($tags as $tag) array_push($all_tags , $tag);
            }
        }


        $tags = Tag::all();
        foreach ($tags as $tag) {
            array_push($all_tags, $tag->tag_name);

        }


        $response = [

            'tags' => $all_tags,
            'categories' => $categories
        ];
        //return $response;
        return json_encode($response);
    }
}
