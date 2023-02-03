<?php

use App\Http\Controllers\DashboardController;
use App\Models\Product;
use App\Http\Controllers\ProductController;
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
    return view('site.login');
});

Route::get('/register', function() {
    return view('site.register');
});



// Worker route pages

Route::get('/dashboard', function() {
    return view('dashboards.index');
});

Route::get('/profile', function() {
    return view('dashboards.profile');
});

Route::get('/all-stock', function() {
    return view('dashboards.all-stock');
});

Route::get('/inventory', function() {
    return view('dashboards.inventory');
});
 
Route::get('/category', function() {
    return view('dashboards.category');
});
 



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





