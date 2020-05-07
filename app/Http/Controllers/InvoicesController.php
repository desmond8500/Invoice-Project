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
        //  dd($request);

        $landing = array(
            "landing_design"        => $request->landing_design,
            "landing_form"          => $request->landing_form,
            "landing_hebergement"   => $request->landing_hebergement,
            "landing_domaine"       => $request->landing_domaine,
            "landing_seo"           => $request->landing_seo,
            "landing_https"         => $request->landing_https
        );

        $ecommerce = array('ecommerce_ecommerce' => $request->ecommerce_ecommerce );

        $erp = array(
            "erp_design"      => $request->erp_design,
            "erp_form"        => $request->erp_form,
            "erp_hebergement" => $request->erp_hebergement,
            "erp_domaine"     => $request->erp_domaine
        );

        $mobile = array(
            "mobile_design"      => $request->mobile_design,
            "mobile_form"        => $request->mobile_form,
            "mobile_hebergement" => $request->mobile_hebergement,
            "mobile_domaine"     => $request->mobile_domaine,
            "mobile_seo"         => $request->mobile_seo,
            "mobile_https"       => $request->mobile_https,

            "mobile_auth"        => $request->mobile_auth,
            "mobile_geoloc"      => $request->mobile_geoloc,
            "mobile_langue"      => $request->mobile_langue,
            "mobile_blog"        => $request->mobile_blog,
            "mobile_gallerie"    => $request->mobile_gallerie,
            "mobile_tchatbot"    => $request->mobile_tchatbot,
            "mobile_tchat"       => $request->mobile_tchat,
            "mobile_mail"        => $request->mobile_mail
        );

        $tel = array(
            "tel_asterisk"      => $request->tel_asterisk,
            "tel_serveur"       => $request->tel_serveur,
            "tel_telephones"    => $request->tel_telephones,
            "tel_switch"        => $request->tel_switch,
            "tel_cablage"       => $request->tel_cablage,
            "tel_accessoires"   => $request->tel_accessoires
        );

        $web = array(
            "webapp_design"      => $request->webapp_design,
            "webapp_form"        => $request->webapp_form,
            "webapp_hebergement" => $request->webapp_hebergement,
            "webapp_domaine"     => $request->webapp_domaine,
            "webapp_seo"         => $request->webapp_seo,
            "webapp_https"       => $request->webapp_https,

            "webapp_auth"       => $request->webapp_auth,
            "webapp_geoloc"     => $request->webapp_geoloc,
            "webapp_langue"     => $request->webapp_langue,
            "webapp_api"        => $request->webapp_api,
            "webapp_blog"       => $request->webapp_blog,
            "webapp_gallerie"   => $request->webapp_gallerie,
            "webapp_tchatbot"   => $request->webapp_tchatbot,
            "webapp_tchat"      => $request->webapp_tchat,
            "webapp_mail"       => $request->webapp_mail
        );

        $body = array(
            'landing'   => $landing,
            'erp'       => $erp,
            'mobile'    => $mobile,
            'tel'       => $tel,
            'web'       => $web
        );

        $body = json_encode($body);


        $devis = Devis::find($request->id);
        $devis->body = $body;
        $devis->reference = $request->reference;
        $devis->statut = $request->statut;
        $devis->description = $request->description;
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
        $projet = Projet::find($devis->projet_id);
        $client = Client::find($projet->client_id);
        // dump($client);
        $hide = true;
        return view('0 AdminLte3.pages.devis.pdf.devis1',compact('devis', 'hide', 'client'));
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
