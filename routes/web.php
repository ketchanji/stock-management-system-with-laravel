<?php

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

// Admins route pages

// Route::get('/admin', function() {
//     return view('dashboards.admin.index');
// });

// Route::get('/profile', function() {
//     return view('dashboards.admin.profile');
// });

// Route::get('/all-stock', function() {
//     return view('dashboards.admin.all-stock');
// });

// Route::get('/inventory', function() {
//     return view('dashboards.admin.inventory');
// });

// Manager route pages

// Route::get('/manager', function() {
//     return view('dashboards.manager.index');
// });

// Route::get('/profile', function() {
//     return view('dashboards.manager.profile');
// });

// Route::get('/all-stock', function() {
//     return view('dashboards.manager.all-stock');
// });

// Route::get('/inventory', function() {
//     return view('dashboards.manager.inventory');
// });


// Worker route pages

Route::get('/worker', function() {
    return view('dashboards.worker.index');
});

Route::get('/profile', function() {
    return view('dashboards.worker.profile');
});

Route::get('/all-stock', function() {
    return view('dashboards.worker.all-stock');
});

Route::get('/inventory', function() {
    return view('dashboards.worker.inventory');
});
 

Route::get('/all-stock', [ProductController::class, 'create']);
Route::post('/all-stock', [ProductController::class, 'store']);

Route::get('/all-stock', [ProductController::class, 'show']);






