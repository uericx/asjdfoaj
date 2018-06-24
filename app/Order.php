<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    //
    use SoftDeletes;
    protected $appends = ['progress', 'restante'];
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
    public function work()
    {
        return $this->hasMany('App\Work');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function priority()
    {
        return $this->belongsTo('App\Priority');
    }

    public function getProgressAttribute(){
        $total = 0;
        foreach ($this->work as $single) {
            # code...
            $total += $single->cantidad;
        }
        return $total;
    }
    public function getRestanteAttribute(){
        return $this->cantidad - $this->progress;
    }
}
