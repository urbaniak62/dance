<?php

namespace App;

use App\Dances;
use Illuminate\Database\Eloquent\Model;

class Dances extends Model
{
    protected $fillable=[
        'groupes','categories','videos','points_clef'
    ];
}
