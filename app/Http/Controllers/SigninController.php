<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function login(){
        return view('backEnd.login');
       }
    
       public function postlogin(Request $request){
    
            $input = $request->all();
    
            $this->validate($request, [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:8',
            ]);
    
            $credentials = array(
                'email' => $input['email'],
                'password' => $input['password'],
            );
    
            if(Auth::attempt($credentials)){
                if(auth()->user()->level == 'admin'){
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('signin');
                }
            }else{
                return redirect()->route('signin');
            }
       }
    
       public function logout(){
        Auth::logout();
        return redirect()->route('signin');
       }
}
