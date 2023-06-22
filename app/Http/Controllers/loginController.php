<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
   public function index()
   {
    return view('login');
   }

   public function adminlogin()
   {
    return view('backEnd.login');
   }

   public function register()
   {
    return view('register');
   }
   
   public function postregister(Request $request)
   {
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|min:8'
    ],[
        'name' => 'Isi Nama User',
        'email' => 'Isi email User',
        'password' => 'Isi Password Minimal 8 Karakter'
    ]);

    $newUser = new User();
    $newUser->name = $request->name;
    $newUser->email =$request->email;
    $newUser->password =  bcrypt($request->password);
    $newUser->level = 'user';
    $newUser->save();

    return redirect('/login');
   }

//    public function sendOtp($newUser)
//    {
//         $otp = rand(100000,999999);
//         $time = time();

//         EmailVerified::updateOrCreate(
//             ['email' => $newUser->email],
//             [
//                 'email' => $newUser->email,
//                 'otp' => $otp,
//             ]
//         );

//         $data['email'] = $newUser->email;
//         $data['title'] = 'Email Verification';
//         $data['body'] = 'Your OTP Verification is: '.$otp;
//         Mail::send('mailVerification',['data'=>$data],function($message) use ($data){
//             $message->to($data['email'])->subject($data['title']);
//         });
//    }

//    public function verification($id)
//    {
//         $user = User::find($id);
//         $email = $user->email;

//         $this->sendOtp($user);

//         return view('verification', compact('email'));
//    }

//    public function verified(Request $request)
//    {

//    }

   public function authenticate(Request $request)
   {
        Session::flash('email', $request->email);
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        $infologin = [ 
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(auth()->user()->level == 'user'){
            return redirect('/');
            }
            else{
                return redirect('/login');
            }
        }else{
            return redirect('/login')->withErrors('Username atau Password Salah!');
        }
   }

   public function postadmin(Request $request)
   {
        Session::flash('email', $request->email);
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
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
                return redirect('/signin');
            }
        }else{
            return redirect('/signin')->withErrors('Username atau Password Salah!');
        }
   }

   public function logout()
   {
    Auth::logout();
    return redirect('/');
   }

   public function logoutadmin()
   {
    Auth::logout();
    return redirect('/');
   }
}
