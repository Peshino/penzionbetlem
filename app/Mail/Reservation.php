<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class Reservation extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $emailTemplate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $emailTemplate)
    {
        $this->details = $details;
        $this->emailTemplate = $emailTemplate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Rezervace ubytování - ' . strtoupper($this->details['variant']) . ' BETLÉM')
            ->view($this->emailTemplate);
    }
}
