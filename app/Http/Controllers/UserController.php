<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $validate = $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'Password' => 'required|min:8|max:20',
            'Address' => 'required|max:255',
            'Phone' => 'required|numeric',
        ]);

        if ($validate) {
            $currUser = Auth::user();
            $currUser->update([
                $currUser->name = $request->Name,
                $currUser->email = $request->Email,
                $currUser->address = $request->Address,
                $currUser->phone = $request->Phone,
                $currUser->password = Hash::make($request->Password),
            ]);
            return redirect()->route('home');
        } else {
            return $this->update_page()->withErrors($validate);
        }
    }

    public function update_page(){
        $title = 'Edit Profile';
        return view('pages.editProfile',compact('title'));
    }

    public function register(Request $request){
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'Password' => 'required|min:8|max:20',
            'Address' => 'required|max:255',
            'Phone' => 'required|numeric',
        ]);

        $newUser = new User();
        $newUser->name = $request->Name;
        $newUser->email=$request->Email;
        $newUser->address=$request->Address;
        $newUser->phone=$request->Phone;
        $newUser->password=Hash::make($request->Password);
        $newUser->role = 'Customer';
        $newUser->save();

        return redirect()->route('login');
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email'=>'required|email',
            'password' => 'required|min:8|max:20'
        ]); 
        if (!Auth::attempt($credential,true)){
            return redirect()->back()->withErrors('Invalid Credential');
        }
        return redirect()->intended('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('home');
    }

    public function index_login(){
        $title = "login";
        return view('authentication.login', compact('title'));
    }

    public function index_register(){
        $title = "register";
        return view('authentication.register', compact('title'));
    }
}
