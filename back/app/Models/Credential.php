<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'value',
        'label',
        'description',
    ];

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'icon' => $this->icon,
            'value' => $this->value,
            'label' => $this->label,
            'description' => $this->description,
        ];
    }
}
