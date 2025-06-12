<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel2 extends Model
{
    protected $table = 'quiz_results_2';
    protected $allowedFields = ['session_id', 'type', 'score'];
}
