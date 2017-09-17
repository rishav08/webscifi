<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'activities';
    protected $fillable = [
        'name', 'description', 'max_capacity', 'start', 'end', 'slot_length'
    ];
}
