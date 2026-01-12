<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'highlight',
        'tag',
        'description',
        'primary_btn_text',
        'primary_btn_link',
        'secondary_btn_text',
        'secondary_btn_link',
        'image',
        'floating_card_title',
        'floating_card_description',
        'floating_card_icon',
        'indicators',
        'expiration',
        'expiration_date',
        'activation_date',
    ];

    protected $casts = [
        'indicators' => 'array',
        'expiration' => 'boolean',
        'expiration_date' => 'datetime',
        'activation_date' => 'datetime',
    ];

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'highlight' => $this->highlight,
            'tag' => $this->tag,
            'description' => $this->description,
            'primary_btn_text' => $this->primary_btn_text,
            'primary_btn_link' => $this->primary_btn_link,
            'secondary_btn_text' => $this->secondary_btn_text,
            'secondary_btn_link' => $this->secondary_btn_link,
            'image' => $this->image,
            'floating_card_title' => $this->floating_card_title,
            'floating_card_description' => $this->floating_card_description,
            'floating_card_icon' => $this->floating_card_icon,
            'indicators' => $this->indicators,
            'expiration' => $this->expiration,
            'expiration_date' => $this->expiration_date,
            'activation_date' => $this->activation_date,
        ];
    }
}
