<?php

use App\Http\Controllers\DashboardController;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
    return view('site.index');
});

Route::get('/login', function() {
    return view('auth.login');
});

Route::get('/register', function() {
    return view('site.register');
});



// route pages




Auth::routes();

Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::get('/gate', [App\Http\Controllers\AuthorizationController::class, 'index'])->name('gate.index')->middleware('can:isAdmin');




/*******************  Route to add and save product   *****************************/ 

Route::get('/all-stock', [ProductController::class, 'create']);
Route::post('/all-stock', [ProductController::class, 'store']);

/***** Ends Route for product ******/ 

/*******************  Route to add and save category   *****************************/ 

Route::get('/category', [ProductController::class, 'show']);
Route::post('/category', [ProductController::class, 'keep']);

/***** Ends Route for category ******/ 


/*************** Start Route for update product   *******************/ 

Route::get('click_edit/{id}',[ProductController::class, 'edit_function']);

Route::post('/update/{id}',[ProductController::class, 'update_function']);

/***** Ends Route for update ******/ 

/*************** Start Route for delete product   *******************/ 

Route::get('click_delete/{id}',[ProductController::class, 'delete_function']);

/***** Ends Route for delete ******/ 

/*************** Start Route for delete category   *******************/ 

Route::get('click_delete/{id}',[ProductController::class, 'destroy_function']);

/***** Ends Route for delete ******/ 
