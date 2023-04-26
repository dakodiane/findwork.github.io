<?php

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DesactivationCompte extends Mailable
{
    use Queueable, SerializesModels;

    public $recruteurs;

    public function __construct($recruteurs)
    {
        $this->recruteurs = $recruteurs;
    }

    public function build()
    {
        return $this->view('emails.desactivation-compte');
    }
}
