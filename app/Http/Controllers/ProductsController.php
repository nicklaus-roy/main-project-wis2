<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // fetch all the products from the db
        $products = DB::table('products')->get();
        // fetch only if price is > 100
        $products = DB::table('products')->where('price', '>', '100')->get();
        // return it to the view
        return view('products.index', compact('products'));
    }
}
