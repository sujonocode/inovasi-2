<?php

namespace App\Controllers;

use App\Models\User;

class Profile extends BaseController
{
    public function index(string $page = 'Profil Pengguna')
    {
        $User = new User();
        $user = $User->find(session('user_id'));

        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('profile/index', [
                'title' => 'Profil Pengguna',
                'user' => $user,
            ])
            . view('templates/footer');
    }

    public function updateProfile()
    {
        $User = new User();
        $userId = session('user_id');

        // Validate input
        $rules = [
            'email' => 'required|valid_email',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errorsProfile', $this->validator->getErrors());
        }

        // Update user data
        $User->update($userId, [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
        ]);

        return redirect()->to(base_url('profile'))->with('successProfile', 'Profile updated successfully.');
    }

    public function changePassword()
    {
        $User = new User();
        $userId = session('user_id');

        // Validate input
        $rules = [
            'current_password' => 'required',
            'new_password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[new_password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errorsPassword', $this->validator->getErrors());
        }

        // Check current password
        $user = $User->find($userId);
        if (!password_verify($this->request->getPost('current_password'), $user['password'])) {
            return redirect()->back()->with('errorPassword', 'Current password is incorrect.');
        }

        // Update password
        $User->update($userId, [
            'password' => password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to(base_url('profile'))->with('successPassword', 'Password changed successfully.');
    }
}
