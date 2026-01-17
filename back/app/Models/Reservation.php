<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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
        'ticket',
        'country_id',
    ];

    //Relaciones
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'reservation_date' => $this->reservation_date,
            'confirmed' => $this->confirmed,
            'paid' => $this->paid,
            'country_id' => $this->country ? $this->country->obtenerDatos() : null,
            'ticket_url' => $this->ticket ? Storage::url($this->ticket) : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
