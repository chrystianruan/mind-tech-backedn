<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class FirstContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    public function build()
    {
        return $this->subject('Agradecemos seu contato')
                    ->view('emails.first-message');
    }

   /*  
    public function envelope()
    {
        return new Envelope(
            from: new Adress('suporte@mindtech.com.br'),
            subject: 'Agradecemos seu contato!',
        );
    }


    public function content()
    {
        return new Content(
            view: 'emails.first-message',
        );
    }


    public function attachments()
    {
        return [];
    } */
}
