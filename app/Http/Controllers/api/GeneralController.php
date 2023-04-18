<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Message;
use Mail;
use App\Mail\FirstContactMessage;

class GeneralController extends Controller
{
    public function newClientAndMessage(Request $request) {
        $checkClientExists = Client::where('email', '=', $request->email)
        ->orWhere('telephone', '=', $request->telephone)
        ->get();
        if ($checkClientExists) {
            foreach($checkClientExists as $client) {
                $message = new Message;
                $message->client_id = $client->id;
                $message->message = $request->message;
                $message->save();
                $mailData = [
                    'title' => 'Agradecemos seu contato',
                    'contact' => ''.$client->name,
                    'body' => 'Olá seja bem vindo! Obrigado pela preferência! Informamos que logo logo entraremos em contato com você'
                ];
                Mail::to(''.$client->email)->send(new FirstContactMessage($mailData));

                return response()->json([
                    "response" => "client already exists, but your message was sent"
                ], 200);
            }

        }

        $client = new Client;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->save();
        $clients = Client::orderBy('id', 'desc')->limit(1)->get("id");
        foreach($clients as $client) {
            $message = new Message;
            $message->client_id = $client->id;
            $message->message = $request->message;
            $message->save();
            $mailData = [
                'title' => 'Agradecemos seu contato',
                'contact' => ''.$request->name,
                'body' => 'Olá seja bem vindo! Obrigado pela preferência! Informamos que logo logo entraremos em contato com você'
            ];
            Mail::to(''.$request->email)->send(new FirstContactMessage($mailData));
            
            return response()->json([
                "response" => "sucessfully client registered and sent message"
            ], 200);
        }
    }


}
