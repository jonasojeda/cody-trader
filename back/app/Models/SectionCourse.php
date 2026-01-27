<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectionCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'section_courses';
    protected $fillable = [
        'course_id',
        'title',
    ];

    //Relaciones 
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    //Funciones publicas

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'course_id' => $this->course_id,
            'title' => $this->title,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
