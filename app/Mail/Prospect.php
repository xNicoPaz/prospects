<?php

namespace App\Mail;

use App\Prospect as AppProspect;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Prospect extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Voy a ponerle el nombre de la persona en el titulo del mail
     */
    public $prospect;

    /**
     * En PHP 7.4 se puede especificar el tipo de las
     * propiedades
     */
    // public Prospect $prospect;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(AppProspect $prospect)
    {
        $this->prospect = $prospect;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.prospect');
    }
}
