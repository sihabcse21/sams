<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use Notifiable;

    public $timestamps = true;

    protected $fillable = [
        'name', 'code', 'status_id'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
