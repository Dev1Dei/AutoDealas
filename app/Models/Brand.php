<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    public $timestamps = false;
    use HasFactory;
}
