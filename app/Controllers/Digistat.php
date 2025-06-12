<?php

namespace App\Controllers;

use App\Models\QuizModel1;
use App\Models\QuizModel2;
use App\Models\QuizModel3;
use App\Models\QuizModel4;
use App\Models\QuizModel5;
use App\Models\QuestionModel1;
use App\Models\QuestionModel2;
use App\Models\QuestionModel3;
use App\Models\QuestionModel4;
use App\Models\QuestionModel5;

class Digistat extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function modul1(string $page = 'Digistat - Modul 1')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/modul1')
            . view('templates/footer');
    }

    public function pretest1()
    {
        $questionModel = new QuestionModel1();
        $questions = $questionModel->getQuestions('pre');

        session()->set('pretest_questions1', $questions);

        return view('digistat/pretest1', [
            'questions' => $questions,
            'type' => 'Pre Test'
        ]);
    }

    public function submitPretest1()
    {
        $questions = session()->get('pretest_questions1');
        if (!$questions) {
            return redirect()->to(base_url('digistat/pretest1'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel1();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        session()->remove('pretest_questions1');

        return view('digistat/result1', ['score' => $score, 'type' => 'Pre Test', 'session_id' => session_id(),]);
    }

    public function materi1(string $page = 'Digistat - Materi 1')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/materi2')
            . view('templates/footer');
    }

    public function posttest1()
    {
        $questionModel = new QuestionModel1();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions1', $questions);

        return view('digistat/posttest1', [
            'questions' => $questions,
            'type' => 'Post Test'
        ]);
    }

    public function submitPosttest1()
    {
        $questions = session()->get('posttest_questions1');
        if (!$questions) {
            return redirect()->to(base_url('digistat/posttest1'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel1();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('digistat/result1', ['score' => $score, 'type' => 'Post Test', 'session_id' => session_id(),]);
    }

    public function modul2(string $page = 'Digistat - Modul 2')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/modul2')
            . view('templates/footer');
    }

    public function pretest2()
    {
        $questionModel = new QuestionModel2();
        $questions = $questionModel->getQuestions('pre');

        session()->set('pretest_questions2', $questions);

        return view('digistat/pretest2', [
            'questions' => $questions,
            'type' => 'Pre Test'
        ]);
    }

    public function submitPretest2()
    {
        $questions = session()->get('pretest_questions2');
        if (!$questions) {
            return redirect()->to(base_url('digistat/pretest2'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel2();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        session()->remove('pretest_questions2');

        return view('digistat/result2', ['score' => $score, 'type' => 'Pre Test', 'session_id' => session_id(),]);
    }

    public function materi2(string $page = 'Digistat - Materi 2')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/materi2')
            . view('templates/footer');
    }

    public function posttest2()
    {
        $questionModel = new QuestionModel2();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions2', $questions);

        return view('digistat/posttest2', [
            'questions' => $questions,
            'type' => 'Post Test'
        ]);
    }

    public function submitPosttest2()
    {
        $questions = session()->get('posttest_questions2');
        if (!$questions) {
            return redirect()->to(base_url('digistat/posttest2'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel2();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('digistat/result2', ['score' => $score, 'type' => 'Post Test', 'session_id' => session_id(),]);
    }

    public function modul3(string $page = 'Digistat - Modul 3')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/modul3')
            . view('templates/footer');
    }

    public function pretest3()
    {
        $questionModel = new QuestionModel3();
        $questions = $questionModel->getQuestions('pre');

        session()->set('pretest_questions3', $questions);

        return view('digistat/pretest3', [
            'questions' => $questions,
            'type' => 'Pre Test'
        ]);
    }

    public function submitPretest3()
    {
        $questions = session()->get('pretest_questions3');
        if (!$questions) {
            return redirect()->to(base_url('digistat/pretest3'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel3();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        session()->remove('pretest_questions3');

        return view('digistat/result3', ['score' => $score, 'type' => 'Pre Test', 'session_id' => session_id(),]);
    }

    public function materi3(string $page = 'Digistat - Materi 3')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/materi3')
            . view('templates/footer');
    }

    public function posttest3()
    {
        $questionModel = new QuestionModel3();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions3', $questions);

        return view('digistat/posttest3', [
            'questions' => $questions,
            'type' => 'Post Test'
        ]);
    }

    public function submitPosttest3()
    {
        $questions = session()->get('posttest_questions3');
        if (!$questions) {
            return redirect()->to(base_url('digistat/posttest3'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel3();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('digistat/result3', ['score' => $score, 'type' => 'Post Test', 'session_id' => session_id(),]);
    }

    public function modul4(string $page = 'Digistat - Modul 4')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/modul4')
            . view('templates/footer');
    }

    public function pretest4()
    {
        $questionModel = new QuestionModel4();
        $questions = $questionModel->getQuestions('pre');

        session()->set('pretest_questions4', $questions);

        return view('digistat/pretest4', [
            'questions' => $questions,
            'type' => 'Pre Test'
        ]);
    }

    public function submitPretest4()
    {
        $questions = session()->get('pretest_questions4');
        if (!$questions) {
            return redirect()->to(base_url('digistat/pretest4'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel4();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        session()->remove('pretest_questions4');

        return view('digistat/result4', ['score' => $score, 'type' => 'Pre Test', 'session_id' => session_id(),]);
    }

    public function materi4(string $page = 'Digistat - Materi 4')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/materi4')
            . view('templates/footer');
    }

    public function posttest4()
    {
        $questionModel = new QuestionModel4();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions4', $questions);

        return view('digistat/posttest4', [
            'questions' => $questions,
            'type' => 'Post Test'
        ]);
    }

    public function submitPosttest4()
    {
        $questions = session()->get('posttest_questions4');
        if (!$questions) {
            return redirect()->to(base_url('digistat/posttest4'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel4();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('digistat/result4', ['score' => $score, 'type' => 'Post Test', 'session_id' => session_id(),]);
    }

    public function modul5(string $page = 'Digistat - Modul 5')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/modul5')
            . view('templates/footer');
    }

    public function pretest5()
    {
        $questionModel = new QuestionModel5();
        $questions = $questionModel->getQuestions('pre');

        session()->set('pretest_questions5', $questions);

        return view('digistat/pretest5', [
            'questions' => $questions,
            'type' => 'Pre Test'
        ]);
    }

    public function submitPretest5()
    {
        $questions = session()->get('pretest_questions5');
        if (!$questions) {
            return redirect()->to(base_url('digistat/pretest5'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel5();
        $model->save([
            'session_id' => session_id(),
            'type' => 'pre',
            'score' => $score,
        ]);

        session()->remove('pretest_questions5');

        return view('digistat/result5', ['score' => $score, 'type' => 'Pre Test', 'session_id' => session_id(),]);
    }

    public function materi5(string $page = 'Digistat - Materi 5')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('digistat/materi5')
            . view('templates/footer');
    }

    public function posttest5()
    {
        $questionModel = new QuestionModel5();
        $questions = $questionModel->getQuestions('post');

        session()->set('posttest_questions5', $questions);

        return view('digistat/posttest5', [
            'questions' => $questions,
            'type' => 'Post Test'
        ]);
    }

    public function submitPosttest5()
    {
        $questions = session()->get('posttest_questions5');
        if (!$questions) {
            return redirect()->to(base_url('digistat/posttest5'));
        }

        $score = 0;
        foreach ($questions as $i => $q) {
            $userAnswer = $this->request->getPost("q$i");
            if ($userAnswer === $q['correct_answer']) {
                $score++;
            }
        }

        $model = new QuizModel5();
        $model->save([
            'session_id' => session_id(),
            'type' => 'post',
            'score' => $score,
        ]);

        session()->remove('posttest_questions');

        return view('digistat/result5', ['score' => $score, 'type' => 'Post Test', 'session_id' => session_id(),]);
    }
}
