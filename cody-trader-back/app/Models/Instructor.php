<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'experience',
        'specialty',
        'achievements',
        'image',
    ];

    protected $casts = [
        'achievements' => 'array',
    ];

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'role' => $this->role,
            'experience' => $this->experience,
            'specialty' => $this->specialty,
            'achievements' => $this->achievements,
            'image' => $this->image,
        ];
    }
}
