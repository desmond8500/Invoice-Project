<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Devis;
use Faker\Generator as Faker;

$factory->define(Devis::class, function (Faker $faker) {

    return [
        'projet_id' => $faker->word,
        'reference' => $faker->word,
        'description' => $faker->word,
        'statut' => $faker->word,
        'body' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
