<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SchClass extends Model
{
    use Notifiable, Selectable;

    public $timestamps = true;

    protected $fillable = [
        'name', 'code', 'description', 'status_id'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    protected function selectKey()
    {
        return 'name';
    }
}
