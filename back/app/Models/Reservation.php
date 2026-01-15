<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'reservation_date',
        'confirmed',
        'paid',
    ];

    public function obtenerDatos()
    {
        return $this->only([
            'name',
            'last_name',
            'email',
            'phone',
            'reservation_date',
            'confirmed',
            'paid',
            'ticket',
        ]);
    }
}
