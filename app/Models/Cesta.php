<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cesta extends Model
{
    protected $table = 'cesty';

    protected $fillable = [
        'nazov_cesty',
        'popis',
        'obrazok_url',
        'dlzka_trasy',
        'stav_cesty',
        'vytazenost',
        'vhodne_pre_motorky',
        'vhodne_cez_zimu',
        'popularna_cesta',
        'author',
        'mapa'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $guarded = [
        "id"
    ];
}
