<?php

namespace App\Http\Controllers;

use Faker\Factory as Faker;
use App\Models\Client;
use App\Models\Projet;

class SeedController extends Controller
{
    public function clients() {
        $faker = Faker::create('fr_FR');

        $seed = new Client();

        $seed->compte_id    = 0;
        $seed->nom          = "$faker->company $faker->companySuffix";
        $seed->description  = $faker->text;
        $seed->adresse      = $faker->address;
        $seed->save();

        return redirect()->back();
    }
    public function projets($client_id) {
        $categorie = ['Application Web', 'Application Mobile', 'Application hybride', 'Téléphonie'];


        $rand = random_int(0, 3);



        $faker = Faker::create('fr_FR');

        $seed = new Projet();

        $seed->client_id    = $client_id;
        $seed->nom          = "projet $faker->firstname";
        $seed->description  = $faker->text;
        $seed->categorie    = $categorie[$rand];
        $seed->statut       = "Nouveau";
        $seed->save();

        return redirect()->back();
    }

    public function devis(){

    }
    public function contacts(){

    }
}
