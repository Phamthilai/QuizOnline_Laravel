<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $guarded = [];
    protected $fillable = [];
    public function subject()
    {
        return $this->belongsTo('App\Subject','id_subject','id');
    }
    public function answers()
    {
        return $this->hasMany('App\Answer_question','id_question','id');
    }
    public function topic_question()
    {
        return $this->hasMany('App\Topic_question','id_topic','id');
    }
    
}
