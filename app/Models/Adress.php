<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'numero',
        'complemento',
    ];
}
