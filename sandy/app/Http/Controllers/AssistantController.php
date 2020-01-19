<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Assistant;
class AssistantController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function formAdd(){
        return view("add");
    }
    public function postAdd(Request $req){
        $model=$req->input("model");
        $key=Str::uuid()->toString();
        $data=array('model'=>$model,'key'=>$key,'created_at'=>now(),'updated_at'=>now());
        $add= Assistant::addAssistant($data);

        return redirect("home");
    }
}
