<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Donatur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'hp',
        'email',
    ];

    public function donasi(): HasMany
    {
        return $this->hasMany(Donasi::class, 'id_donatur', 'id', 'id_donatur');
    }
}
