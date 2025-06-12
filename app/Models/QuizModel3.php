<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel3 extends Model
{
    protected $table = 'quiz_results_3';
    protected $allowedFields = ['session_id', 'type', 'score'];
}
