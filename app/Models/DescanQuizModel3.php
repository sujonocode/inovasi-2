<?php

namespace App\Models;

use CodeIgniter\Model;

class DescanQuizModel3 extends Model
{
    protected $table = 'descan_quiz_results_3';
    protected $allowedFields = ['session_id', 'type', 'score'];
    public function getAverageScoreByType()
    {
        return $this->select("type, AVG(score) as avg_score, COUNT(*) as count")
            ->groupBy('type')
            ->findAll();
    }
}
