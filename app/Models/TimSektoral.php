<?php

namespace App\Models;

use CodeIgniter\Model;

class TimSektoral extends Model
{
    protected $table = 'tim_sektoral';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tim_id', 'ketua_tim', 'opd', 'narahubung', 'kontak_ketua_tim', 'kontak_narahubung'];
}
