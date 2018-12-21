<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $guarded = ['id'];
    public function topic()
    {
        return $this->hasMany('App\Topic','id_subject','id');
    }
    public function question()
    {
        return $this->hasMany('App\Question','id_subject','id');
    }

}
