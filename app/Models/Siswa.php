<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //Definisikan data tabel siswa
    protected $table = 'siswa'; //nama tabel siswa
    public $timestamps = false;
    protected $primaryKey = 'id_siswa'; //primary dari data siswa
    //use HasFactory;
}
