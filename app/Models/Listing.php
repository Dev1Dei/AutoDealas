<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $table = 'listings';
    protected $primaryKey = 'id';
    protected $fillable = ['model' , 'make', 'year','kW', 'engine', 'fuelType', 'color', 'transmition', 'wheelDrive', 'numberOfDoors', 'numberOfSeats','body', 'price', 'city', 'country',
                            'sellerNumber', 'description'];
}
