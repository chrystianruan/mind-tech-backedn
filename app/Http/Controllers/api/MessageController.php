<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Message;

class MessageController extends Controller
{
    public function getAllMessages() {
        $messages = Message::select('clients.name', 'clients.email', 'clients.telephone', 'messages.message')
        ->join('clients', 'clients.id', '=', 'messages.client_id')
        ->orderBy("messages.created_at")
        ->get();

        return $messages;
    }

    public function getAllMessagesOfUser($id) {
        $messages = Message::select('clients.name', 'clients.email', 'clients.telephone', 'messages.message')
        ->join('clients', 'clients.id', '=', 'messages.client_id')
        ->where('client_id', '=', $id)
        ->orderBy("messages.created_at")
        ->get();

        return $messages;
    }
}
