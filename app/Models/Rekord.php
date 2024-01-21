<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekord extends Model
{
    protected $table = 'rekordy';

    protected $fillable = [
        'cas',
        'id_autora_rekordu',
        'id_cesty',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        'id',
    ];
}
