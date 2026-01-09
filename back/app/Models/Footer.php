<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'brand_description',
        'contact_email',
        'social_links',
        'navigation_links',
        'risk_disclaimer',
        'copyright_text',
        'powered_by_text',
        'powered_by_link',
    ];

    protected $casts = [
        'social_links' => 'array',
        'navigation_links' => 'array',
    ];

    public function obtenerDatos()
    {
        return [
            'id' => $this->id,
            'brand_name' => $this->brand_name,
            'brand_description' => $this->brand_description,
            'contact_email' => $this->contact_email,
            'social_links' => $this->social_links,
            'navigation_links' => $this->navigation_links,
            'risk_disclaimer' => $this->risk_disclaimer,
            'copyright_text' => $this->copyright_text,
        ];
    }
}
