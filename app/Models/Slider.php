<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    //Tablo adı
    protected $table = 'sliders';
    protected $fillable = [
        'title',
        'subtitle1',
        'subtitle2',
        'subtitle3',
        'foto_yol',
        'sirasi',
        'aktif',
        'silindi'
    ];

}
