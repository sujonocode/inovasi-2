<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel extends Model
{
    protected $table = 'quiz_results';
    protected $allowedFields = ['session_id', 'type', 'score'];
}
