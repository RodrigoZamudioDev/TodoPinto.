<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable =[
        'name',
        'descripcion',
        'categoria',
        'imagen'
    ];

    //Moldificar que todos los nombres sean en minusculas

    protected function getCategoriaAttribute($value) {

        return strtolower($value);

    }   

}
