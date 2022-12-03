<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class mailer extends Mailable
{
    use Queueable, SerializesModels;
    private $data = [];

   
    public function __construct($data)
    {
        $this->data=$data;
    }

//     public function build()
//     {
//         return $this->from('finefood@gmail.com','Fine Food Restaurant')
//         ->subject($this->data['subject'])
//         ->view('emails.index')->with('data',$this->data)
// ;
//     }
    public function build()
    {
        return $this -> from('umuhozaaimee12@gmail.com','UMWEZIFS')
        ->subject($this->data['subject'])
        ->view('emails.index')->with('data',$this->data);
    }
}
