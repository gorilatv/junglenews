<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

// Route::get('/', [NoticiaController::class, 'index'])->name('home');
// Route::get('/noticia/{id}', [NoticiaController::class, 'show'])->name('noticias.show');



 Route::get('/superman', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];
    return view('singlepage.topo.quad.bmaster1.superman', compact('article'));
 })->name('superman');


Route::get('/missao', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.quad.bmaster2.missao', compact('article'));
})->name('missao');

Route::get('/formula', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.quad.bmaster3.formula', compact('article'));
})->name('formula');


Route::get('/johnwick', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.squad.quad01.johnwick', compact('article'));
})->name('master');

Route::get('/androidxr', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.squad.quad02.androidxr', compact('article'));
})->name('androidxr');


Route::get('/robocop', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.squad.quad03.robocop', compact('article'));
})->name('robocop');


Route::get('/astro', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.squad.quad03.astro', compact('article'));
})->name('astro');

Route::get('/soft', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.squad.quad03.soft', compact('article'));
})->name('soft');


Route::get('/security', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.squad.quad03.security', compact('article'));
})->name('security');


Route::get('/product', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.squad.quad03.product', compact('article'));
})->name('product');

Route::get('/product', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.topo.squad.quad03.product', compact('article'));
})->name('product');

Route::get('/gta', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.first.gta', compact('article'));
})->name('gta');

Route::get('/guy', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.first.guy', compact('article'));
})->name('guy');

Route::get('/ballerina', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.first.ballerina', compact('article'));
})->name('ballerina');

Route::get('/nicolas', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.first.nicolas', compact('article'));
})->name('nicolas');

Route::get('/underwear', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.first.underwear', compact('article'));
})->name('underwear');


Route::get('/wandinha', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.first.wandinha', compact('article'));
})->name('wandinha');

Route::get('/guys', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.second.guys', compact('article'));
})->name('guys');

Route::get('/wandinha', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.second.wandinha', compact('article'));
})->name('wandinha');


Route::get('/conan', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.second.conan', compact('article'));
})->name('conan');

Route::get('/battle', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.second.battle', compact('article'));
})->name('battle');

Route::get('/highlander', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.second.highlander', compact('article'));
})->name('highlander');

Route::get('/ohmy', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.second.ohmy', compact('article'));
})->name('ohmy');


Route::get('/stranger', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.second.stranger', compact('article'));
})->name('stranger');


Route::get('/jumanji', function () {

    $article = [
        'created_at' => now(), // or any Carbon date
    ];

    return view('singlepage.main.third.jumanji', compact('article'));
})->name('jumanji');


Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/reportagem/{slug}', [ArticleController::class, 'show'])->name('article.show');


require __DIR__.'/auth.php';
