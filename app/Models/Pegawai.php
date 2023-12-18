<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $primaryKey = 'id';

    protected $table    = 'pegawai';
    protected $fillable = [
        'id',
        'nama_pegawai',
        'no_telp',
        'email',
        'nik',
        'tgl_lahir',
        'alamat',
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
