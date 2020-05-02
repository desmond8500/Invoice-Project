<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Devis;
use App\Models\Projet;
use Illuminate\Http\Request;
use App\User;

class InvoicesAPIController extends Controller
{
    public function index()
    {
        $response = array(
            'success'=> true,
            'data' => 'hello'
        );
        return response()->json($response);
    }
    public function list($data,$id=null)
    {
        $success = true;
        switch ($data) {
            case 'clients':
                $datas = Client::all();
                break;
            case 'projets':
                $datas = Projet::where('client_id',$id)->get();
                break;
            case 'devis':
                $datas = Devis::where('project_id', $id)->get();
                break;
            case 'contacts':
                $datas = Contact::where('client_id', $id)->get();
                break;

            default:
                $success = false;
                $datas = null;
                break;
        }
        $response = array(
            'success'=> $success,
            'data' => $datas
        );
        return response()->json($response);
    }
}
