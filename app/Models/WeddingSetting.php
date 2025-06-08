<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'groom_name_full',
        'groom_name_short',
        'bride_name_full',
        'bride_name_short',
        'groom_father',
        'groom_mother',
        'bride_father',
        'bride_mother',
        'ceremony_datetime',
        'ceremony_venue',
        'ceremony_address',
        'ceremony_map_url',
        'reception_datetime',
        'reception_venue',
        'reception_address',
        'reception_map_url',
        'story_text',
        'gallery_images',
        'audio_url',
        'gift_address',
        'gift_banks',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'ceremony_datetime' => 'datetime',
        'reception_datetime' => 'datetime',
        'gallery_images' => 'array',
        'gift_banks' => 'array',
    ];
}