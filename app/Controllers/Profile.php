<?php

namespace App\Controllers;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $user       = new UserModel();
        $data = [
            'user'  => $user->find(session()->get('id_user')),
        ];
        return view('dashboard/profile', $data);
    }

    public function save()
    {
        $user       = new UserModel();
        if($this->request->getVar('password') == "") {
            $user->save([
                'name' => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
                'github' => $this->request->getPost('github'),
                'username' => $this->request->getPost('username'),
                'id_user' => session()->get('id_user'),
            ]);
        } else {
        $user->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'github' => $this->request->getPost('github'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'id_user' => session()->get('id_user'),
        ]);
    }
        return redirect()->to('dashboard');
    }
}