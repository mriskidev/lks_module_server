<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
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

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => "Riski",
        "jurusan" => "RPL",
        'img' => 'gbr2.jpg'
    ]);
});

// ini udah pake controller
Route::get('/posts',[PostController::class, 'index']);

// halaman sigle post
Route::get('posts/{post:slug}',[PostController::class, 'show']);

// kehalaman categories yang menampilkan semua dari category
Route::get('/categories', function (){
    return view('categories' ,[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});


// halaman categories
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
