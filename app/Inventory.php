<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Element;
use App\Warehouse;
use App\DetailMovement;
use App\People;

class Inventory extends Model
{
     public function elements(){
        return $this->belongsTo('App\Element');
    }
    public function warehouses(){
        return $this->belongsTo('App\Warehouse');
    }
    public function detail_movements(){
        return $this->hasMany('App\DetailMovement');
    }
    public function peoples(){
        return $this->belongsTo('App\People');
    }
}
