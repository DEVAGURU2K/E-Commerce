<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddCartController;
use App\Http\Controllers\MoneySetupController;
use App\Http\Controllers\StripeController;



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



// home page route call
// Route::get('/home', function () {
//     return view('home');
// });


// Route::view('/','welcome');

Route::get('/', [HomeController::class, 'HomePage']);

// login page
Route::view('/login123', 'loginPage')->name('login');

//  admin login page
Route::view('/adminlogin', 'adminLogin')->name('adminlogin');
// user login page
Route::view('/userlogin', 'userlogin')->name('userlogin');
//admin page call
Route::post('/admindashboard',  [AdminController::class,'adminCheck'])->name('adminpage');
//user page call
Route::post('/userdashboard',  [UserController::class,'userCheck'])->name('userpage');
// registration call from login blade files
Route::view('/registration', 'RegistrationPage')->name('registration');

// store data to registertable
Route::post('/insertregistration',[UserController::class,'InsertRegistration'])->name('insertregistration');

// add categories call from admin page
Route::get('/addcategories',[AdminController::class,'ViewCag'])->name('addcategories');

// add categories
Route::get('/addnewcategories',[AdminController::class,'AddNewCag']);

// add  new categories call from admin add categories link
Route::view('/addnewcag', 'AddCategoriesForm')->name('add');

// insert value to database once  add  cag button is clicked
Route::post('/cagvalue',  [AdminController::class,'InsertAddCag'])->name('addcag');

// edit and delete from cag actions
Route::get('/edit/{id}',[AdminController::class,'CagEdit'])->name('edit');
Route::post('/update/{id}',[AdminController::class,'CagUpdate'])->name('update');
Route::get('/delete/{id}',[AdminController::class,'CagDelete'])->name('delete');

//  ADD  and edit and edit product  form
//admin page call
Route::get('/productpage',  [AddProductController::class,'Productpage'])->name('productpage');


Route::get('/addnewproduct',  [AddProductController::class,'AddNewProduct'])->name('addnewproduct');

Route::post('/addproduct',[AddProductController::class,'store'])->name('addproduct');
// delete product
Route::get('/deleteproduct/{id}',[AddProductController::class,'Productdelete'])->name('prddelete');

// edit product
Route::get('/editproduct/{id}',[AddProductController::class,'Productedit'])->name('prdedit');

// update product
Route::post('/updateproduct/{id}',[AddProductController::class,'Producteupdate'])->name('updateproduct');

///add cart

 Route::post('/addcart/{id}',[AddCartController::class,'Addcart'])->name('addcart');
 ///view add cart in users
 Route::get('/viewaddcart',[AddCartController::class,'Viewcart'])->name('viewcart');

//  fileter cart
 Route::get('/filtercart/{data}',[AddCartController::class,'Filtercart'])->name('filtercart');

 ///delete cart
 Route::get('/cartdelete/{id}',[AddCartController::class,'DeleteCart'])->name('deletecart');

//  count cart
Route::get('/totaladdcart',[AddCartController::class,'CountCart']);

//  increase quantity in view cart page
Route::get('/increasequantity/{id}',[AddCartController::class,'IncreaseQuality'])->name('increasequality');
//  decrease quantity in view cartpage
Route::get('/decreasequantity/{id}',[AddCartController::class,'DecreaseQuality'])->name('decreasequality');

// filter ajax call route
Route::get('/filter',[HomeController::class,'FilterCag'])->name('filter');
// product cag group.
Route::get('/filterproduct',[HomeController::class,'FilterProduct'])->name('productfilter');


// stripe call
Route::get('/stripe', [StripeController::class, 'stripe']);
Route::post('/stripe', [StripeController::class, 'stripePost'])->name('stripe.post');



