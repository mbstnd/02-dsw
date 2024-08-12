<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fecha_inicio',
        'estado',
        'responsable',
        'monto',
        'created_by',
        'activo',
    ];

    protected $dates = [
        'fecha_inicio',
        'created_at',
        'update_at',
    ];
}
