<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $guarded = ['id'];
    public function subject()
    {
        return $this->belongsTo('App\Subject','id_subject','id');
    }
}
