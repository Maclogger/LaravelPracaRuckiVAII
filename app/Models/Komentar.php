<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentare';

    protected $guarded = ['id'];

    protected $fillable = [
        'id_cesty',
        'id_autora',
        'text',
        'pocet_likov'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
