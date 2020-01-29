<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;

class ConfigController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function form($aid){
        $con=Config::getconfig($aid);
        return view("config",['ls'=>$con]);
    }
    public function updateData(Request $request){
        Config::updatedata($request);
        return redirect("viewsandy");
}
}
