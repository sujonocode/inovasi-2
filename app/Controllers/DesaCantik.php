<?php

namespace App\Controllers;

class DesaCantik extends BaseController
{
    public function index(string $page = 'Desa Cantik')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('desacantik/index')
            . view('templates/footer');
    }
}
