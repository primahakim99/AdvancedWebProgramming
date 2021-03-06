<?php

use App\Models\Post;
// use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;

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
//Practicum 1
// Route::get('/', function () {
//     echo "Hi! Welcome To Laravel";
// });

// Route::get('/about', function () {
//     echo "Fahreza Prima Hakim<br>";
//     echo "2041720242<br>";
//     echo "TI - 2I";
// });

// Route::get('/about/{id}', function ($id) {
//     echo "This is Article Pages with ID: " .$id;
// });

//Practicum 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//Practicum 3
// Route::get('/', function () {
//     return view ('home');
// });

// Route::prefix('products')->group(function () {
//     Route::get('/marbel-edu-games', function () {
//         return view ('category.1');
//     });
//     Route::get('/marbel-and-friends-kids-games', function () {
//         return view ('category.2');
//     });
//     Route::get('/riri-story-books', function () {
//         return view ('category.3');
//     });
//     Route::get('/kolak-kids-songs', function () {
//         return view ('category.4');
//     });
// });

// Route::prefix('news')->group(function () {
//     Route::get('/', function () {
//         return view ('news.main');
//     });
//     Route::get('/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19', function () {
//         return view ('news.1');
//     });
// });

// Route::prefix('program')->group(function () {
//     Route::get('/karir', function () {
//         return view ('program.1');
//     });
//     Route::get('/magang', function () {
//         return view ('program.2');
//     });
//     Route::get('/kunjungan-industri', function () {
//         return view ('program.3');
//     });
// });

// Route::get('/about-us', function () {
//     return view ('about');
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Week 3
Route::prefix('/')->group(function () {
    Route::get('', [PostController::class, 'index']);
    Route::get('home/resort-overview/luxury-spa', [PostController::class, 'ro1']);
    Route::get('home/resort-overview/beatusish-ingl', [PostController::class, 'ro2']);
    Route::get('home/resort-overview/luxury-room', [PostController::class, 'ro3']);
    Route::get('home/resort-overview/heaven-seanery', [PostController::class, 'ro4']);
});

Route::get('/about', function () {
    return view ('week_3\about', [
        "title" => "about"
    ]);
});

Route::get('/rooms', function () {
    return view ('week_3\rooms', [
        "title" => "rooms"
    ]);
});

Route::get('/gallery', function () {
    return view ('week_3\gallery', [
        "title" => "gallery"
    ]);
});

Route::get('/dinning', function () {
    return view ('week_3\dinning', [
        "title" => "dinning"
    ]);
});

Route::get('/news', function () {
    return view ('week_3\news', [
        "title" => "news"
    ]);
});

Route::get('/contact', function () {
    return view ('week_3\contact', [
        "title" => "contact"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
