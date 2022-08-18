<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\SiteContato;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    protected $model = SiteContato::class;

    public function definition()
    {
        $model = [
            'nome' => fake()->name(),
            'telefone' => fake()->tollFreePhoneNumber(),
            'email'=> fake()->unique()->safeEmail(),
            'motivo_contatos_id' => fake()->randomElement(['1', '2', '3']),
            'mensagem' => fake()->text(200)
        ];
        return $model;
    }
}
