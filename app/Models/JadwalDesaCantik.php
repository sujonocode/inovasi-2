<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalDesaCantik extends Model
{
    protected $table = 'jadwal_desa_cantik';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tempat', 'topik', 'tanggal', 'ketua_tim', 'desa', 'waktu_start', 'waktu_end', 'kontak_ketua_tim', 'kontak_narahubung', 'catatan', 'status', 'created_by', 'pengingat', 'kontak'];
}
