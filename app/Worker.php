<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    //
    use SoftDeletes;
    public function work()
    {
        return $this->hasMany('App\Work');
    }
}
