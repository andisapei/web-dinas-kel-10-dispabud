<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_wisata',
        'deskripsi',
        'lokasi',
        'harga_tiket',
        'jam_operasional',
        'fasilitas',
        'kontak',
        'image'
    ];
}
