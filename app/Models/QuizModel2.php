<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel2 extends Model
{
    protected $table = 'quiz_results_2';
    protected $allowedFields = ['session_id', 'type', 'score'];
    public function getAverageScoreByType()
    {
        return $this->select("type, AVG(score) as avg_score") // *20 jadi 0–100
            ->groupBy('type')
            ->findAll();
    }
}
