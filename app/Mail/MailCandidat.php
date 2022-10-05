<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailCandidat extends Mailable
{
    use Queueable, SerializesModels;
        public $undata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->undata = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mailData = $this->undata; // Les donnés du mail à envoyer
        return $this->subject("FADILA MÉNAGE") // Le sujet
        ->view('emails.mailCandidat', compact('mailData')); // La vue
    }
}
