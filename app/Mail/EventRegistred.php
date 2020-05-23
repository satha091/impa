<?php

namespace App\Mail;

use App\Events;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventRegistred extends Mailable
{
    use Queueable, SerializesModels;

    public $event;

    public function __construct(Events $events)
    {
        $this->event=$events;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.registrations',['event'=>$this->event]);
    }
}
