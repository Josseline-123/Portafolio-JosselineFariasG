<?php

namespace Tests\Feature;

use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactoTest extends TestCase
{
    public function test_contact_form_sends_to_the_configured_mail_address(): void
    {
        Mail::fake();

        config(['mail.from.address' => 'contacto@ejemplo.com']);

        $response = $this->post('/contacto', [
            'nombre' => 'Juan',
            'email' => 'juan@example.com',
            'mensaje' => 'Hola desde la prueba',
        ]);

        $response->assertRedirect('/contacto');

        Mail::assertSent(ContactoMail::class, function ($mail) {
            return $mail->hasTo(config('mail.from.address'));
        });
    }

    public function test_contact_form_shows_the_smtp_error_message_when_sending_fails(): void
    {
        Mail::shouldReceive('to')->once()->andThrow(new \Exception('SMTP connection failed'));

        $response = $this->from('/contacto')->post('/contacto', [
            'nombre' => 'Juan',
            'email' => 'juan@example.com',
            'mensaje' => 'Hola desde la prueba',
        ]);

        $response->assertRedirect('/contacto');
        $response->assertSessionHasErrors(['email']);
        $response->assertSessionHas('errors');
    }
}
