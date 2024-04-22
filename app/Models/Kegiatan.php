<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kategori',
        'foto',
        'judul',
        'desk',
        'tanggal',
    ];
    
    public function kategori(): HasOne
    {
        return $this->hasOne(KategoriPostingan::class, 'id', 'id_kategori', 'id');
    }

}
