<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $email;
    public $mensaje;

    public function __construct($nombre, $email, $mensaje)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nuevo mensaje desde mi portafolio',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contacto',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

