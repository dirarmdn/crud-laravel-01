<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $timestamps = false;
    protected $table = 'Pegawai';
    protected $fillable = [
        'nama',
        'nip',
        'tmplahir',
        'tgllahir',
        'kota'
    ];
    protected $primaryKey = 'replid';
    use HasFactory;
}
