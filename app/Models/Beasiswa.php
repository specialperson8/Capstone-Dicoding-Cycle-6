<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'namabeasiswa',
        'deskripsi',
        'kategori',
        'deadline',
        'syarat',
        'tautan',
        'poster',
        'email',
        'status',
    ];
}
