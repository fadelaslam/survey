<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "report";

    public function jenis()
    {
        return $this->belongsTo('App\Jenis');
    }

    public function cabang()
    {
        return $this->belongsTo('App\Cabang');
        return $this->blongsTo('App\Jenis');
    }
}
