<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeKomentara extends Model
{
    protected $table = 'liky_komentare';

    protected $guarded = ['id'];

    protected $fillable = [
        'id_komentaru',
        'id_autora_liku',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
