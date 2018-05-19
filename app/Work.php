<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    //
    use SoftDeletes;
    public function worker()
    {
        return $this->belongsTo('App\Worker');
    }
    public function worker2()
    {
        return $this->belongsTo('App\Worker');
    }
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
