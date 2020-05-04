<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Devis;
use App\Models\Devis_input;
use App\Models\Projet;
use App\Models\Projet_categorie;
use Illuminate\Http\Request;
use PDF;

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
        // dd($request);

        $landing = array(
            "landing_design" => "landing_design",
            "landing_form" => "landing_form",
            "landing_hebergement" => "landing_hebergement",
            "landing_domaine" => "landing_domaine",
            "landing_seo" => "landing_seo",
            "landing_https" => "landing_https"
        );

        $body = array(
            'landing' => $landing
        );

        $body = json_encode($body);


        $devis = Devis::find($request->id);
        $devis->body = $body;
        $devis->save();

        return redirect()->back();
    }

    public function initInput(){
        $contents = json_decode('[
            { "slug": "landing_design",      "domaine": "Informatique", "categorie":"Landing page", "name": "Theme",          "prix": "1000", "description": "Thème qui sera appliqué à la page"},
            { "slug": "landing_form",        "domaine": "Informatique", "categorie":"Landing page", "name": "Formulaires",    "prix": "1000", "description": "Les formulaires de commentaire, de newletter etc"},
            { "slug": "landing_hebergement", "domaine": "Informatique", "categorie":"Landing page", "name": "Hébergement",    "prix": "1000", "description": "Serveur en ligne"},
            { "slug": "landing_domaine",     "domaine": "Informatique", "categorie":"Landing page", "name": "Nom de domaine", "prix": "1000", "description": "L\'adresse en ligne"},
            { "slug": "landing_seo",         "domaine": "Informatique", "categorie":"Landing page", "name": "Référencement",  "prix": "1000", "description": "Permet mettre en avant la page sur internet"},
            { "slug": "landing_https",       "domaine": "Informatique", "categorie":"Landing page", "name": "Sécutité",       "prix": "1000", "description": "L\'adresse en ligne"}
        ]');

        foreach ($contents as $key => $content) {
            $cat = new Devis_input();
            $cat->slug = $content->slug;
            $cat->domaine = $content->domaine;
            $cat->categorie = $content->categorie;
            $cat->prix = $content->prix;
            $cat->description = $content->description;
            $cat->save();
        }
    }

    // Initialisations
    public function init(){
        $this->initProjectCategorie();
    }

    public function devisPDF($id)
    {
        $devis = Devis::find($id);
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('0 AdminLte3.pages.devis.pdf.devis', $data);
        return $pdf->download('test.pdf');
        // return $pdf->stream();
    }

    public function showPDF($id)
    {
        $devis = Devis::find($id);
        $hide = true;
        return view('0 AdminLte3.pages.devis.pdf.devis1',compact('devis', 'hide'));
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
