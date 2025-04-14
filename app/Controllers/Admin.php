<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(string $page = 'Admin')
    {
        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('admin/index')
            . view('templates/footer');
    }
}
