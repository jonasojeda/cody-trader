<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;

    protected $table = 'stats';

    protected $fillable = [
        'value',
        'label',
        'color',
    ];

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'value' => $this->value,
            'label' => $this->label,
            'color' => $this->color,
        ];
    }
}
