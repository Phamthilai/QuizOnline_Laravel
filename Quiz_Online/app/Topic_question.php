<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic_question extends Model
{
    protected $table = 'topic_question';
    protected $fuarded = ['id'];
    public function topic()
    {
        return $this->belongsTo('App\Topic','id_topic','id');
    }
    public function question()
    {
        return $this->belongsTo('App\Question','id_question','id');
    }
}
