<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;
use Illuminate\Support\Facades\DB;
class ConfigController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function getid($key){
        return DB::table('assistant')->where('key', '=', $key)->first()->assistantid;
    }

    public static function getprovince($key){
        return DB::table('config_assistant')->where('assistantid', '=', Config::getid($key))->first()->province;
    }
    public static function getwificonfig($key){
        return DB::table('config_assistant')->where('assistantid', '=', Config::getid($key))->first()->wifi_config;
    }
    public static function getlinenotify($key){
        return DB::table('config_assistant')->where('assistantid', '=', Config::getid($key))->first()->linenotify;
    }
    public static function getdistrict($key){
        return DB::table('config_assistant')->where('assistantid', '=', Config::getid($key))->first()->district;
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
