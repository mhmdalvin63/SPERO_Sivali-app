<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SigninController extends Controller
{
    public function adminlogin()
    {
     return view('backEnd.login');
    }

    public function postadmin(Request $request)
    {
        //  Session::flash('email', $request->email);
         $this->validate($request, [
             'email' => 'required|email|exists:users,email',
             'password' => 'required|min:8',
         ],[
             'email' => 'Email Harus Diisi',
             'email.email' => 'Format Email Salah',
             'password' => 'Password Harus Diisi',
             'password.min' => 'Password Harus Diisi Minimal 8 Karakter',
        ]);
 
         $infologin = [ 
             'email' => $request->email,
             'password' => $request->password,
         ];
 
         if(Auth::attempt($infologin)){
             if(auth()->user()->level == 'admin'){
                 return redirect()->route('dashboard');
             }
             else{
                 return redirect('/signin')->with('error', 'Username atau Password Salah!');
             }
         }else{
             return redirect('/signin')->with('error', 'Username atau Password Salah!');
         }
    }
 

 
    public function logoutadmin()
    {
     Auth::logout();
     return redirect('/');
    }
 }
 