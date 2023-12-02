<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Uzivatel extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'meno',
        'priezvisko',
        'email',
        'heslo',
    ];

    protected $guarded = ['id'];

    protected $hidden = [
        'heslo',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'uzivatelia';

    public function getAuthPassword()
    {
        return $this->heslo;
    }

}
