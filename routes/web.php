<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    // dd(App());
    /*
    $array['name1'] = 'Some name for this test';
    $array['name2'] = 'Some name for this test';
    $array['name3'] = 'Some name for this test';
    $array2['names'] = $array;
    return view('welcome');
    */
    // return redirect('about');
});

Route::get('/about', function() {
    return view('about');
 });
    /*
    Route::get('/user/{id}/{product}', function($id, $product){
    // echo $id;
    $me = 'Sometext';
    //return view('user', ['id' =>$id, 'product' =>$product]);
    $arr = ['id' =>$id, 'product' =>$product];
    return view('user', $arr);
    });
    */

Route::get('/user', [UserController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);

Route::get('/test-one', function () {
   app()->make('first_service_provider');
});

// Route::view('\user', 'user');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
