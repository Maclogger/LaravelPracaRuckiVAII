<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $fillable = [
        'nazov_role',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $guarded = ['id'];

    protected $table = 'role';
}
