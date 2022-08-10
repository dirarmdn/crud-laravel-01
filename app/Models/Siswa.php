<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;
    protected $table = 'Siswa';
    protected $fillable = [
        'nama',
        'nis',
        'tmplahir',
        'tgllahir',
        'kelamin'
    ];
    protected $primaryKey = 'nis';
    use HasFactory;
}
