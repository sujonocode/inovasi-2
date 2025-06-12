<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel4 extends Model
{
    protected $table = 'quiz_results_4';
    protected $allowedFields = ['session_id', 'type', 'score'];
}
