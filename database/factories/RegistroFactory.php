<?php

namespace Database\Factories;

use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name,
            'url'=>$this->faker->email,
            'user'=>$this->faker->name,
            'pasword'=>'admin',
            'status'=> 1,
            'description'=>$this->faker->paragraph(),
            'users_id'=>1

        ];
    }
}
