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
        'ikonka_url',
        'rola'
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

    public function cesty()
    {
        return $this->hasMany(Cesta::class, 'author');
    }

    public function rola_nazov() : string
    {
        $rola = RoleModel::where('id', $this->rola)->first();
        if ($rola) {
            return $rola->nazov_role;
        }
        return "GUEST";
    }

    public function jeAdmin() : bool
    {
        return $this->rola == 1;
    }
}
