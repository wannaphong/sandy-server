<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Assistant extends Model
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function addAssistant($data){
        return DB::table('assistant')
        ->insert($data);
    }
}
