<?php

namespace App\Http\Controllers;

use App\Models\MessageSent;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        // Aquí deberás agregar la lógica necesaria para mostrar la lista de mensajes enviados.
        $messages = MessageSent::all();

        return view('messages.list', ['messages' => $messages]);
    }

}
