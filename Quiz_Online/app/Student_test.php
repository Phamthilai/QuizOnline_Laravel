<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_test extends Model
{
    protected $table = 'student_test';
    protected $guarded = ['id'];
    public function student()
    {
        return $this->belongsTo('App\Student','id_student','id');
    }
    public function topic()
    {
        return $this->belongsTo('App\Topic','id_topic','id');
    }
}
