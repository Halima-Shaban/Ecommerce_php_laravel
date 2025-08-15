<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('front.auth.login');
    }


    public function loginSubmit(Request $request){
       $credentials= $request->validate(
            [
                'email'=>'email|required',
                'password'=>'required|min:4',

            
            ],[
                'email.email' => 'password or email are not correct',
                'email.required' => 'password or email are not correct',
                'password.min' => 'password or email are not correct',
                'password.required' => 'password or email are not correct',

            ]
            );
        // dd($credentials);

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['password','password or email are not correct']);
        }
        return redirect()->route('products');
    }

    public function register(){
        return view('front.auth.register');
    }


       public function createNewUser(Request $request){
       $data= $request->validate(
            [
                'name'=>'string|required',
                'email'=>'email|required',
                'password'=>'required|min:4',

            
            ]
            );
            User::create($data);
            return redirect()->route('auth.login');

}

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('auth.login');

    }



  
}