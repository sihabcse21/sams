<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use Notifiable, Selectable;

    public $timestamps = true;

    protected $fillable = [
        'name', 'code', 'description', 'section', 'class_id', 'status_id'
    ];

    public function class()
    {
        return $this->belongsTo(SchClass::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    protected function selectKey()
    {
        return 'name';
    }
}
