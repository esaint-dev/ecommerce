<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $users = new User;
        $data = $users->all(); 
        return view('dashboard');
    }

    

}


