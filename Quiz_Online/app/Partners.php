<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    protected $table = 'partners';
    protected $guarded = [];

    public function area()
    {
        return $this->belongsTo('App\Areas','id_areas','id');
    }
}
