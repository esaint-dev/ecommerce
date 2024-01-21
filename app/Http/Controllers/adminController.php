<?php

namespace App\Http\Controllers; 
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){ 
        $users = new User;
        $data = $users->all(); 
        return view ('admin', ['users' => $data]); //changed from admin to dashboard
    }

    public function sidebarAll(){
        return view('components/sidebarAll');
    }


}
