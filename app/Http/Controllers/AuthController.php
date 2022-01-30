<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.registration');
    }

    public function registration(){
        $user = new User();
        $user->name = request('email');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        return redirect('/');
    }

    public function indexLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $loginData=$request->only('email', 'password');
        if (Auth::attempt($loginData)){
            return redirect('/');
        }
        return view('auth.login');
    }

    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
