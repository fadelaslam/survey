<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "report";

    public function jenis()
    {
        return $this->blongsTo('App\Jenis');
    }
}
