<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
     public function contactList(){
        $contactList = contact::select('id','name','email','message')->get()->toArray();
        return view('backend.admin.contact',compact('contactList'));
    }

    public function insertdata(Request $request){
        if($request->ajax()){
        $data = [
            'name' => $request->name,
            'email' => $request->email, 
            'message' => $request->message
        ];

        $submitted_data = contact::create($data);
        if ($submitted_data) {
            return response()->json(['success'=>true,'data'=>$data]);
        }
        return response()->json(['success'=>false]);
        }
    }
}
