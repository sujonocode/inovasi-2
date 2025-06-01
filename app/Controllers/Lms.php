<?php

namespace App\Controllers;

use App\Models\QuizModel;
use App\Models\QuestionModel;

class Lms extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    private function getPreTestQuestions()
    {
        return [
            ["question" => "Apa ibu kota Indonesia?", "options" => ["Jakarta", "Bandung", "Medan", "Surabaya"], "answer" => "Jakarta"],
            ["question" => "Apa ibu kota Thailand?", "options" => ["Jakarta", "Bangkok", "Medan", "Surabaya"], "answer" => "Bangkok"],
            ["question" => "Apa ibu kota Vietnam?", "options" => ["Jakarta", "Hanoi", "Medan", "Surabaya"], "answer" => "Hanoi"],
            ["question" => "Apa ibu kota Malaysia?", "options" => ["Jakarta", "Bandung", "Medan", "Kuala Lumpur"], "answer" => "Kuala Lumpur"],
            ["question" => "Apa ibu kota Zimbabwe?", "options" => ["Jakarta", "Bandung", "Harare", "Surabaya"], "answer" => "Harare"],
        ];
    }

    private function getPostTestQuestions()
    {
        return [
            ["question" => "Siapa presiden pertama Indonesia?", "options" => ["Soekarno", "Jokowi", "Habibie", "Megawati"], "answer" => "Soekarno"],
            ["question" => "Siapa presiden pertama Amerika Serikat?", "options" => ["Soekarno", "Jokowi", "Habibie", "Megawati"], "answer" => "Megawati"],
            ["question" => "Siapa presiden pertama Zimbabwe?", "options" => ["Soekarno", "Jokowi", "Habibie", "Megawati"], "answer" => "Habibie"],
            ["question" => "Siapa presiden pertama India?", "options" => ["Soekarno", "Jokowi", "Habibie", "Megawati"], "answer" => "Jokowi"],
            ["question" => "Siapa presiden pertama Korea Utara?", "options" => ["Soekarno", "Jokowi", "Habibie", "Megawati"], "answer" => "Megawati"],
        ];
    }

    public function index()
    {
        return redirect()->to('/lms/pretest');
    }

    public function pretest()
    {
        $questionModel = new QuestionModel();
        $questions = $questionModel->getQuestions('pre');

        // Simpan pertanyaan di session untuk pengecekan nanti
        session()->set('pretest_questions', $questions);

        return view('lms/pretest', ['questions' => $questions]);
    }


    public function submitPretest()
    {
        $questions = session()->get('pretest_questions');
        if (!$questions) {
            return redirect()->to(base_url('lms/pretest'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        // Hapus soal dari session
        session()->remove('pretest_questions');

        return view('lms/result', ['score' => $score, 'type' => 'Pre Test']);
    }



    public function materi()
    {
        return view('lms/materi');
    }

    public function posttest()
    {
        $questionModel = new QuestionModel();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions', $questions);

        return view('lms/posttest', ['questions' => $questions]);
    }


    public function submitPosttest()
    {
        $questions = session()->get('posttest_questions');
        if (!$questions) {
            return redirect()->to(base_url('lms/posttest'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('lms/result', ['score' => $score, 'type' => 'Post Test']);
    }
}
