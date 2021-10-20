<?php

use App\Http\Controllers\DashboardPostController;
use App\Models\post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})
->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');