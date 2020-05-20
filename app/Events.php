<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    //
    protected $table = 'event_configs';

    protected $fillable = [
        'event_title', 'event_desc', 'event_presenter_name', 'event_image', 'event_presenter_designation', 'event_presenter_org_details', 'event_date', 'event_time',
        'event_duration', 'event_meeting_link', 'event_meeting_id', 'event_meeting_password', 'event_status', 'event_category', 'created_date', 'updated_date', 'updated_by'
    ];




    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function participants()
    // {
    //     return $this->hasMany(Participants::class);
    // }

}
