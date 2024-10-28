<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function login()
    {
       
        return view('frontend.login');
    }

    
    public function signup(){
        return view('frontend.signup');
    }

    public function postSignup(Request $request){
       $incomingFields = $request->validate([
        'name' => 'required',
        'password' => 'required',
        'email' => 'required|email|unique:users'
       ]);
       $incomingFields['password'] = Hash::make($incomingFields['password']);
       
       if ($saved = User::create($incomingFields)){
         
        return redirect(route('login'));
       }else{
        return Redirect::back()->withErrors(['msg' => 'signup failed']);
       }
        
       
       
    }
     
    public function postLogin(Request $request){
          $incomingFields = $request->validate([
             'email' => 'required|email',
            'password' => 'required'
         ]);

         if (Auth::attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();

            return redirect(route('frontend.new'));
         }else{
            return back()->withErrors(['msg' => 'login failed please check your credentials']);
         }
         
    }
}
