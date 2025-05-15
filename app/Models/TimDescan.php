<?php

namespace App\Models;

use CodeIgniter\Model;

class TimDescan extends Model
{
    protected $table = 'tim_descan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_tim', 'ketua_tim', 'opd', 'narahubung', 'kontak_ketua_tim', 'kontak_narahubung'];
}
