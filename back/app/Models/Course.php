<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'thumbnail',
    ];

    //Relaciones
    public function sectionCourses()
    {
        return $this->hasMany(SectionCourse::class);
    }

    //Funciones publicas
    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'progress' => 0, // TODO: calcular progreso real basado en lecciones completadas
            'sections' => $this->sectionCourses->map(function ($section) {
                return $section->obtenerDatos();
            })->toArray(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
