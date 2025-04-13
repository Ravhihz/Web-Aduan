<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $fillable = ['nama', 'judul', 'isi', 'kategori']; // tambahkan semua field yang ingin diinput
}
