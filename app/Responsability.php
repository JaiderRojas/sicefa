<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\People;
use App\Movement;

class Responsability extends Model
{
    public function peoples(){
        return $this->belongsTo('App\People');
    }
     public function movements(){
        return $this->belongsTo('App\Movement');
    }
}
