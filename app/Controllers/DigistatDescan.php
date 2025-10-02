<?php

namespace App\Controllers;

use App\Models\DescanQuizModel1;
use App\Models\DescanQuizModel2;
use App\Models\DescanQuizModel3;
use App\Models\DescanQuestionModel1;
use App\Models\DescanQuestionModel2;
use App\Models\DescanQuestionModel3;

class DigistatDescan extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function modul1(string $page = 'Digistat Desa Cantik - Modul 1')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistatdescan/modul1')
            . view('templates/footer');
    }

    public function pretest1()
    {
        $questionModel = new DescanQuestionModel1();
        $questions = $questionModel->getQuestions('pre');

        session()->set('pretest_questions1', $questions);

        return view('digistatdescan/pretest1', [
            'questions' => $questions,
            'type' => 'Pre Test'
        ]);
    }

    public function submitPretest1()
    {
        $questions = session()->get('pretest_questions1');
        if (!$questions) {
            return redirect()->to(base_url('digistatdescan/pretest1'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new DescanQuizModel1();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        session()->remove('pretest_questions1');

        return view('digistatdescan/result1', ['score' => $score, 'type' => 'Pre Test', 'session_id' => session_id(),]);
    }

    public function materi1(string $page = 'Digistat Desa Cantik- Materi 1')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistatdescan/materi1')
            . view('templates/footer');
    }

    public function posttest1()
    {
        $questionModel = new DescanQuestionModel1();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions1', $questions);

        return view('digistatdescan/posttest1', [
            'questions' => $questions,
            'type' => 'Post Test'
        ]);
    }

    public function submitPosttest1()
    {
        $questions = session()->get('posttest_questions1');
        if (!$questions) {
            return redirect()->to(base_url('digistatdescan/posttest1'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new DescanQuizModel1();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('digistatdescan/result1', ['score' => $score, 'type' => 'Post Test', 'session_id' => session_id(),]);
    }

    public function modul2(string $page = 'Digistat Desa Cantik - Modul 2')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistatdescan/modul2')
            . view('templates/footer');
    }

    public function pretest2()
    {
        $questionModel = new DescanQuestionModel2();
        $questions = $questionModel->getQuestions('pre');

        session()->set('pretest_questions2', $questions);

        return view('digistatdescan/pretest2', [
            'questions' => $questions,
            'type' => 'Pre Test'
        ]);
    }

    public function submitPretest2()
    {
        $questions = session()->get('pretest_questions2');
        if (!$questions) {
            return redirect()->to(base_url('digistatdescan/pretest2'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new DescanQuizModel2();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        session()->remove('pretest_questions2');

        return view('digistatdescan/result2', ['score' => $score, 'type' => 'Pre Test', 'session_id' => session_id(),]);
    }

    public function materi2(string $page = 'Digistat Desa Cantik- Materi 2')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistatdescan/materi2')
            . view('templates/footer');
    }

    public function posttest2()
    {
        $questionModel = new DescanQuestionModel2();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions2', $questions);

        return view('digistatdescan/posttest2', [
            'questions' => $questions,
            'type' => 'Post Test'
        ]);
    }

    public function submitPosttest2()
    {
        $questions = session()->get('posttest_questions2');
        if (!$questions) {
            return redirect()->to(base_url('digistatdescan/posttest2'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new DescanQuizModel2();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('digistatdescan/result2', ['score' => $score, 'type' => 'Post Test', 'session_id' => session_id(),]);
    }

    public function modul3(string $page = 'Digistat Desa Cantik - Modul 3')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistatdescan/modul3')
            . view('templates/footer');
    }

    public function pretest3()
    {
        $questionModel = new DescanQuestionModel3();
        $questions = $questionModel->getQuestions('pre');

        session()->set('pretest_questions3', $questions);

        return view('digistatdescan/pretest3', [
            'questions' => $questions,
            'type' => 'Pre Test'
        ]);
    }

    public function submitPretest3()
    {
        $questions = session()->get('pretest_questions3');
        if (!$questions) {
            return redirect()->to(base_url('digistatdescan/pretest3'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new DescanQuizModel3();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        session()->remove('pretest_questions3');

        return view('digistatdescan/result3', ['score' => $score, 'type' => 'Pre Test', 'session_id' => session_id(),]);
    }

    public function materi3(string $page = 'Digistat Desa Cantik - Materi 3')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistatdescan/materi3')
            . view('templates/footer');
    }

    public function posttest3()
    {
        $questionModel = new DescanQuestionModel3();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions3', $questions);

        return view('digistatdescan/posttest3', [
            'questions' => $questions,
            'type' => 'Post Test'
        ]);
    }

    public function submitPosttest3()
    {
        $questions = session()->get('posttest_questions3');
        if (!$questions) {
            return redirect()->to(base_url('digistatdescan/posttest3'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new DescanQuizModel3();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('digistatdescan/result3', ['score' => $score, 'type' => 'Post Test', 'session_id' => session_id(),]);
    }
}
