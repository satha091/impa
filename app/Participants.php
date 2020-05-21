<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    protected $table = 'event_trakers';

    protected $fillable = [
        'event_id', 'user_name', 'user_contact', 'user_email', 'user_organisation', 'user_location', 'accepted_on'
    ];


    public function events()
    {
        return $this->hasMany(Events::class);
    }

}
