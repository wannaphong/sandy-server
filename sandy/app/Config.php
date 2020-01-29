<?php

namespace App;
use Illuminate\Http\Request;
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
    public static function getid($key){
        return DB::table('assistant')->where('key', '=', $key)->first()->assistantid;
    }

    public static function updatedata(Request $request){
        $id = $request->input('id');
        $house_number = $request->input('house_number');
        $alley = $request->input('alley');
        $village = $request->input('village');
        $subdistrict = $request->input('subdistrict');
        $district = $request->input('district');
        $province = $request->input('province');
        $linenotify = $request->input('linenotify');
        return DB::table('config_assistant')->where('id',$id)->update(array(
    'house_number'=>$house_number,
    'alley'=>$alley,
    'village'=>$village,
    'subdistrict'=>$subdistrict,
    'district'=>$district,
    'province'=>$province,
    'linenotify'=>$linenotify
));

    }
}
