<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'title',
        'description',
        'thumbnail',
        'youtubeId',
    ];

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'order' => $this->order,
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail?Storage::url($this->thumbnail):null,
            'youtubeId' => $this->youtubeId,
        ];
    }
}
