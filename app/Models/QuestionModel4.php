<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel4 extends Model
{
    protected $table = 'questions_4';
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

    public function getQuestions($type, $limit = 5)
    {
        return $this->where('type', $type)
            ->orderBy('id', 'RANDOM')
            ->limit($limit)
            ->findAll();
    }
}
