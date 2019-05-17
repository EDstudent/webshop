<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function offers_p() {return $this->hasMany('App\Offer');}
}
