<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'kategori',
        'deskripsi',
        'alamat',
        'tgl_mulai',
        'jam_event',
        'kuota_peserta',
        'harga_tiket',
        'username'
    ];
}
