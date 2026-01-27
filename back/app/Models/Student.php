<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'telegram_user',
        'country_id',
        'user_id',
        'registration_date',
        'is_active',
    ];

    //Relaciones
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'telegram_user' => $this->telegram_user,
            'country' => $this->country_id ? $this->country->obtenerDatos() : null,
            'registration_date' => $this->registration_date,
            'is_active' => $this->is_active,
        ];
    }
}
