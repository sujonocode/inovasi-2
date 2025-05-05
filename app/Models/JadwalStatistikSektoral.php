<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalStatistikSektoral extends Model
{
    protected $table = 'jadwal_statistik_sektoral';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tempat', 'topik', 'tanggal', 'ketua_tim', 'opd', 'waktu_start', 'waktu_end', 'kontak_ketua_tim', 'kontak_narahubung', 'catatan', 'status', 'created_by', 'pengingat', 'kontak'];
}
