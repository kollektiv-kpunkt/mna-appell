<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    use HasFactory;

    public $table = 'supporters';

    protected $casts = [
        'optin' => 'boolean',
        'enabled' => 'boolean'
    ];

    protected $fillable = [
        "name",
        "email",
        "city",
        "zip",
        "details",
        "optin",
        "public"
    ];
}
