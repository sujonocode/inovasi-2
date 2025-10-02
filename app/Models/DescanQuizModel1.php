<?php

namespace App\Models;

use CodeIgniter\Model;

class DescanQuizModel1 extends Model
{
    protected $table = 'descan_quiz_results_1';
    protected $allowedFields = ['session_id', 'type', 'score'];
}
