<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CorreoEnviado extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje;
    public $correo;

    /**
     * Create a new message instance.
     *
     * @param  string  $mensaje
     * @return void
     */
    public function __construct($correo, $mensaje)
    {
        $this->correo = $correo;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */



    public function build()
    {
        return $this->subject('Hola este es un nuevo correo de prueba')
            ->view('emails.enviado')
            ->with([
                'correo' => $this->correo,
                'mensaje' => $this->mensaje
            ]);
    }
}
