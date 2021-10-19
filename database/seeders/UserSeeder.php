<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*  Este seed es para users*/ 
        $user =  new User();
        $user-> name = "admin";
        $user->email = "admin@codybrain.com";
        $user->password = "admin";
        $user->save();
    }
}
