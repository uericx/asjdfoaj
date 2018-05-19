<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    //
    use SoftDeletes;
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
    public function work()
    {
        return $this->hasMany('App\Work');
    }
}
