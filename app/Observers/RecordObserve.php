<?php

namespace App\Observers;

use App\Models\Record;
use App\Notifications\SendUserEmail;

class RecordObserve
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\Record  $user
     * @return void
     */
    public function created(Record $record)
    {
        (new SendUserEmail($record))->send();
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\Record  $user
     * @return void
     */
    public function updated(Record $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\Record  $user
     * @return void
     */
    public function deleted(Record $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\Record  $user
     * @return void
     */
    public function restored(Record $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\Record  $user
     * @return void
     */
    public function forceDeleted(Record $user)
    {
        //
    }
}
