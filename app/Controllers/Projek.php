<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ProjectModel;

class Projek extends BaseController
{
    public function index()
    {
        $user     = new UserModel();
        $id       = session()->get('id_user');
        $project  = new ProjectModel();
        $data = [
            'user'     => $user->find($id),
            'project'  => $project->where('id_user', $id)->find(),
        ];
        return view('dashboard/projek', $data);
    }

    public function save()
    {
        $user     = new UserModel();
        $project  = new ProjectModel();
        $project->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'id_user' => session()->get('id_user'),
        ]);
        return redirect()->to('projek');
    }

    public function delete($id_project)
    {
        $project  = new ProjectModel();
        $project->delete($id_project);
        return redirect()->to('projek');
    }

    function update()
    {
        $user     = new UserModel();
        $project  = new ProjectModel();
        $project->replace([
            'id_project' => $this->request->getPost('id_project'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'id_user' => session()->get('id_user'),
        ]);
        return redirect()->to('projek');
    }

}