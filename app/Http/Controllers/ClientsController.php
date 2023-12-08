<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function clients(){
        $clients = Clients::get();
        return view();
    }
}
