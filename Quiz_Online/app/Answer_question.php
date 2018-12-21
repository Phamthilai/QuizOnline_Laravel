<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer_question extends Model
{
    protected $table = 'answer_question';
    protected $guarded = ['id'];
    protected $fillable = [];
    public function question()
    {
        return $this->belongsTo('App\Question','id_question','id');
    }
}
