<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserAssistant extends Model
{
    //
    public static function get_all($uid){
        return DB::table('user_assistant')->where('userid', '=', $uid)->get();
    }
    public static function find_aid($code){
        return DB::table('assistant')->where('key', '=', $code)->first()->assistantid;
    }
    public static function check($aid){
        $user = DB::table('user_assistant')->where('assistantid', '=',$aid)->first();
        if ($user === null) {
            return true;
        }
        else{
            return false;
        }
    }
    public static function regAssistant($data){
        return DB::table('user_assistant')
        ->insert($data);
    }
}
