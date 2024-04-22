<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class KategoriPostingan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    
    public function kegiatan(): BelongsToMany
    {
        return $this->belongsToMany(KategoriPostingan::class, 'id_kategori', 'id');
    }
}
