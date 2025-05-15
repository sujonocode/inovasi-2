<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_tim_sek', 'id_tim_des', 'username', 'nama', 'email', 'password', 'role', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
