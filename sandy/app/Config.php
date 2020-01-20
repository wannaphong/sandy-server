<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Config extends Model
{
    //
    public static function addConfigAssistant($data){
        return DB::table('config_assistant')
        ->insert($data);
    }
    public static function getconfig($aid){
        return DB::table('config_assistant')->where('assistantid', '=', $aid)->first();
    }
    public static function getwificonfig($aid){
        return DB::table('config_assistant')->where('assistantid', '=', $aid)->first()->wifi_config;
    }
}
