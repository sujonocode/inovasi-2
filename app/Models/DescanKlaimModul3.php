<?php

namespace App\Models;

use CodeIgniter\Model;

class DescanKlaimModul3 extends Model
{
    protected $table = 'descan_klaim_keterangan_3';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'instansi', 'token_pretest', 'token_posttest', 'rating', 'waktu_klaim'];
    protected $useTimestamps = false;

    public function getJumlahKlaimPerInstansi()
    {
        return $this->select('instansi, COUNT(*) as total')
            ->groupBy('instansi')
            ->orderBy('total', 'DESC')
            ->findAll();
    }
}
