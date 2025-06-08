<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'groom_photo',
        'bride_photo',
        'gallery_kolom_1',
        'gallery_kolom_2',
        'gallery_kolom_3',
        'gallery_kolom_4',
        'gallery_potrait_1',
        'gallery_potrait_2',
        'gallery_journey_1',
        'gallery_journey_2',
        'gallery_journey_3',
        'gallery_journey_4',
        'gallery_journey_5',
        'gallery_journey_6',
    ];
}
