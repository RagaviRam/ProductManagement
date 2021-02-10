<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ProductController extends Controller
{
    function create(){
        return view('productManagement.layouts.app');
    }
    function dashboardAdmin(){
        return view('productManagement.admin');
    }
    function dashboardManager(){
        return view('productManagement.manager');
    }
    function dashboardCustomer(){
        return view('productManagement.customer');
    }
    function dashboardProduct(){
        $product = Product::all();
        //$product = Product::orderby("productname", "asc");
        return View::make('productManagement.product', ['users' => $product]);
    
    }
    function customerCreate(){
        return view('productManagement.customer');
    }
    function productCreate(){
        return View::make('productManagement.newProduct.create');

    }
    function productStore(Request $request){
        $request->validate([
            'productname' => 'required|min:6|max:30',
            'sku' => 'required',
            'quantity' => 'required|numeric',
            'image' => 'required|mimes:jpg,png,gif,svg,jpeg|max:2048',
        ], [
            'producttname.required' => 'Name is Required',
            'productname.min' => 'Name should be atleast :min characters',
            'prouctname.max' => 'Name should not be greater than :max characters',
            'sku.required' => 'Name is Required',
            'quantity.required' => 'Quantity is required',
            'quantity.numeric' => 'Quantity should be in number',
            'image.required' => 'Image is Required',
            'image.mimes' => 'Image must be supported format',
            'image.max' => 'Ur image should be :max characters',    
        ]);
        $fileExtension = $request->image->extension();
        $timeStamp=Carbon::now()->format('Y_m_d_H_i_s');
        $fileName = $timeStamp.'.'.$fileExtension;
        $request->image->storeAs('public/image', $fileName);
        $product = new Product;
        $product->productname = $request->productname;
        $product->SKU = $request->sku;
        $product->quantity = $request->quantity;
        $product->productimage = $fileName;
        

        $product->save();
        return redirect()->route('product/product_list');
    }
    function ProductIndex()
    {
        $product = Product::all();
        //$product = Product::orderby("productname", "asc");
        return View::make('productManagement.newProduct.list', ['users' => $product]);
        
    }
    function ProductDestroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product/product_list');
    }
}
