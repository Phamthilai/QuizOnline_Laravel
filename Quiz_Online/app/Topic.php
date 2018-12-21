<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';
    protected $guarded = ['id'];
    public function subject()
    {
        return $this->belongsTo('App\Subject','id_subject','id');
    }
    public function student_test()
    {
        return $this->hasMany('App\Student_test','id_student','id');
    }
    public function student_result()
    {
        return $this->hasMany('App\Student_result','id_topic','id');
    }
    public function topic_question()
    {
        return $this->hasMany('App\Topic_question','id_topic','id');
    }
}
