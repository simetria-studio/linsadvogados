<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date_birth',
        'conjugue',
        'rg',
        'cpf',
        'requerimento',
        'numero_processo',
        'image',
        'telefone',
        'email',
        'whatsapp',
    ];
}
