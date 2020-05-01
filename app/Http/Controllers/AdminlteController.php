<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
        return view('0 AdminLte3.pages.projets.projets');
    }
    public function devis()
    {
        return view('0 AdminLte3.pages.devis.devis');
    }
    public function users()
    {
        return view('0 AdminLte3.pages.users.users');
    }
    public function contacts()
    {
        return view('0 AdminLte3.pages.contacts.contacts');
    }
}
