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

    public function lessonCourses()
    {
        return $this->hasMany(LessonCourse::class);
    }

    //Funciones publicas
    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'lessons' => $this->lessonCourses->map(function ($lesson) {
                return $lesson->obtenerDatos();
            })->toArray(),
        ];
    }
}
