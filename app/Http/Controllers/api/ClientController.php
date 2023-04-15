<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function getAllClients() {
        $clients = Client::orderBy("created_at")
        ->get();

        return $clients;
    }

    
}
