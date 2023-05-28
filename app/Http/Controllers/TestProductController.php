<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\TestProduct;
use Illuminate\Support\Facades\DB;

class TestProductController extends Controller
{
    public function getTestDetail () {
        $product_items = TestProduct::all();
        return view('test_detail', compact('product_items'));
    }
=======

class TestProductController extends Controller
{
    //
>>>>>>> refs/remotes/origin/feature/Details-screen
}
