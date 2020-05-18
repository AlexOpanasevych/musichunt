<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function sales() {
        return $this->morphTo();
    }
}
