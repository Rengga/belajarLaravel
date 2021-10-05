<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \App\Models\post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
       $title='';
       if(request('category')){
           $category = Category::firstWhere('slug', request('category'));
           $title = ' in ' .$category->name;
       }
       if (request('author')){
           $author =User::firstWhere('username', request('author'));
           $title = ' by ' .$author->name;
       }

        return view('posts', [
            "title" => "All Posts" .$title,
            "active"=> 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    public function show(post $post3){
        return view('mypost',[
            "title" => "single post",
            "active"=> 'posts',
            "mypost2" => $post3
        ]);
    }
}
