<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManageUserCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $user = User::where('level', 'user')->get();
        return view('backEnd.user.index', compact('user', 'userId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
        ],[
            'name' => 'Input Nama User',
            'email' => 'Input email User',
            'password' => 'Input Password Minimal 8 Karakter'
        ]);

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email =$request->email;
        $newUser->password =  bcrypt($request->password);
        $newUser->level = 'user';
        $newUser->save();

        return redirect('manage_user');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $useredit = User::find($id);
        return view('backEnd.user.edit', compact('useredit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('manage_user')->with('success', 'Data deleted successfully');
    }

    public function resetpassword(Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        $user->password = bcrypt('password123');
        $user->update();

        return redirect('manage_user')->with('Password Has Been Change');
    }
}
