<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;



class ManagerController extends Controller
{
    function create(){
        $user = User::all()->where('roleid',config('product.role.manager'));
        return View::make('productManagement.manager.list', ['users' => $user]);
       
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
        $user ->roleid = config('product.role.manager');  
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('manager/list');
    }
    function Index()
    {
       
        return view('productManagement.manager.create');
    }
    function edit($id){
        $user = User::find($id);
        return View::make('productManagement.manager.edit',['data' => $user]);
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
        return redirect()->route('manager/list');
    }
    function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('manager/list');
    }
    
}
