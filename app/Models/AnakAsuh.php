<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakAsuh extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kelas',
        'jenjang',
        'jenis_kelamin',
        'umur',
    ];
}
