<?php

namespace App\Models;

use CodeIgniter\Model;

class Kontak extends Model
{
    protected $table = 'kontak';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'tanggal', 'waktu', 'kontak', 'pengingat', 'catatan', 'created_by'];
}
