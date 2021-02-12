<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;



class AdminController extends Controller
{
    function create(){
        $user = User::all()->where('roleid',1);
        return View::make('productManagement.admin.list', ['users' => $user]);
       
    }
    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ], [
            'name.required' => 'Name is Required',
            'email.required' => 'email is Required',
            'password.required' => 'password is Required',
        ]);
        $user = new User;
        $user ->roleid = config('product.role.admin');  
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin/list');
    }
    function Index()
    {
       
        return view('productManagement.admin.create');
    }
    function edit($id){
        $user = User::find($id);
        return View::make('productManagement.admin.edit',['data' => $user]);
    }
    function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ], [
            'name.required' => 'Name is Required',
            'email.required' => 'email is Required',
            'password.required' => 'password is Required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        return redirect()->route('admin/list');
    }
    function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin/list');
    }
    
}
