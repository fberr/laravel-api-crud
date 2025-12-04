<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    // array de elementos protegidos vacio 
    // todos los elementos son complementables
    protected $guarded = [];

    //  ocultamos valores en la respuesta
    protected $hidden = ['created_at', 'updated_at'];
}
