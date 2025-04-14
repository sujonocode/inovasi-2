<?php

namespace App\Controllers;

class HaloPst extends BaseController
{
    public function index(string $page = 'Halo PST')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('halopst/index')
            . view('templates/footer');
    }
}
