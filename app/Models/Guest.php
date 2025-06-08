<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = ['display_name', 'slug'];

    public function rsvp()
    {
        return $this->hasOne(Rsvp::class);
    }
}
