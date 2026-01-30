<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LessonCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'section_course_id',
        'title',
        'description',
        'video_url',
        'resources',
    ];

    protected $casts = [
        'resources' => 'array',
    ];

    //Relaciones
    public function sectionCourse()
    {
        return $this->belongsTo(SectionCourse::class);
    }

    //Funciones publicas
    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'videoUrl' => $this->video_url,
            'resources' => $this->resources ?? [],
        ];
    }
}
