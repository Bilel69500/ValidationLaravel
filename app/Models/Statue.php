<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statue extends Model
{
    public static function addOne($request){
        $Statue = new statue;
        $Statue->name = $request->name;
        $Statue->country = $request->country;
        $Statue->estimation = $request->estimation;
        $Statue->creation_date = $request->creation_date;
        $Statue->artist = $request->artist;
        $Statue->save();
        
        }

        public static function deleteOne($request){
            Statue::destroy($request->id);
            return;
        }
        public static function getAll(){
            $Statue = statue::All();
            return $Statue;
            
        }

        public static function updateOne($request) {
            $Statue = statue::find($request->id);
            $Statue->name = $request->name;
            $Statue->country = $request->country;
            $Statue->estimation = $request->estimation;
            $Statue->creation_date = $request->creation_date;
            $Statue->artist = $request->artist;
            $Statue->save();
            return;
        }
}
