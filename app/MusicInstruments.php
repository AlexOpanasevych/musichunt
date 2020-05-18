<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicInstruments extends Model
{
    public function guitar(){
        return $this->hasMany();
    }
}
