<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function customer_list(){ 
        $users = new User;
        $data = $users->all(); 
        return view ('/admin/customer-list', ['users' => $data]); //changed from admin to dashboard
    }
}
