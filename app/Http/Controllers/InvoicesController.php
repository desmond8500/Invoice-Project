<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Devis;
use App\Models\Projet;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function projetslist($client_id){
        $clients = Client::all();
        $client = Client::find($client_id);
        $projets = Projet::where('client_id',$client_id)->get();
        return view('0 AdminLte3.pages.projets.projets', compact('client', 'clients', 'projets'));
    }

    public function contactslist($client_id){
        $clients = Client::all();
        $client = Client::find($client_id);
        $contacts = Contact::where('client_id',$client_id)->get();
        return view('0 AdminLte3.pages.contacts.contacts', compact('client', 'clients', 'contacts'));
    }

    public function devislist($projet_id){
        $projet = Projet::find($projet_id);
        $deviss = Devis::where('projet_id',$projet_id)->get();
        return view('0 AdminLte3.pages.devis.devis', compact('projet', 'deviss'));
    }
}
