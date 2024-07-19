<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Sayfalalar extends Model
{
    use HasFactory;

    protected $table = 'sayfalalars';

    protected $fillable = [
        'baslik',
        'foto_yol',
        'icerik',
        'anasayfa',
        'sirasi'
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->baslik);
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->baslik);
        });
    }
}
