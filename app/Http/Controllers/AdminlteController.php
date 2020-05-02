<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Devis;
use App\Models\Projet;
use App\User;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class AdminlteController extends Controller
{
    public function index()
    {
        $linkroutes = json_decode('[
                { "id": 1, "name": "Clients", "route": "/api/clients"},
                { "id": 2, "name": "Projets", "route": "/api/projets"},
                { "id": 3, "name": "Devis", "route": "/api/devis"},
                { "id": 4, "name": "Contacts", "route": "/api/contacts"}
            ]'
        );

        return view('0 AdminLte3.pages.index',compact('linkroutes'));
    }

    public function clients()
    {
        $clients = Client::all();
        return view('0 AdminLte3.pages.clients.clients',compact('clients'));
    }

    public function projets()
    {
        $clients = Client::all();
        $projets = Projet::all();
        return view('0 AdminLte3.pages.projets.projets',compact('clients' ,'projets'));
    }
    public function devis()
    {
        $projets = Projet::all();
        $deviss = Devis::all();
        return view('0 AdminLte3.pages.devis.devis', compact('deviss', 'projets'));
    }
    public function users()
    {
        $users = User::all();
        return view('0 AdminLte3.pages.users.users',compact('users'));
    }
    public function contacts()
    {
        return view('0 AdminLte3.pages.contacts.contacts');
    }
}
