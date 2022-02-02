<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name,
            'apellido'=> $this->faker->lastName,
            'direccion'=>$this->faker->streetAddress,
            'saldo'=> rand(3000, 2000),
            'limitecredito' => $this->faker->randomDigit,
            'descuento' => rand(3, 1),
        ];
    }
}
