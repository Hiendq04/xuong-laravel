<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catelogue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cover',
        'is_active',
    ];
    protected $cats = [
        'is_active' => 'boolean',
    ];
}
