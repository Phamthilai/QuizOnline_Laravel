<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $guarded = ['id'];
    protected $fillable = ['id'];
    public function student_test()
    {
        return $this->hasMany('App\Student_test','id_student','id');
    }
    public function student_result()
    {
        return $this->hasMany('App\Student_result','id_student','id');
    }
}
