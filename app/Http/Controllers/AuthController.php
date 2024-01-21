<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function register(){
        return view('register');
        
    }

    public function login(){
        return view('login');
   
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }

    public function registration(Request $request){
        $request->password = bcrypt ($request->password);
        
        $user = new User;
        $data = [
            "name" => $request->name, 
            "password" => $request->password,
            "email" => $request->email 
        ];

        if (!$user->create($data))
        {
            return view('register');
        }
        else{
                return redirect ('/home'); //changed from admin to dashboard
            }

    }

     

    public function logging(Request $request){
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/home');
        }

        //Authentication failed
        return back()->withErrors([
            'password' => 'Invalid credentials',
        ]);

        // return back()->withErrors('Invalid credentials');
    }

    
}




    
    
 






