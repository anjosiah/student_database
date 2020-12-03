<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'datadiri';
    protected $primaryKey = 'nim';
    protected $fillable = ['nim', 'nama_lengkap', 'kota', 'tgl_lahir', 'nama_ortu', 'alamat_ortu', 'kode_pos', 'no_telp', 'status'];
}
