<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FrontController;
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

Route::get( '/', [FrontController::class, 'index'] )->name( 'home' );

Route::get( '/product-details/{id}', [FrontController::class, 'productDetails'] )->name( 'product-details' );

Route::middleware( [
    'auth:sanctum',
    config( 'jetstream.auth_session' ),
    'verified',
] )->group( function ()
{
    Route::get( '/dashboard', function ()
    {
        return view( 'admin.home.home' );
    } )->name( 'dashboard' );
} );

// Route::middleware( [
//     'auth:sanctum',
//     config( 'jetstream.auth_session' ),
//     'verified',
// ] )->get( '/add-product', [ProductController::class, 'addProduct'] )->name( 'add-product' );

// Route::middleware( [
//     'auth:sanctum',
//     config( 'jetstream.auth_session' ),
//     'verified',
// ] )->post( '/new-product', [ProductController::class, 'newProduct'] )->name( 'new-product' );

// Route::middleware( [
//     'auth:sanctum',
//     config( 'jetstream.auth_session' ),
//     'verified',
// ] )->get( '/manage-product', [ProductController::class, 'manageProduct'] )->name( 'manage-product' );

Route::group( ['middleware' => ['auth:sanctum',
    config( 'jetstream.auth_session' ),
    'verified']], function ()
{

    Route::get( '/add-product', [ProductController::class, 'addProduct'] )->name( 'add-product' );

    Route::post( '/new-product', [ProductController::class, 'newProduct'] )->name( 'new-product' );

    Route::get( '/manage-product', [ProductController::class, 'manageProduct'] )->name( 'manage-product' );

} );

//done c:39

// done c-38