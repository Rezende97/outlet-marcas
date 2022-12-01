<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Produto::all();

        return view('Product.index', ['product' => $product]);
    }
}
