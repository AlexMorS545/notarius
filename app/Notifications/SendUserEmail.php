<?php

namespace App\Notifications;

use App\Mail\RecordEmail;
use App\Models\Record;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendUserEmail implements Send
{
    protected Record $record;

    public function __construct(Record $record)
    {
        $this->record = $record;
    }

    public function send()
    {
        Mail::to($this->record->user->email)->send(new RecordEmail($this->record));
    }
}
