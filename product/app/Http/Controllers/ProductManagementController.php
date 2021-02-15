<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class ProductManagementController extends Controller
{
    
        function productCreate(){
            $product = Product::all();
            //$product = Product::orderby("productname", "asc");
            return View::make('productManagement.frontend.shopping', ['users' => $product]);
        
        }

    function adminErr(){
        return view('productManagement.frontend.adminerr');
    }
    function managerErr(){
        return view('productManagement.frontend.managererr');
    }

}
