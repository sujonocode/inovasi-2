<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel5 extends Model
{
    protected $table = 'quiz_results_5';
    protected $allowedFields = ['session_id', 'type', 'score'];
}
