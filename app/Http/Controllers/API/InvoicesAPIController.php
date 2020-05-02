<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Devis;
use App\Models\Projet;
use Illuminate\Http\Request;
use App\User;

class InvoicesController extends AppBaseController
{
    public function index(){
        return 'hello';
    }
}
