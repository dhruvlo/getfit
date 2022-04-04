<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    
    public function dashboard(){
        if(Auth::check()){
            return view('backend.user.dashboard');
        }
  
        return redirect()->route("home");
    }

    public function payment(){
        if(Auth::check()){
            return view("backend.user.payment");
        }
    }
}
