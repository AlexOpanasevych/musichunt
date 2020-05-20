<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function users() {
        return $this->morphMany('/App/User', 'user_id', 'id');
    }
}
