<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\EducationModel;

class Pendidikan extends BaseController
{
    public function index()
    {
        $user       = new UserModel();
        $id         = session()->get('id_user');
        $education  = new EducationModel();
        $data = [
            'user'       => $user->find(session()->get('id_user')),
            'education'  => $education->where('id_user', $id)->find(),
        ];

        return view('dashboard/pendidikan', $data);
    }

    public function save()
    {
        $user       = new UserModel();
        $education  = new EducationModel();
        $education->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'id_user' => session()->get('id_user'),
        ]);
        return redirect()->to('pendidikan');
    }

    public function delete($id_education)
    {
        $education  = new EducationModel();
        $education->delete($id_education);
        return redirect()->to('pendidikan');
    }

    function update()
    {
        $user       = new UserModel();
        $education  = new EducationModel();
        $education->replace([
            'id_education' => $this->request->getPost('id_education'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'id_user' => session()->get('id_user'),
        ]);
        return redirect()->to('pendidikan');
    }
}