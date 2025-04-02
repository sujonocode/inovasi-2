<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalStatistikSektoral extends Model
{
    protected $table = 'jadwal_statistik_sektoral';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'tanggal', 'waktu', 'kontak', 'pengingat', 'catatan', 'created_by'];
}
