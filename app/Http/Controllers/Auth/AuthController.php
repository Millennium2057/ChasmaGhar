<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\AuthenticateUser;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(){

        return view('frontend.pages.login');
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function registerUser(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);
            $hashedPassword = Hash::make($validatedData['password']);
            $register = new User();
            $register->name = $request->name;
            $register->email = $request->email;
            $register->password = $hashedPassword;
          
            $register->save();
         
            return redirect('/login');
        } catch (Exception $ex) {
            return back()->with('error', 'An error occurred while processing your request. ' . $ex->getMessage());
        }
    }
}
