<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $fillable = [
        'nama',
        'fakultas',
        'jurusan',
        'nim',
        'email',
        'judul',
        'kategori',
        'ticket_number',
        'deskripsi',
    ];
     // tambahkan semua field yang ingin diinput
}
