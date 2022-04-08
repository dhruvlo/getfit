<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserTrainer;

class TrainerController extends Controller
{
    public function index(){
        return view('backend.trainer.index');
    }

    public function showAssignTrainer(){
        $trainers = User::select('id','name','phone','email')->where('type','trainer')->get()->toArray();
        $users = User::select('id','name','phone','email')->where('type','user')->get()->toArray();

        return view('backend.admin.assign',compact(['trainers','users']));
    }

    public function addAssignTrainer(Request $request){
        if($request->ajax()){
            $request->validate([
                'assign_trainer' => 'required',
                'get_user' => 'required',
            ]);


            if (UserTrainer::where('user_id', '=', $request->get_user)->exists()) {
                //update trainer id
                $addTrainertoUser = UserTrainer::where('user_id', '=', $request->get_user)->update([
                    'trainer_id' => $request->assign_trainer,
                 ]);
            }else{
                //create new
                $addTrainertoUser = UserTrainer::create([
                    'trainer_id' => $request->assign_trainer,
                    'user_id' => $request->get_user,
                ]);
            }

            if ($addTrainertoUser) {
                return response()->json(['success'=>true]);
            }else{
                return response()->json(['success'=>false]);
            }
        }
    }
}