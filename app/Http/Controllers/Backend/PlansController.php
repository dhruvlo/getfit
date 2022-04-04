<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlansController extends Controller
{
    public function index(){
        $plans = Plan::select('id','duration','price')->orderBy('duration', 'ASC')->get()->toArray();
        return view('backend.admin.plans',compact('plans'));
    }

    public function addPlan(Request $request){
            $request->validate([
                'duration' => 'required',
                'price' => 'required',
            ]);
               
            $data = $request->all();
            $submit_plan = $this->create($data);
        
            return redirect()->route('plans');
    }

    public function create(array $data){
      return Plan::create([
        'duration' => $data['duration'],
        'price' => $data['price']
      ]);
    }

    public function destroyPlan($id){
        $plan = Plan::find($id);  
        $plan->delete();

        return redirect()->route('plans');
    }
}
