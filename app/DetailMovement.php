<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Inventory;
use App\Movement;

class DetailMovement extends Model
{
     public function inventories(){
        return $this->belongsTo('App\Inventory');
    }
      public function movements(){
        return $this->belongsTo('App\Movement');
    }
}
