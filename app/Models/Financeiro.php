<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    use HasFactory;
    protected $fillable = [
        'valor_total',
        'dividido_em',
        'valor_parcela',
    ];
}
