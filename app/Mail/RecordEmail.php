<?php

namespace App\Mail;

use App\Models\Record;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecordEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected Record $record;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Record $record)
    {
        $this->record = $record;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.email', ['record' => $this->record]);
    }
}
