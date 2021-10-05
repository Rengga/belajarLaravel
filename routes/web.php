<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "active" => "home",
        "name" => "Rengga Arnanta",
        "text" => "anjay mabar",
        "image" => "https://i1.wp.com/anievo.id/wp-content/uploads/2021/07/206825879_4406644719346676_1240152952378866333_n.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        'active' => 'about',
        "name" => "Rengga Arnanta",
        "text" => "anjay mabar",
        "image" => "https://i1.wp.com/anievo.id/wp-content/uploads/2021/07/206825879_4406644719346676_1240152952378866333_n.jpg"
    ]);
});

Route::get('/posts',[PostController::class,'index']);

Route::get('posts/{post3:slug}', [PostController::class, 'show']);

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title'=> "Post by Category : $category->name",
//         'active'=> 'categories',
//         'posts'=>$category->posts->load('category', 'author'),

//     ]);
// });

Route::get('/categories', function () {
    return view('categories',[
        'title'=>'Post Categories',
        'active'=> 'categories',
        'categories'=> Category::all()

    ]);
    
});

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'active' => "Post by Author : $author->name",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });