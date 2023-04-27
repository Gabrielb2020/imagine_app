<?php

namespace App\Http\Controllers;

use App\Mail\CorreoEnviado;
use App\Models\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function enviar_correo(Request $request)
    {
        $validatedData = $request->validate([
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $correo = $validatedData['correo'];
        $mensaje = $validatedData['mensaje'];

        $correoEnviado = new CorreoEnviado($correo, $mensaje);

        // Enviar el correo electrónico
        Mail::to($correo)
            ->send($correoEnviado);

        // Guardar los datos en la base de datos
        $new_email = new MessageSent();
        $new_email->user_mail = $correo;
        $new_email->message_sent = $mensaje;
        $new_email->save();

        return redirect('/')->with('success', 'Correo enviado correctamente.');
    }
}
