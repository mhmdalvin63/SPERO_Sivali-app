<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
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
                return redirect()->route('kb_index');
            }else{
                return redirect()->route('login');
            }
        }else{
            return redirect()->route('login');
        }
   }

   public function logout(){
    Auth::logout();
    return redirect()->route('login');
   }
}
