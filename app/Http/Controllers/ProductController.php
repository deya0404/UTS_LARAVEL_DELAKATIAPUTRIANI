<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // TAMPIL HALAMAN PRODUCT
    public function index()
    {
        return view('products.index');
    }

    // TAMPIL FORM CREATE PRODUCT
    public function create()
    {
        return view('products.create');
    }
}