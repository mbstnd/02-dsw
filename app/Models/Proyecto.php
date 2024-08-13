<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
