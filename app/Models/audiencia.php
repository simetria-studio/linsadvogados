<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audiencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dia',
        'horario',
        'vara',
    ];
}
