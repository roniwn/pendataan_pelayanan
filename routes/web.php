<?php

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
    return view('home', [
    	"title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    	"title" => "About",
    	"name" => "Muhamad Roni Kurniawan",
    	"email" => "muhamadroni16092000@gmail.com",
    	"image" => "peeps2.png"
    ]);
});


Route::get('/posts', function () {

	$blog_posts = [
	[
		"title" => "Judul Post Pertama",
		"author" => "Ronn",
		"body" => "Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak"
	],
	[
		"title" => "Judul Post Pertama",
		"author" => "Ronn",
		"body" => "Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak"
	],
];

    return view('posts', [
    	"title" => "Posts",
    	"posts" => $blog_posts
    ]);
});

Route::get('/nasabah', [NasabahController::class,'index']); 

//Route::get('/nasabah', [App\Http\Controllers\NasabahController::class, 'index']);

