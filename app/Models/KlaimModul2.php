<?php

namespace App\Models;

use CodeIgniter\Model;

class KlaimModul2 extends Model
{
    protected $table = 'klaim_keterangan_2';
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
