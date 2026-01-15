<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedioPago extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'descripcion',
        'reference_code',
        'qr_pay',
    ];

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'descripcion' => $this->descripcion,
            'reference_code' => $this->reference_code,
            'qr_pay' => $this->qr_pay,
        ];
    }
}
