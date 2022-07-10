<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view( 'admin.product.add' );
    }

    public function newProduct( Request $request )
    {

        Product::addProduct( $request );
        return redirect()->back()->with( 'message', 'Product saved scessfully' );
    }

    public function manageProduct()
    {
        return view( 'admin.product.manage', ['products' => Product::all()] );
    }
}