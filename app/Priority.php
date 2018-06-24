<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Priority extends Model
{
    //
    use SoftDeletes;
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
