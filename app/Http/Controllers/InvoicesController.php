<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Devis;
use App\Models\Projet;
use App\Models\Projet_categorie;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function projetslist($client_id){
        $clients = Client::all();
        $client = Client::find($client_id);
        $projets = Projet::where('client_id',$client_id)->get();
        $hide = true;
        return view('0 AdminLte3.pages.projets.projets', compact('hide','client', 'clients', 'projets'));
    }

    public function contactslist($client_id){
        $clients = Client::all();
        $client = Client::find($client_id);
        $contacts = Contact::where('client_id',$client_id)->get();
        $hide = true;
        return view('0 AdminLte3.pages.contacts.contacts', compact('hide','client', 'clients', 'contacts'));
    }

    public function devislist($projet_id){
        $projet = Projet::find($projet_id);
        $deviss = Devis::where('projet_id',$projet_id)->get();
        $hide = true;

        $categories = json_decode('[
            { "id": "landind", "name": "Landing page" },
            { "id": "web", "name": "Application Web" },
            { "id": "mobile", "name": "Application mobile" },
            { "id": "ecommerce", "name": "Site de Ecommerce" },
            { "id": "erp", "name": "ERP" }
        ]');

        $autres = json_decode('[
            { "id": "landind", "name": "Landing page" },
            { "id": "web", "name": "Application Web" },
            { "id": "mobile", "name": "Application mobile" },
            { "id": "ecommerce", "name": "Site de Ecommerce" },
            { "id": "erp", "name": "ERP" }
        ]');

        return view('0 AdminLte3.pages.devis.devis', compact('hide','projet', 'deviss','categories'));
    }
    public function devisEdit(Request $request){
        // dump($request);
        $devis = Devis::find($request->id);
        // $devis->body = $request->body;
        $devis->save();

        return redirect()->back();
    }

    // Initialisations
    public function init(){
        $this->initProjectCategorie();
    }

    public function initProjectCategorie(){
        $categories = json_decode('[
            { "categorie": "Landing Page", "description": "1" },
            { "categorie": "Application Web", "description": "1" },
            { "categorie": "Application mobile", "description": "1" },
            { "categorie": "Ecommerce", "description": "1" },
            { "categorie": "ERP", "description": "1" }
        ]');

        foreach ($categories as $key => $categorie) {
            $cat = new Projet_categorie();
            $cat->categorie = $categorie->categorie;
            $cat->description = $categorie->description;
            $cat->save();
        }
    }
}
