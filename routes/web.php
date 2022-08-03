<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddProductController;



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
    return view('welcome');
});

// // home page route call
// Route::get('/home', function () {
//     return view('home');
// });

// //  return to login page from login button to  route call
// Route::view('/login', 'login')->name('login');
// //admin page call
// Route::post('/admindashboard',  [AdminController::class,'adminCheck'])->name('adminpage');

// // registration call from login blade files
// Route::view('/registration', 'RegistrationPage')->name('registration');

// // add categories call from admin page
// Route::get('/addcategories',[AdminController::class,'ViewCag'])->name('addcategories');

// // add categories
// Route::get('/addnewcategories',[AdminController::class,'AddNewCag']);

// // add  new categories call from admin add categories link
// Route::view('/addnewcag', 'AddCategoriesForm')->name('add');

// // insert value to database once  add  cag button is clicked
// Route::post('/cagvalue',  [AdminController::class,'InsertAddCag'])->name('addcag');

// // edit and delete from cag actions
// Route::get('/edit/{id}',[AdminController::class,'CagEdit'])->name('edit');
// Route::post('/update/{id}',[AdminController::class,'CagUpdate'])->name('update');
// Route::get('/delete/{id}',[AdminController::class,'CagDelete'])->name('delete');

// //  ADD  and edit and edit product  form
// //admin page call
// Route::get('/addproductpage',  [AddProductController::class,'AddProductpage'])->name('addproductpage');

// // Route::post('/addnewproduct',[AddProductController::class,'store'])->name('addproduct');
