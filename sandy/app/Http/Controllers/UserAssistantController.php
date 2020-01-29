<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAssistant;

class UserAssistantController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function formAdd(){
        return view("regsandy");
    }
    public function postAdd(Request $req){
        $code=$req->input("model");
        $name = $req->input("name");
        $userid=auth()->user()->id;
        $assistantid=UserAssistant::find_aid($code);
        //dd($assistantid);
       /* if($assistantid->isEmpty()){
            return redirect("home");
        }**/
        if(UserAssistant::check($assistantid)){
            $data=array('userid'=>$userid,'assistantid'=>$assistantid,'name'=>$name,'created_at'=>now(),'updated_at'=>now());
            UserAssistant::regAssistant($data);
            UserAssistant::regAssistantConfig(array('assistantid'=>$assistantid));
        }

        return redirect("viewsandy");
    }
    public function viewall(){
        $userid=auth()->user()->id;
        $assistantall=UserAssistant::get_all($userid);
        return view('listsandy',['products'=>$assistantall]);
    }
    public function Del($ua){
        //dd($ua);
        UserAssistant::del($ua);

        return redirect("viewsandy");
    }
}
