<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $body;
    public string $webSubject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $email, string $body, string $webSubject)
    {
        $this->name = $name;
        $this->email = $email;
        $this->webSubject = $webSubject;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('helena19.rodrigues@gmail.com', 'Helena')->subject("Contacto desde la web")->markdown('emails.webcontact');
        // return $this->view('view.name');
    }
}
