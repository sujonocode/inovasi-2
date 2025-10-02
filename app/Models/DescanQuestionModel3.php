<?php

namespace App\Models;

use CodeIgniter\Model;

class DescanQuestionModel3 extends Model
{
    protected $table = 'descan_questions_3';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'type',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer'
    ];

    public function getQuestions($type, $limit = 10)
    {
        return $this->where('type', $type)
            ->orderBy('id', 'RANDOM')
            ->limit($limit)
            ->findAll();
    }
}
