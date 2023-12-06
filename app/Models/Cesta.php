<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cesta extends Model
{
    // Určuje, že model by mal pracovať s tabuľkou 'cesty'
    protected $table = 'cesty';

    // Určuje, ktoré stĺpce je možné hromadne priradiť
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
        'author'
    ];

    // Určuje, ktoré stĺpce sú typu 'date' (ak používate časové pečiatky alebo dátumy)
    protected $dates = [
        'created_at',
        'updated_at',
        // Ak máte ďalšie dátumové stĺpce, pridajte ich sem
    ];

}
