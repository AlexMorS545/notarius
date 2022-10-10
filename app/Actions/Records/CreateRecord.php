<?php

namespace App\Actions\Records;

use App\Models\Record;
use Illuminate\Support\Carbon;

class CreateRecord
{
    public function __invoke($data)
    {

        $record = Record::create([
            'user_id' => $data['user_id'],
            'type' => $data['type'],
            'recorded_at' => Carbon::parse($data['recorded_at'])->toDateTimeString(),
        ]);

        return $record;
    }
}
