<?php

namespace App\Http\Controllers;

use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {

        return view( 'front.home.home', ['products' => Product::where( 'status', 1 )->orderBy( 'id', 'DESC' )->get(),
        ] );
    }

    public function productDetails( $id )
    {

        return view( 'front.home.details', [
            'product' => Product::findOrFail( $id ),
        ] );
    }
}