<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contact;
use Hash;
use Auth;

class AdminController extends Controller
{
    //Admin Dashboard
    public function index(){
        $user_count = User::where('type','user')->count();
        $trainer_count = User::where('type','trainer')->count();
        return view('backend.admin.index',compact(['user_count','trainer_count']));
    }

    //Show users list
    public function usersList(){
        $users = User::select('id','name','phone','email')->where('type','user')->get()->toArray();
        return view('backend.admin.users',compact('users'));  
    }

    //show trainers
    public function trainerList(){
        $trainers = User::select('id','name','phone','email')->where('type','trainer')->get()->toArray();
        return view('backend.admin.trainers',compact('trainers')); 
    }

    //show add trainer form
    public function addTrainerForm(){
        return view('backend.admin.add-trainer');
    }

    //Add trainers
    public function add_trainer(Request $request){
        if($request->ajax()){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required',
                'password' => 'required|min:6',
            ]);
               
            $data = $request->all();
            $submit_trainer = $this->create($data);
        
            if ($submit_trainer) {
                return response()->json(['success'=>true,'data'=>$data]);
            }
            return response()->json(['success'=>false]);
            }
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'type' => $data['type'],
        'password' => Hash::make($data['password'])
      ]);
    }

    //Delete Trainers
    public function destroyTrainer($id)  
    {
        $trainer = User::find($id);  
        $trainer->delete();

        return redirect()->route('admin_trainers');
    }

    //Delete Users
    public function destroyUser($id)  
    {
        $user = User::find($id);  
        $user->delete();

        return redirect()->route('admin_users');
    }

    //Delete Contact form Users
    public function destroyContactUser($id)  
    {
        $user = contact::find($id);  
        $user->delete();

        return redirect()->route('plans');
    }
}