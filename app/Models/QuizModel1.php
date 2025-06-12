<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel1 extends Model
{
    protected $table = 'quiz_results_1';
    protected $allowedFields = ['session_id', 'type', 'score'];
}
