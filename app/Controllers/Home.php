<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(string $page = 'Beranda')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('pages/index copy')
            . view('templates/footer');
    }
}
