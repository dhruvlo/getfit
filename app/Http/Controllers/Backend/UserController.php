<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserPlan;
use App\Models\Plan;

class UserController extends Controller
{
    
    public function dashboard(){
        $is_plan = UserPlan::select('plan_id')->where('user_id',auth()->user()->id)->first();
        if($is_plan){
            $purchsed_plan = Plan::leftJoin('user_plans','plans.id','=','user_plans.plan_id')->select('plans.id','plans.duration','plans.price','user_plans.created_at','user_plans.status')->where('plans.id',$is_plan['plan_id'])->first();
            return view('backend.user.dashboard',compact(['is_plan','purchsed_plan']));
        }else{
            return view('backend.user.dashboard',compact(['is_plan']));
        }
    }

    public function payment(){
        if(Auth::check()){
            return view("backend.user.payment");
        }
    }

    public function plan(){
        $is_plan = UserPlan::select('id','user_id','plan_id','status')->where('user_id',auth()->user()->id)->first();
        $plans = Plan::select('id','duration','price')->orderBy('duration','asc')->get()->toArray();
        if($is_plan){
            
            $purchsed_plan = Plan::leftJoin('user_plans','plans.id','=','user_plans.plan_id')->select('plans.id','plans.duration','plans.price','user_plans.created_at')->where('plans.id',$is_plan['plan_id'])->first();
            return view("backend.user.plan",compact(['plans','is_plan','purchsed_plan']));
        }else{
            return view("backend.user.plan",compact(['is_plan','plans']));
        }
    }

    public function addPlan(Request $request){
        if($request->ajax()){
            $request->validate([
                'selected_plan' => 'required',
            ]);

            $addUserplan = UserPlan::create([
                'plan_id' => $request->selected_plan,
                'user_id' => Auth::user()->id,
                'status' => 1,
            ]);

            if ($addUserplan) {
                return response()->json(['success'=>true]);
            }else{
                return response()->json(['success'=>false]);
            }
        }
    }
}
