<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annoucement extends Model
{
    protected $fillable = [
        'message',
        'url',
        'is_active',
    ];
}
