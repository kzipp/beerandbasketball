<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// return the welcome paage for / like above, but pass all Episodes to the view
Route::get('/', function () {
    return view('welcome', [
        'episodes' => App\Models\Episode::all()->sortByDesc('published_date'),
        'totalEpisodes' => App\Models\Episode::all()->count(),
    ]);
});

// coming-soon page
Route::get('/coming-soon', function () {
    return view('coming-soon');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
