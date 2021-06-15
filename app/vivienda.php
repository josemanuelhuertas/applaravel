<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vivienda extends Model
{
    protected $filliable = ['localidad','tipo','m2','num_hab','num_banos','piscina','garaje'];

    protected $dates = ['created_at', 'update_at'];
}
