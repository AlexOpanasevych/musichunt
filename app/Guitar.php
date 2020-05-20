<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    public function sales() {
        return $this->morphMany('\App\Sales.php', 'salesable');
    }
}
