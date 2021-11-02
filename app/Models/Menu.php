<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Menu extends Model
{
    use HasFactory;

    public static function data(){
        $menu = Storage::disk('local')->get('public/foodie.json');
        $data = json_decode($menu,true);
        return $data;
    }

    public static function findId($id){
        $data = collect(self::data())->where("id",$id)->first();
        return $data;
    }
    
}
