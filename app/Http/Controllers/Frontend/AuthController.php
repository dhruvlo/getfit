<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function customLogin(Request $request){
    if($request->ajax()){
            $request->validate([
                'loginEmail' => 'required',
                'loginPassword' => 'required',
            ]);
    
            $credentials = [
                'email' => $request->loginEmail,
                'password' => $request->loginPassword,
            ];

            if (Auth::attempt($credentials)) {
                $user_type = Auth::user()->type;
                return response()->json(['success'=>true,'user_type'=>$user_type]);
            }else{
                return response()->json(['success'=>false]);
            }
        }
    }

    public function customRegistration(Request $request)
    {
        if($request->ajax()){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required',
                'password' => 'required|min:6',
            ]);
               
            $data = $request->all();
            $check = $this->create($data);

            if ($check) {
                return response()->json(['success'=>true]);
            }else{
                return response()->json(['success'=>false]);
            }
        }
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect()->route('home');
    }
}