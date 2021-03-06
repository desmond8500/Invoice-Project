<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminlte3Controller extends Controller
{
    public $configFile = "src/template/adminlte/config/config.json";
    public $assets = "adminlte";


    public function getHead($tile = "Adminlte3", $link = "0 AdminLte3/index/head", $favicon = "")
    {
        $head = json_decode('{
            "link": "0 AdminLte3/index/head",
            "title": "Invoicing",
            "favicon": ""
        }');

        return $head;
    }
    public function getSidebar()
    {
        $sidebar = json_decode('{
            "route": "admin",
            "logo": "adminlte/img/AdminLTELogo.png",
            "name": "Invoicing",
            "menus": [
                { "name": "Clients",        "route": "clients", "icon": "fa-user" },
                { "name": "Utilisateurs",   "route": "users", "icon": "fa-user" },
                {
                    "name": "Test",
                    "icon": "fa-folder",
                    "route": [
                        {
                            "name": "Tous les Projets",
                            "route": "projets",
                            "icon": "fa-folder"
                        },
                        {
                            "name": "Tous les Devis",
                            "route": "devis",
                            "icon": "fa-file"
                        },
                        {
                            "name": "Tous les Contacts",
                            "route": "contacts",
                            "icon": "fa-id-card"
                        }
                    ]
                }
            ]
        }');

        return $sidebar;
    }
}
