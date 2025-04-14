<?php

namespace App\Controllers;

class IndikatorStrategis extends BaseController
{
    public function index(string $page = 'Indikator Strategis')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('indikatorstrategis/index')
            . view('templates/footer');
    }
}
