<?php

namespace App\Http\Eloquent;

use Illuminate\Database\Eloquent\Model;

class DeveloperEloquent extends Model
{
    protected $table = 'developers';

    protected $fillable = [
        'nome',
        'idade',
        'sexo',
        'hobby',
        'data_nascimento'
    ];

    protected $dates = [
        'data_nascimento',
        'created_at',
        'updated_at',
    ];
}