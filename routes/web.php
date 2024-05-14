
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\HomeController;

use App\Http\Controllers\frontend\ProductController; 

use App\Http\Controllers\frontend\ContactController;

Route::get('/', [HomeController::class, 'index']); //Trang chu

Route::get('/san-pham', [ProductController::class, 'index']); //Sản phâm


Route::get('/chi-tiet-san-pham/{slug}', [ProductController::class, 'product_detail']); //Chi tietSản phâm 1 
Route::get('/lien-he', [ContactController::class, 'index']); //lien he