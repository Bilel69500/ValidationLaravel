<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Statue;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class StatuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        statue::create([
            'name' => Str::random(10),
            'country' =>  Str::random(10),
            'estimation'=> random_int(2000,4000),
            'creation_date'=> random_int(1000,2000),
            'artist'=> Str::random(10),
            
        ]);

        statue::create([
            'name' => Str::random(10),
            'country' =>  Str::random(10),
            'estimation'=> random_int(2000,4000),
            'creation_date'=> random_int(1000,2000),
            'artist'=> Str::random(10),
            
        ]);

        statue::create([
            'name' => Str::random(10),
            'country' =>  Str::random(10),
            'estimation'=> random_int(2000,4000),
            'creation_date'=> random_int(1000,2000),
            'artist'=> Str::random(10),
            
        ]);
    }
}
