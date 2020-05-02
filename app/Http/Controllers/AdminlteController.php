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
                { "name": "Récupérer tous les clients", "route": "/api/clients"},
                { "name": "Récupérer tous les projets", "route": "/api/projets"},
                { "name": "Récupérer tous les projets d\'un client", "route": "/invoices/list/projets/{id}"},
                { "name": "Récupérer tous les devis", "route": "/api/devis"},
                { "name": "Récupérer tous les devis d\'un projet", "route": "/invoices/list/devis/{id}"},
                { "name": "Récupérer tous les contacts", "route": "/api/contacts"},
                { "name": "Récupérer tous les contacts d\'un projet", "route": "/invoices/list/contacts/{id}"}
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
        $hide = false;
        return view('0 AdminLte3.pages.projets.projets',compact('hide','clients' ,'projets'));
    }
    public function devis()
    {
        $projets = Projet::all();
        $deviss = Devis::all();
        $hide = false;
        return view('0 AdminLte3.pages.devis.devis', compact('hide', 'deviss', 'projets'));
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
        $hide = false;
        return view('0 AdminLte3.pages.contacts.contacts', compact('hide', 'clients', 'contacts'));
    }
}
