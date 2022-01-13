<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prazo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cpf',
        'servico',
        'situacao',
        'prazo',
        'documento',

    ];
}
