<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subway extends Model
{         
    protected $guarded = ['id'];
    protected $table='subway';
    protected $fillable = ["address_id","name"];
}
