<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    protected $table='pelajaran';
    protected $fillable = [
        'mata_pelajaran'
    ];
}
