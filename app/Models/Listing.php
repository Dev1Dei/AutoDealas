<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $table = 'listings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'model',
        'car_model_id',
        'brand_id',
        'make',
        'photo', 
        'year', 
        'kW', 
        'HP', 
        'engine', 
        'fuelType', 
        'color', 
        'transmition', 
        'wheelDrive',
        'wheelLocation', 
        'numberOfDoors', 
        'numberOfSeats', 
        'body', 
        'price', 
        'city', 
        'country',
        'sellerNumber', 
        'title', 
        'description',
        'email',
        'name',
        'user_id',
        
    ];
}
