<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Registro;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        /*  Este seed es para el registro 
        $registro = new Registro();
        $registro->name = "Codybrain";
        $registro->user = "admin";
        $registro->pasword = "admin";
        $registro->status = 1;
        $registro->description = "mi primer registro";
        $registro->users_id = 1;
        $registro->url = "www.codybrai.com";
        $registro->save();*/
        Registro::factory(50)->create();
    }
}
