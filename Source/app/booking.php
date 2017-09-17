<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'booking';
    protected $fillable = [
        'user_id', 'activity_id', 'no_of_people', 'slot_start_time', 'slot_end_time', 'status'
    ];
}
