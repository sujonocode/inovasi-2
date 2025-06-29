<?php

namespace App\Models;

use CodeIgniter\Model;

class KlaimModul3 extends Model
{
    protected $table = 'klaim_keterangan_3';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'instansi', 'token_pretest', 'token_posttest', 'rating', 'waktu_klaim'];
    protected $useTimestamps = false;
}
