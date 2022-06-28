<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ExperienceModel;

class Pengalaman extends BaseController
{
    public function index()
    {
        $user        = new UserModel();
        $id          = session()->get('id_user');
        $experience  = new ExperienceModel();
        $data = [
            'user'        => $user->first(),
            'experience'  => $experience->where('id_user', $id)->find(),
        ];

        return view('dashboard/pengalaman', $data);
    }

    public function save()
    {
        $user       = new UserModel();
        $experience  = new ExperienceModel();
        $experience->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'id_user' => session()->get('id_user'),
        ]);
        return redirect()->to('pengalaman');
    }

    public function delete($id_experience)
    {
        $experience  = new ExperienceModel();
        $experience->delete($id_experience);
        return redirect()->to('pengalaman');
    }

    function update()
    {
        $user       = new UserModel();
        $experience  = new ExperienceModel();
        $experience->replace([
            'id_experience' => $this->request->getPost('id_experience'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'id_user' => session()->get('id_user'),
        ]);
        return redirect()->to('pengalaman');
    }

}