<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Attendance extends Model
{
    use Notifiable, Selectable;

    public $timestamps = true;

    protected $fillable = [
        'class_id', 'subject_id', 'student_id', 'is_present', 'present_date','created_by','updated_by',
    ];

    public function class()
    {
        return $this->belongsTo(SchClass::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
