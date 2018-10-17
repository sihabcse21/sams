<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Status extends Model
{
    use Notifiable;

    public $timestamps = true;

    protected $fillable = [
        'name', 'code',
    ];
}
