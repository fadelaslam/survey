<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected $table = "cabang";

    public function report()
    {
        return $this->hasMany('App\Report');
    }
}
