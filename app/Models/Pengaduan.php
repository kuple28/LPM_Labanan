<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    public function Gambar()
    {
        return $this->hasMany(Gambar::class,'id_gambar','id');
    }

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class,'id_kategori','id');
    }

    public function user()
    {
        return $this->belongsTo(user::class,'id_user','id');
    }

    public function tanggapan()
    {
        return $this->hasOne(tanggapan::class,'id_pengaduan','id');
    }


}
