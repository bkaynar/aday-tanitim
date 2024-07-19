<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    //tablo adı
    protected $table = 'settings';

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'facebook',
        'twitter',
        'youtube',
        'instagram',
        'logo',
        'favicon',
        'email',
        'phone',
        'whatsapp',
        'address',
    ];
}
