<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class StudentSubjectMapping extends Model
{
    use Notifiable;

    public $timestamps = true;

    protected $fillable = [
        'student_id', 'subject_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
