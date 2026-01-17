<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'academy',
        'price',
        'currency',
        'description',
        'content',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'description' => 'array',
        'content' => 'array',
    ];

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'academy' => $this->academy,
            'price' => $this->price,
            'currency' => $this->currency,
            'description' => $this->description,
            'content' => $this->content,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
