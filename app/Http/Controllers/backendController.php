<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class backendController extends Controller
{
    public function logout(){
            auth::logout();

            return redirect()->route('index');
    }

    public function index(){
        $users = User::all();
        return view('backend.users.all_users' , compact('users'));
    }
}
