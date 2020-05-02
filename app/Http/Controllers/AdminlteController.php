<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
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
                { "id": 1, "name": "Tous les clients", "route": "/api/clients"},
                { "id": 2, "name": "Tous  les projets", "route": "/api/projets"},
                { "id": 3, "name": "Tous les devis", "route": "/api/devis"},
                { "id": 4, "name": "Tous les contacts", "route": "/api/contacts"}
            ]'
        );

        $clients = Client::all()->count();
        $projets = Projet::all()->count();
        $devis   = Devis::all()->count();
        $contacts = Contact::all()->count();

        $resume[] = array( 'text'=> 'Clients', 'number'=> $clients, 'icon'=>'fa-user', 'color'=>'bg-info');
        $resume[] = array( 'text'=> 'Projets', 'number'=> $projets, 'icon'=>'fa-folder', 'color'=>'bg-info');
        $resume[] = array( 'text'=> 'Devis', 'number'=> $devis, 'icon'=> 'fa-file', 'color'=>'bg-info');
        $resume[] = array( 'text'=> 'Contacts', 'number'=> $contacts, 'icon'=>'fa-id-card', 'color'=>'bg-info');

        $infoboxes = json_decode(json_encode($resume));

        return view('0 AdminLte3.pages.index',compact('linkroutes','infoboxes'));
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
        $clients = Client::all();
        $contacts = Contact::all();
        return view('0 AdminLte3.pages.contacts.contacts', compact('clients', 'contacts'));
    }
}
